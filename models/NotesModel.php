<?php

function addNewNote($noteName, $user_id, $folder_id){
    $noteName = htmlspecialchars(mysql_real_escape_string($noteName));
    $noteName = trim($noteName);
    
    $rs = mysql_query("INSERT INTO `notes` (`name`, `user_id`, `folder_id`) 
                     VALUES ('{$noteName}', '{$user_id}', '{$folder_id}')");
   
    if($rs){
        $rs = query("SELECT * FROM `notes`
                    WHERE `user_id` = '{$user_id}' and `name` = '{$noteName}' and `folder_id` = '{$folder_id}'
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

function currentFolderNotes($user_id, $folder_id){
    $rs = mysql_query("SELECT `name` FROM `notes` WHERE `user_id` = '{$user_id}' and `folder_id` = '{$folder_id}'");
    $rs = createSmartyRsArray($rs);
    
    return $rs;
}

function getSelectedFolder(){
    $fname = getItemName();
    $fname = explode(",", $fname);
    $rs = mysql_query("SELECT `id` FROM `folders` WHERE `name` = '{$fname[0]}' LIMIT 1");
    $rs = mysql_fetch_assoc($rs);
    
    return $rs['id'];
}

