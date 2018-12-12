<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 12-Dec-18
 * Time: 2:57 PM
 */

class Repository
{
    public static function getAll(PDO $db, $table, $columns = ['*']){
        $columns = implode(', ', $columns);
        $stmt = $db->query("SELECT {$columns} FROM {$table}");
        $result = [];

        while($row = $stmt->fetchObject()){
            $result[] = $row;
        }

        return $result;
    }
}