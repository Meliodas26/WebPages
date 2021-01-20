var showNavbar = true;
var opacity = document.getElementById("opacity"); 
var nav = document.getElementById("nav-mobile");
function viewNavbar_mobile(){	
	if(showNavbar){
		nav.style.display = "flex";
		opacity.style.display = "none";
	}
	else{
		nav.style.display = "none";
		opacity.style.display = "block";
	}
	showNavbar = !showNavbar;
}