<?php
/* Smarty version 3.1.29, created on 2016-04-20 19:08:54
  from "C:\OpenServer\domains\noteholder-master.local\views\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5717a99658f5d1_71309038',
  'file_dependency' => 
  array (
    'b479eb86857789e3d3d04fea119020ed47e003a3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\noteholder-master.local\\views\\main.tpl',
      1 => 1461168532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5717a99658f5d1_71309038 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>

<head>
	<title>NoteHolder</title>
	<link rel="shortcut icon" href="/img/logo.png">
	<link rel="stylesheet" href="/scss/main.css">
	<?php echo '<script'; ?>
 src="/js/main_php.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
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
		</div>
	</div>
<!--	FOLDER BTNS-->
	<button class="folder_btn create_folder" onclick="CreateFolder();">CreateFolder();</button>
	<button class="folder_btn remove_folder" onclick="RemoveFolder();">RemoveFolder();</button>
<!--	PLEASE SELEC YOUR FOLDER-->
	<div class="help">Please select your folder</br> on the left side menu</div>

<!--CONTEXT MENU-->
	<div class="cotext"></div>
	
	
</body><?php }
}
