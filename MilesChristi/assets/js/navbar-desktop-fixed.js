let flag=true;
window.onscroll = function(){
	let actualLocation = window.pageYOffset;
	if(actualLocation>550 & screen.width>=1200){
		document.getElementById("navbar-desktop-fixed").style.display = "flex";
		document.getElementById("opacity").style.display = "none";
	}else{
		document.getElementById("navbar-desktop-fixed").style.display = "none";
		document.getElementById("opacity").style.display = "block";
	}
}