<?php
/**
 * Получение входных данных
 * 
 * @return type массив входных данных
 */
function requestParams(){
    $reqData = null;
    
    $reqData['email']   = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    $reqData['pwd1']    = trim(filter_input(INPUT_POST, 'pwd1'));
    $reqData['pwd2']    = trim(filter_input(INPUT_POST, 'pwd2'));
    $reqData['name']    = $reqData['email'];
    
    return $reqData;
}

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

/**
 * Проверка статуса пользователя
 * 
 * @param type $controllerName      имя контроллера, 
 * который будет вызван, в зависимости от статуса 
 * пользователя
 * @return string
 */
function checkAuthStatus($controllerName){

    if($controllerName == 'Main'){
        
        if ($_SESSION['email']) {
            $controllerName = 'Main';
        } else {
            $controllerName = 'Index';
        }

    }

    return $controllerName;
}

/**
 * Проверка наличия входных данных
 *  
 * @param type $chData      входные данные
 * @param type $res         результат проверки
 * @return string
 */
function checkIncData($chData, $res){

    if(! $chData){
        $res['success'] = false;
        $res['message'] = 'Fill in all the fields/<br />wrong email value';
    } 

    return $res;
}

/**
 * Проверка повтора пароля при регистрации
 * 
 * @param type $pwd1    пароль
 * @param type $pwd2    повтор пароля
 * @param type $res     результат проверки
 * @return string
 */
function checkPwd_1_2($pwd1, $pwd2, $res){
 
    if($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Passwords don`t match';
    }

    return $res;
}


/**
 * Проверка параметров регистрации пользователя
 * 
 * @param type $email       email
 * @param type $pwd1        пароль
 * @param type $pwd2        повтор пароля
 * @return string           результат проверки
 */
function checkRegisterParams($email, $pwd1, $pwd2){
    $res = null;
    $res = checkPwd_1_2($pwd1, $pwd2, $res);
    $res = checkIncData($pwd2, $res);
    $res = checkIncData($pwd1, $res);
    $res = checkIncData($email, $res);
    
    return $res;
}

function getFolderName() {
    $folderName = trim($_REQUEST['fld_inp']);
    $folderName = htmlspecialchars(mysql_real_escape_string($folderName));

    return $folderName;
}

