window.onload=function(){
	
//VARIABLES
	
//scss vars
var color = {
'dark_indigo':   "#303F9F",
'indigo': 	 	"#3F51B5",
'light_indigo':  "#C5CAE9",
'white':    	 "#FFFFFF",
'orange':     	"#FF5722",
'dark':    		"#212121",
'gray':  		"#727272",
'light':     	"#B6B6B6"
}
	
//elements vars
var elems = {
	'dbody': document.body,
	'menu': document.querySelector(".menu"),
	'settings_menu_btn': document.querySelector(".settings_menu_btn"),
	'logout_menu_btn': document.querySelector(".logout_menu_btn"),
	'folders': document.querySelector(".folders"),
	'help': document.querySelector(".help"),
	
}
var folder = elems.folders.childNodes;
	
//FUNCTIONS
InitFolders = function(){
        
	for(i=0; i<folder.length; i++){
			folder[i].addEventListener('click', SelectFolder);
			console.log(folder[i]);
		}
}

CreateFolder = function(){
	f = document.createElement("div");
	f_name = prompt("Enter folder name");
	if(f_name!=""&&f_name!=null){
		f.className = "folder folder_"+f_name;
		f.innerHTML = '<img src="/img/icons/folder.png">'+f_name;
		elems.folders.appendChild(f);
	}
	document.getElementById('fld_inp').value = f_name;
        AddNewFolder();
    //  ViewFolders();
	InitFolders();
}

RemoveFolder = function(){
	elems.folders.removeChild(t);
	window.t = null;
	elems.help.style.display = "block";
	setTimeout(function(){
		elems.help.style.opacity=1;
	},500);
	InitFolders();
}

SelectFolder = function(){
	elems.help.style.opacity = 0;
	setTimeout(function(){
		elems.help.style.display="none";
	},500);
	
	if(t!=undefined){
		t.style.background = color.white;
	}
	window.t = this;
	this.style.background = color.light_indigo;
}

ContextMenu = function(){
	if(t!=null){
		console.log("yes");
	}
}

Logout = function(){
	var ans = confirm("Do you really want to logout?");
	LoggingOut();
	if(ans){
		elems.dbody.style.opacity=0;
	}
}	



	//PAGE ACTIONS
	//page load
	setTimeout(function(){elems.dbody.style.opacity=1;},500);
	InitFolders();
	window.t = null;
	
	//settings&logout
	elems.logout_menu_btn.onclick = function(){Logout();};
	
	//context
	window.oncontextmenu = function(){ContextMenu();return false;};
	
	//	
	console.log("script_loaded");
}

