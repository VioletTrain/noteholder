<?php

/**
 * Get new folder name
 * 
 * @return type     new folder name
 */
function getFolderName() {
    $folderName = trim(filter_input(INPUT_POST, 'fld_inp'));
    $folderName = htmlspecialchars(mysql_real_escape_string($folderName));

    return $folderName;
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
