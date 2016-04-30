<?php

function addNewFolder($user_id, $folderName){

    $sql = "INSERT INTO 
            folders (`user_id`, `name`)
            VALUES ('{$user_id}', '{$folderName}')";
            
    $rs = mysql_query($sql);
    
    if($rs){
        $sql = "SELECT * FROM folders 
                WHERE `user_id` = '{$user_id}' and `name` = '{$folderName}'
                LIMIT 1";
        
        $rs = mysql_query($sql);
        $rs = createSmartyRsArray($rs);
        
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

function getCurrentUser(){
    $sql = "SELECT `id` FROM users
            WHERE `email` = '{$_SESSION['email']}' 
            LIMIT 1";
    
    $rs = mysql_query($sql);
    $rs = mysql_fetch_assoc($rs);

    return $rs['id'];
}

function currentUserFolders($user_id){
    
    $sql = "SELECT `name`
            FROM folders
            WHERE `user_id` = '{$user_id}'";
            
    $rs = mysql_query($sql);
    
    $rs = createSmartyRsArray($rs);

    return $rs;
}


