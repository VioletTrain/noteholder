<!DOCTYPE HTML>

<head>
	<title>NoteHolder</title>
	<link rel="shortcut icon" href="/img/logo.png">
	<link rel="stylesheet" href="/scss/main.css">
	<script src="/js/main.js"></script>
	<script src="/js/main_php.js"></script>
	<script src="/js/jquery.js"></script>
	
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
	
	
</body>