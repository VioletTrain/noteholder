<?php

function indexAction($smarty){
	include_once '../models/FoldersModel.php';

	$test = getCurrentUser();
	$testfolders = currentUserFolders($test);
	//d($testfolders);
	//$testfolders = array('test1' => 'kek', 'test2' => 'kek2');
	$smarty->assign('test', $test);
	$smarty->assign('testfolders', $testfolders);
    $smarty->assign('pageTitle', 'NoteHolder'); 
    loadTemplate($smarty, 'main');
}

