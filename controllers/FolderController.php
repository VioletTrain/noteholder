<?php

include_once '../models/FoldersModel.php';

/**
 * Creating new folder
 * 
 */
function cfolderAction(){
    $res = null;
    $folderName = getFolderName();
    
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
    $folderName = getFolderName();
    
    if($folderName){
        $user_id = getCurrentUser();
        $res = removeFolder($user_id, $folderName);
    } else {
        $res['success'] = 0;
    }
    
    echo json_encode($res);
}
/**
 * View all current user`s folders
 * 
 */
function vfoldersAction(){
    $user_id = getCurrentUser();
    
    echo json_encode(currentUserFolders($user_id));
}
