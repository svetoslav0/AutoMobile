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

    public static function extrasBuilder($array){
        $first = [];
        $second = [];
        for($i = 0; $i < count($array); $i++){
            if ($i % 2 == 0){
                $first[] = $array[$i];
            }else{
                $second[] = $array[$i];
            }
        }

        $result = "<div class='modal-body row'>";
        $result .= "<div class='col-md-1'></div>";
        $result .= "<div class='col-md-3'><ul class='list-group list-group-flush'>";
        foreach ($first as $item) {
            $result .= "<li class=\"list-group-item\">" . $item[0]->extra ."</li>";
        }
        $result .= "</ul></div>";
        $result .= "<div class='col-md-3'><ul class='list-group list-group-flush'>";
        foreach ($second as $item) {
            $result .= "<li class=\"list-group-item\">" . $item[0]->extra ."</li>";
        }
        $result .= "</ul></div>";
        $result .= "</div>";

        return $result;
    }
}