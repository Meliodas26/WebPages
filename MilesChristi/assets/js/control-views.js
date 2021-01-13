var showNavbar = true;
var header = document.getElementById("header"); 
var nav = document.getElementById("nav-mobile");
function view_navbar(){	
	if(showNavbar){
		header.style.display = "none";
		nav.style.display = "flex";
	}else{
		header.style.display = "block";
		nav.style.display = "none";
	}
	showNavbar = !showNavbar;
}