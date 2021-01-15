let flag=true;

window.onscroll = function(){
	let actualLocation = window.pageYOffset;
	if(actualLocation>125 & screen.width>=1200)
		document.getElementById("navbar-desktop").style.display = "flex";
	else
	document.getElementById("navbar-desktop").style.display = "none";
}