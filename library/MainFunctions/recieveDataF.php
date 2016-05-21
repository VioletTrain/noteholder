<?php

/**
 * Get new folder name
 * 
 * @return type     new folder name
 */
function getItemName() {
    $itemName = trim(filter_input(INPUT_POST, "item_name"));
    $itemName = htmlspecialchars(mysql_real_escape_string($itemName));

    return $itemName;
}

function getContent($noteName){
    $content = trim(filter_input(INPUT_POST, $noteName));
    $content = htmlspecialchars(mysql_real_escape_string($content));
    
    return $content;
}

/**
 * Получение входных данных
 * 
 * @return type массив входных данных
 */
function requestParams() {
    $reqData = null;
    
    $reqData['email']   = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $reqData['pwd1']    = trim(filter_input(INPUT_POST, 'pwd1'));
    $reqData['pwd2']    = trim(filter_input(INPUT_POST, 'pwd2'));
    $reqData['name']    = $reqData['email'];
    
    return $reqData;
}

function query($string){
    return createSmartyRsArray(mysql_query($string));
}