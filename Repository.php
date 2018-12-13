<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 12-Dec-18
 * Time: 2:57 PM
 */

class Repository
{
    public static function getAll(PDO $db, $table, $columns = ['*'], $orderBy = 'id'){
        $columns = implode(', ', $columns);
        $stmt = $db->query("SELECT {$columns} FROM {$table} ORDER BY {$orderBy} DESC");
        $result = [];

        while($row = $stmt->fetchObject()){
            $result[] = $row;
        }

        return $result;
    }

    public static function getSome(PDO $db, $table, $condition, $value, $columns = ['*']){
        $columns = implode(', ', $columns);

        $stmt = $db->query("SELECT {$columns} FROM {$table} WHERE {$condition}={$value}");

        $result = [];
        while ($row = $stmt->fetchObject()){
            $result[] = $row;
        }
        return $result;
    }
    public static function getRowsCount(PDO $db, $table){
        $stmt = $db->query("SELECT count(*) AS count FROM {$table}");
        $count = $stmt->fetchObject()->count;
        return $count;
    }

    public static function insert(PDO $db, $table, $insertValues)
    {
        $desc = $db->query("DESCRIBE {$table}");
        $columns = [];
        while($row = $desc->fetchObject()){
            if ($row->Field != 'id'){
                $columns[] = $row->Field;
            }
        }
        $columns = implode(',', $columns);

        $insertValues = array_map(function ($value){
            return "'{$value}'";
        }, $insertValues);

        $insertValues = implode(',', $insertValues);
        $stmt = $db->query("INSERT INTO {$table}({$columns}) VALUES({$insertValues})");
    }

    public static function update(PDO $db, $table, $columns, $data, $condition, $value){
        $data = array_map(function ($value){
            return "'{$value}'";
        }, $data);

        $setter = [];

        for($i = 0; $i < count($columns); $i++){
            $setter[] = $columns[$i] . '=' . $data[$i];
        }

        $setter = implode(', ', $setter);

        $stmt = $db->query("UPDATE {$table} SET {$setter} WHERE {$condition}={$value}");
    }

    public static function delete(PDO $db, $table, $condition, $value){
        $result = $db->query("DELETE FROM {$table} WHERE {$condition}={$value}");
    }

    public static function extrasDecoder(PDO $db, $string){
        $arr = explode(',', $string);
        $result = [];

        foreach ($arr as $item) {
            $result[] = Repository::getSome($db, 'extras', 'id', $item);
        }

        return $result;
    }
}