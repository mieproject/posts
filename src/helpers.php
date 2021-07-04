<?php


function foreachOption($array){
    $html = '';
    foreach ($array as $item){
        $html .= "<option value='$item'>$item</option>";
    }
    return $html;
}
