<?php
/* Smarty version 3.1.29, created on 2016-05-24 22:33:56
  from "D:\Stuff\SomeSoft\OpenServer\domains\noteholder.local\views\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5744aca460ced2_26230768',
  'file_dependency' => 
  array (
    'b9ec0d6fbc62acce50b41f678b0575e98c78188f' => 
    array (
      0 => 'D:\\Stuff\\SomeSoft\\OpenServer\\domains\\noteholder.local\\views\\main.tpl',
      1 => 1464118433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5744aca460ced2_26230768 ($_smarty_tpl) {
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
	<div class="folders"></div>
<!--	NOTES-->
	<div class="notes"></div>
	<div class="back"></div>
<!--	PLEASE SELECT YOUR FOLDER-->
    <div class="help">Please, select your folder</br> on the left side menu.</div> 
<!--	ACTION BTNS-->
	<div class="buttons">
    	<button class="action_btn create_note">Create Note</button>
        <button class="action_btn remove_note">Remove Note</button>
	<button class="action_btn create_folder">Create Folder</button>
	<button class="action_btn remove_folder">Remove Folder</button>
	</div>
<!--CONTEXT MENU-->
    <div class="itemName">
        <input type="hidden" name="item_name" id="item_name"></input>
    </div>
	<div class="cotext"></div>
	
	
</body><?php }
}
