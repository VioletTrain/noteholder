<?php

include_once 'checkF.php';
include_once 'recieveDataF.php';

/**
 * Форматирование запришваемой страницы
 * 
 * @param type $controllerName название контроллера
 * @param type $actionName название функции обработки страницы
 */
function loadPage($smarty, $controllerName, $actionName) {
 
    include_once PathPrefix . checkAuthStatus($controllerName) . PathPostfix;
    
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param type $smarty объект шаблонизатора
 * @param type $templateName название файла шаблона
 */

function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы, выводя значение 
 * value 
 * 
 * @param type $value переменная для вывода её на страницу
 * @param type $die
 */

function d($value = null, $die = 1) {
    echo 'Debug: <br/> <pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

/**
 * Преобразование результата работы функции выборки в ассоциативный массив
 * 
 * @param type $rs набор строк - результат работы SELECT
 * @return boolean
 */

function createSmartyRsArray($rs){
    if(! $rs){
        return false;
    }
    
    $smartyRs = array();
    while($row = mysql_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }
   
    return $smartyRs;   
}

function notesFunc($funcName){
    $res = null;
    
    $noteName = getItemName();
    $noteName = explode(",", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id);
        
        $res = $funcName($noteName[1], $user_id, $folder_id);
    } else {
        $res['success'] = 0;
    }
   
    echo json_encode($res);
}
