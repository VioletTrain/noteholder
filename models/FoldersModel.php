<?php

function addNewFolder($user_id, $folderName){
    $user_id  = htmlspecialchars(mysql_real_escape_string($user_id));
    $folderName   = htmlspecialchars(mysql_real_escape_string($folderName));
            
    $rs = mysql_query("INSERT INTO 
                        `folders` (`user_id`, `name`)
                        VALUES ('{$user_id}', '{$folderName}')");
    
    if($rs){
        $rs = query("SELECT * FROM `folders`
                    WHERE `user_id` = '{$user_id}' and `name` = '{$folderName}'
                    LIMIT 1");
        
        if(isset($rs[0])){
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }
    return $rs;
}

function removeFolder($user_id, $folderName){
    $user_id    = htmlspecialchars(mysql_real_escape_string($user_id));
    $folderName = htmlspecialchars(mysql_real_escape_string($folderName));
    
    $rs = mysql_query("DELETE FROM `folders` WHERE `user_id` = '{$user_id}' and `name` = '{$folderName}'");
    
    if($rs){        
        $rs = query("SELECT * FROM `folders` WHERE `user_id` = '{$user_id}' and `name` = '{$folderName}' LIMIT 1");
        
        if(! isset($rs[0])){
            $rs['success'] = 1;
        } else {
            $rs['success'] = 0;
        }
    } else {
        $rs['success'] = 0;
    }
    return $rs;
}

function getCurrentUser(){
    $sql = "SELECT `id` FROM users
            WHERE `email` = '{$_SESSION['email']}' 
            LIMIT 1";
    
    $rs = mysql_query($sql);
    $rs = mysql_fetch_assoc($rs);

    return $rs['id'];
}

function currentUserFolders($user_id){
    return query("SELECT `name` FROM folders WHERE `user_id` = '{$user_id}'");
}


