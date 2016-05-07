<?php

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