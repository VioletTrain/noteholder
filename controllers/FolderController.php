<?php

include_once '../models/FoldersModel.php';
include_once '../models/NotesModel.php';

/**
 * Creating new folder
 * 
 */
function cfolderAction(){
    $res = null;
    $folderName = getItemName();
    
    if($folderName){
        $user_id = getCurrentUser();
        $res = addNewFolder($user_id, $folderName);
    } else {
    	$res['success'] = 0;
    }

    echo json_encode($res);
}

function rfolderAction(){
    $res = null;
    $folderName = explode("&amp;nbsp", getItemName());
    
    if($folderName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id); 
        $res = removeFolder($user_id, $folderName[0], $folder_id);
    } else {
        $res['success'] = 0;
    }
    
    echo json_encode($folderName);
}
/**
 * View all current user`s folders
 * 
 */
function vfoldersAction(){
    $user_id = getCurrentUser();
    
    echo json_encode(currentUserFolders($user_id));
}
