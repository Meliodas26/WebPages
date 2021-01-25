<section class="events generic-2">
	<div class="title">
		<div class="center-triangle"><div class="triangle"></div></div>
		<h2>Próximos eventos</h2>
	</div>
	<div class="slideshow-container">
		<div class="event mySlides appear-1">
			<div class="img" style="background-image: url(assets/img/prueba.png);">
				<div class="tag">Jóvenes-1</div>
			</div>
			<div class="information">
				<h4>Lorem Ipsum</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				<div><a href="#">saber más</a></div>
			</div>
		</div>
		<div class="event mySlides appear-1">
			<div class="img" style="background-image: url(assets/img/blog.png);">
				<div class="tag">Jóvenes-2</div>
			</div>
			<div class="information">
				<h4>Lorem Ipsum</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				<div><a href="#">saber más</a></div>
			</div>
		</div>
		<div class="event mySlides appear-1">
			<div class="img" style="background-image: url(assets/img/header.jpg);">
				<div class="tag">Jóvenes-3</div>
			</div>
			<div class="information">
				<h4>Lorem Ipsum</h4>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
				<div><a href="#">saber más</a></div>
			</div>
		</div>

		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<!-- The dots/circles -->
	<div style="text-align:center">
  	<span class="dot" onclick="currentSlide(1)"></span>
  	<span class="dot" onclick="currentSlide(2)"></span>
  	<span class="dot" onclick="currentSlide(3)"></span>
	</div>
	<script>
		var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 
	</script>
</section>

<!--
<h1 style="background-color: red">Modificando</h1>
<section class="events">
	<div class="component title">
		<h2>Próximos eventos</h2>
	</div>
	<div class="elements">
		<?php //include("components/event.php");?>
		<?php //include("components/event.php");?>
		<?php //include("components/event.php");?>
	</div>
</section>
-->