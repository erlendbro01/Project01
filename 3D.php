<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

    <?php include('head.php'); ?>
    <style>
    .flex-item {
        width: 40%
    }

    @media only screen and (max-width: 1200px) {

        .flex-item {
            width: 90%;

        }
    }
    </style>

</head>

<body style="background-color: #121212">

    <script src="javaScript.js"></script>

    <!-- STATIC PANELS -->
    <div class="grid-container">

        <!-- SideBar -->
        <div class="gridItem_sidebar">
            <?php include('sidebar.php'); ?>
        </div>


        <!-- Footer -->
        <div class="gridItem_footer">
            <?php include('footer.php'); ?>
        </div>


        <!-- ------------------------------3D page content ---------------------------------->
        <div class="gridItem_body">

            <!-- flexbox container -->
            <ul class="flex-container">

             

                <!----Flex Items ---->
                <!--imag01-->
                <li class="flex-item">
                    <h1>gallery</h1>
                    <div class="imageContainer">
                        <a href="3D/mountain.html">
                            <img src="3D/machine/01.png"></img>
                        </a>
                    </div>
                </li>

                <!--text01-->
                <li class="flex-item">
                    <h1>Summary</h1>

                    <p>I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D
                        development.
                        I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8
                        games in total, doing:
                        Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation.
                        As a technical artist I have experience when it comes to both 3D and programming .
                        I'm used to work with both small and large teams, and knows the importance of communication.</p>
                    <hr>
                </li>



                <!----Flex Items ---->
                <li class="flex-item">
                <h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="3D/machine/01.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="3D/mountain/01.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img_mountains_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img_lights_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img_nature_wide.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img_snow_wide.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>



 
</div>
</li>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

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

            </ul>
        </div>
        <!-- ------------------------------3D page content ---------------------------------->
    </div>

</body>

</html>