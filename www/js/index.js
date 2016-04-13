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
'logo': document.querySelector(".logo"),
'name': document.querySelector(".name"),
'content': document.querySelector(".content"),
'content2': document.querySelector(".content2"),
'log_menu_btn': document.querySelector(".log_menu_btn"),
'reg_menu_btn': document.querySelector(".reg_menu_btn"),
'log_form': document.querySelector(".log_form"),
'reg_form': document.querySelector(".reg_form"),
'log_btn': document.querySelector(".log_btn"),
'reg_btn': document.querySelector(".reg_btn"),
'log_cancel_btn': document.querySelector(".log_cancel_btn"),
'reg_cancel_btn': document.querySelector(".reg_cancel_btn"),
'show_pass_btn': document.querySelector(".show_pass_btn"),
'log_pass': document.querySelector(".log_pass"),
'back': document.querySelector(".back"),
'alert': document.querySelector(".alert"),
'icon': document.querySelector(".icon"),
'slide1': document.querySelector(".slide1"),
'slide2': document.querySelector(".slide2"),
'slide3': document.querySelector(".slide3"),
'nav_btns': document.querySelectorAll(".nav_btn"),
'left_btn': document.querySelectorAll(".left_btn"),
'right_btn': document.querySelectorAll(".right_btn")
}

var active=1;
	
//FUNCTIONS

ShowRegForm = function(){
	elems.reg_form.style.top="150px";
	elems.log_form.style.top="-500px";
	elems.back.style.opacity="1";
	elems.back.style.zIndex="4";
}

ShowLogForm = function(){
	elems.log_form.style.top="150px";
	elems.reg_form.style.top="-500px";
	elems.back.style.opacity="1";
	elems.back.style.zIndex="4";
}

ShowAlert = function(message){
	elems.alert.innerHTML=message;
	elems.alert.style.bottom="0";
	setTimeout(function(){elems.alert.style.bottom="-100px";}, 2000);
}

LoginSuccess = function(){
	elems.dbody.style.opacity=0;
}

HideForm = function(){
	elems.reg_form.style.top="-500px";
	elems.log_form.style.top="-500px";
	elems.back.style.opacity="0";
	setTimeout(function(){elems.back.style.zIndex="-1";}, 800);
}
	
ShowPass = function(){	
	elems.log_pass.setAttribute("type", "text");	
}

HidePass = function(){
	elems.log_pass.setAttribute("type", "password");
}

NextSlide = function(){
	if(active!=3){
		document.querySelector(".slide"+active).classList.remove("active", "passive");
		document.querySelector(".slide"+active).classList.add("passive");
		active++;
		document.querySelector(".slide"+active).classList.remove("active", "passive");
		document.querySelector(".slide"+active).classList.add("active");
	}
}

PrevSlide = function(){
	if(active!=1){
		document.querySelector(".slide"+active).classList.remove("active", "passive");
		document.querySelector(".slide"+active).classList.add("passive");
		active--;
		document.querySelector(".slide"+active).classList.remove("active", "passive");
		document.querySelector(".slide"+active).classList.add("active");
	}
}

AnimButtons = function(){
	setInterval(function(){
		for(i=0; i<elems.nav_btns.length; i++){
			if(!elems.nav_btns[i].classList.contains("blinked")){
				elems.nav_btns[i].classList.add("blinked");
			}else if(elems.nav_btns[i].classList.contains("blinked")){
				elems.nav_btns[i].classList.remove("blinked");
			}
		}
		console.log("changed");
	},1000);
}


	//PAGE ACTIONS

	//menu&content appearence
	setTimeout(function(){elems.dbody.style.opacity=1;},500);	
	AnimButtons();
	
	//PasswordShow
	$(".show_pass_btn").mousedown( function(){
		$(this).parent(".field_wrap").find(".field").addClass("focus");		
	});
	
	
	$(".field").focus(function(){
		$(".field").removeClass("focus");		
	});
	
	
	//scroll interactivity
	document.onwheel = function(e){
		var delta = e.deltaY || e.detail || e.wheelDelta;
		if(delta>0){
			NextSlide();
			console.log(delta);
		}
		if(delta<0){
			PrevSlide();
			console.log(delta);
		}
	}
	
	//nav btns click
	for(i=0; i<elems.left_btn.length; i++){
		elems.left_btn[i].addEventListener('click', PrevSlide);
	}
	for(i=0; i<elems.right_btn.length; i++){
		elems.right_btn[i].addEventListener('click', NextSlide);
	}
				
	//login form
	elems.log_menu_btn.onclick = function(){ShowLogForm();}
	elems.log_cancel_btn.onclick = function(){HideForm();}
	elems.show_pass_btn.onmousedown = function(){ShowPass();}
	elems.show_pass_btn.onmouseup = function(){HidePass();}
	elems.log_btn.onclick = function(){AuthoriseUser();}
	
	//register form
	elems.reg_menu_btn.onclick = function(){ShowRegForm();}
	elems.reg_cancel_btn.onclick = function(){HideForm();}
	elems.reg_btn.onclick = function(){RegisterNewUser();}
	
	//back click
	elems.back.onclick = function(){HideForm();}
	
	//	
	console.log("script_loaded");
}
