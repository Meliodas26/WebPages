var showNavbar = true;
var opacity = document.getElementById("opacity"); 
var nav = document.getElementById("nav-mobile");
//var navFixed = document.getElementById("navbar-mobile-fixed");
function viewNavbar_mobile(){	
	if(showNavbar){
		if(window.pageYOffset<75)
			opacity.style.display = "none";
		else
			document.getElementById("navbar-mobile-fixed").style.display= "none";
		nav.style.display = "flex";
	}
	else{
		if(window.pageYOffset<75)
			opacity.style.display = "block";
		else
			document.getElementById("navbar-mobile-fixed").style.display= "flex";
		nav.style.display = "none";
	}
	showNavbar = !showNavbar;
}