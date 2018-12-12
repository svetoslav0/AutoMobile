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
}