<?php
/* Smarty version 3.1.29, created on 2016-05-07 09:39:10
  from "D:\Stuff\SomeSoft\OpenServer\domains\noteholder.local\views\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572d8d8e469a61_07954018',
  'file_dependency' => 
  array (
    'b9ec0d6fbc62acce50b41f678b0575e98c78188f' => 
    array (
      0 => 'D:\\Stuff\\SomeSoft\\OpenServer\\domains\\noteholder.local\\views\\main.tpl',
      1 => 1462603127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572d8d8e469a61_07954018 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>

<head>
	<title>NoteHolder</title>
	<link rel="shortcut icon" href="/img/logo.png">
	<link rel="stylesheet" href="/scss/main.css">
	<?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/main_php.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
	
</head>

<body>
	<!--	MENU-->
	<div class="menu">
		<div class="logo">
			<img src="/img/logo.png">
		</div>
		<div class="name">NoteHolder</div>
		<div class="btn settings_menu_btn">Settings</div>
		<div class="btn logout_menu_btn">Logout</div>
	</div>
<!--	FOLDERS-->
	<div class="folders">
                <!--
		<div class="folder folder1">
			<img src="/img/icons/folder.png">
			Folder 1
		</div>
                
		<div class="folder folder2">
			<img src="/img/icons/folder.png">
			Folder 2
		</div>
		<div class="folder folder3">
			<img src="/img/icons/folder.png">
			Folder 3
		</div>-->
	</div>
<!--	FOLDER BTNS-->
	<button class="folder_btn create_folder" onclick="CreateFolder();">CreateFolder();</button>
	<button class="folder_btn remove_folder" onclick="RemoveFolder();">RemoveFolder();</button>
<!--	PLEASE SELEC YOUR FOLDER-->
        <div class="help">Please, select your folder</br> on the left side menu.</div>
<!--CONTEXT MENU-->
        <div class="new_folder">
            <input type="hidden" name="fld_inp" id="fld_inp" value="testing"></input>
        </div>
	<div class="cotext"></div>
	
	
</body><?php }
}