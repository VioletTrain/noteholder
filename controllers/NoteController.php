<?php

include_once '../models/FoldersModel.php';
include_once '../models/NotesModel.php';

//  Creating note
function cnoteAction(){
    $res = null;
    
    $noteName = getItemName();
    $noteName = explode("&amp;nbsp", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id);
        $res = addNewNote($noteName[1], $user_id, $folder_id, $noteName[0]);
    } else {
        $res['success'] = 0;
    }
   
    echo json_encode($res);
}

//  Removing note
function rnoteAction(){
    $res = null;
    
    $noteName = getItemName();
    $noteName = explode("&amp;nbsp", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id);
        
        $res = removeNote($noteName[1], $user_id, $folder_id);
    } else {
        $res['success'] = 0;
    }
   
    echo json_encode($res);
}

function ccontentAction(){
    $res = null;
    
    $noteName = getItemName();
    $noteName = explode("&amp;nbsp", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id);
        $note_id = getSelectedNote($noteName[1], $user_id, $folder_id);
        $res = addNoteContent($note_id, $noteName[2]);
    } else {
        $res['success'] = 0;
    }
    
    echo json_encode($res);
}

// View current folder notes
function vnotesAction(){
    $user_id = getCurrentUser();
    
    echo json_encode(currentUserNotes($user_id));
}