<?php
/* Smarty version 3.1.29, created on 2016-05-08 18:05:47
  from "D:\Stuff\SomeSoft\OpenServer\domains\noteholder.local\views\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572f55cb374154_26135647',
  'file_dependency' => 
  array (
    'b9ec0d6fbc62acce50b41f678b0575e98c78188f' => 
    array (
      0 => 'D:\\Stuff\\SomeSoft\\OpenServer\\domains\\noteholder.local\\views\\main.tpl',
      1 => 1462719945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572f55cb374154_26135647 ($_smarty_tpl) {
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
	</div>
<!--	FOLDER BTNS-->
	<button class="folder_btn create_folder" onclick="CreateFolder();">CreateFolder();</button>
	<button class="folder_btn remove_folder" onclick="RemoveFolder();">RemoveFolder();</button>
        <button class="folder_btn create_note" onclick="CreateNote();">CreateNote();</button>
	<button class="folder_btn remove_note" onclick="RemoveNote();">RemoveNote();</button>
<!--	PLEASE SELEC YOUR FOLDER-->
        <div class="help">Please, select your folder</br> on the left side menu.</div>
<!--CONTEXT MENU-->
        <div class="new_folder">
            <input type="hidden" name="folder_name" id="folder_name"></input>
        </div>
	<div class="cotext"></div>
	
	
</body><?php }
}
