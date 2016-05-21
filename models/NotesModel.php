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


function removeNote($noteName, $user_id, $folder_id){
    $noteName = htmlspecialchars(mysql_real_escape_string($noteName));
    $noteName = trim($noteName);
    
    $rs = mysql_query("DELETE FROM `notes` WHERE `name` = '{$noteName}'
                      and `user_id` = '{$user_id}'
                      and `folder_id` = '{$folder_id}'");
                      
    if($rs){        
        $rs = query("SELECT * FROM `notes` WHERE `name` = '{$noteName}' 
        and `user_id` = '{$user_id}' 
        and `folder_id` = '{$folder_id}' LIMIT 1");
        
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

function currentFolderNotes($user_id, $folder_id){
    $rs = mysql_query("SELECT `name` FROM `notes` WHERE `user_id` = '{$user_id}' and `folder_id` = '{$folder_id}'");
    $rs = createSmartyRsArray($rs);
    
    return $rs;
}

function getSelectedFolder($user_id){
    $fname = getItemName();
    $fname = explode(",", $fname);
    $rs = mysql_query("SELECT `id` FROM `folders` WHERE `user_id` = '{$user_id}' and `name` = '{$fname[0]}' LIMIT 1");
    $rs = mysql_fetch_assoc($rs);
    
    return $rs['id'];
}

function getSelectedNote($noteName, $user_id, $folder_id){
    $rs = mysql_query("SELECT `id` FROM `notes` WHERE `name` = '{$noteName[1]}' 
                            and `user_id` = '{$user_id}'
                            and `folder_id` = '{$folder_id}' 
                            LIMIT 1");
    
    $rs = mysql_fetch_assoc($rs);
    return $rs['id'];
}

function addNoteContent($note_id, $content){
    $rs = mysql_query("UPDATE `notes`
                      SET `content` = '{$content}'
                      WHERE `id` = '{$note_id}'");
                      
    if($rs){
        $rs['success'] = 1;
    } else {
        $rs['success'] = 0;
    }
    
    return $rs;
}
