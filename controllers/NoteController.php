<?php

include_once '../models/FoldersModel.php';
include_once '../models/NotesModel.php';

function cnoteAction(){
    $res = null;
    $noteName = getItemName();
    $noteName = explode(",", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder();
        
        $res = addNewNote($noteName[1], $user_id, $folder_id);
    } else {
        $res['success'] = 0;
    }
    
    echo json_encode($res);
}

function vnotesAction(){
    $user_id = getCurrentUser();
    $folder_id = getSelectedFolder();
    
    echo json_encode(currentFolderNotes($user_id, $folder_id));
}