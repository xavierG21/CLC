<html>
	<head>
		<style>


/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
		</style>
		


	</head>

<body>
	<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div align="center">
  <div class="mySlides">
    <div class="numbertext">1 / 4</div>
      <img src="images/aling.jpg" style="width:20%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
      <img src="images/big_clc.png" style="width:20%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
      <img src="img_mountains_wide.jpg" style="width:20%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 4</div>
      <img src="img_lights_wide.jpg" style="width:20%">
  </div>
</div>
  

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>



  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/aling.jpg" style="width:50%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="images/big_clc.png" style="width:50%" onclick="currentSlide(2)" alt="Trolltunga, Norway">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:50%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:50%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    
  </div>

</div>
<ul class="qv_carousel_single d_inline_middle">
									<a href="#" data-image="images/quick_view_img_7.jpg" data-zoom-image="images/preview_zoom_1.jpg"><img src="photo/{$obj->color_one}" alt="" width='100px' height='100px'></a>
									<a href="#" data-image="images/quick_view_img_8.jpg" data-zoom-image="images/preview_zoom_2.jpg"><img src="photo/{$obj->color_two}" alt="" width='100px' height='100px'></a>
									<a href="#" data-image="images/quick_view_img_9.jpg" data-zoom-image="images/preview_zoom_3.jpg"><img src="photo/{$obj->color_three}" alt="" width='100px' height='100px'></a>
									
								</ul>
</body>



</html>
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
