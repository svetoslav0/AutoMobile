<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 12-Dec-18
 * Time: 7:14 PM
 */

class HTMLBuilder
{
    public static function getAllOptions($db, $table, $column){
        $fetched = Repository::getAll($db, $table);
        $result = "<select name='{$table}'>\n";
        foreach ($fetched as $key) {
            $result .= "<option value='{$key->id}'>{$key->$column}</option>\n";
        }
        $result .= '</select>';
        return $result;
    }
}