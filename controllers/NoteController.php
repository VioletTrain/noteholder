<?php

include_once '../models/FoldersModel.php';
include_once '../models/NotesModel.php';

//  Creating note
function cnoteAction(){
    notesFunc("addNewNote");
}

//  Removing note
function rnoteAction(){
    notesFunc("removeNote");
}

function ccontentAction(){
    $res = null;
    
    $noteName = getItemName();
    $noteName = explode(",", $noteName);
    
    if($noteName){
        $user_id = getCurrentUser();
        $folder_id = getSelectedFolder($user_id);
        
        $note_id = getSelectedNote($noteName[1], $user_id, $folder_id);
        /*if($note_id){
            $content = getContent($noteName);
            $res = addNoteContent($note_id, $content);
        }*/
    } else {
        $res['success'] = 0;
    }
    
    echo json_encode($folder_id);
}

// View current folder notes
function vnotesAction(){
    $user_id = getCurrentUser();
    $folder_id = getSelectedFolder($user_id);
    
    echo json_encode(currentFolderNotes($user_id, $folder_id));
}