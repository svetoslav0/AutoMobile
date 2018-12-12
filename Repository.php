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
        $stmt = $db->query("SELECT {$columns} FROM {$table} ORDER BY {$orderBy}");
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
}