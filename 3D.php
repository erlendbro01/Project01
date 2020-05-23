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
        <li class="flex-item">
          <h2 style="text-align:center">Slideshow Gallery</h2>

          <div class="container">
            <div class="mySlides">
              <div class="numbertext">1 / 3</div>
              <img src="3D/mountain/01.png" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 3</div>
              <img src="3D/mountain/02.png" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 3</div>
              <img src="3D/mountain/03.png" style="width:100%">
            </div>


            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>




          </div>
        </li>



        <!--text01-->
        <li class="flex-item" id="placehere">
          <h1>Foot of the mountain</h1>
          <hr>

          <p>Real-time render using assets from Exiles of Eternity (https://erlendbrodal.com/pages/games) during month 3 of development.

            The 3D models are made with Maya, Zbrush and Speedtree. The texturing was done procedurally with Substance Designer and Unreal shader graph.</p>
          <script>
            var icons = ["unity", "unreal"];
          addIcons([icons]);
        </script>
        </li>




        <!----Flex Items ---->
        <!--imag01-->
        <li class="flex-item">
          <h1>Gallery</h1>
          <div class="imageContainer">
            <a href="3D/mountain.html">
              <img src="3D/machine/01.png"></img>
            </a>
          </div>
        </li>




        <!--text01-->
        <li class="flex-item">
          <h1>Vintage Vending Machine</h1>
          <hr>
          <p>Created one weekend to practise high Poly to low Poly workflow. My goal was to create a mesh below 1K vertices. The current mesh is at 825. Maya for modeling, Painter for texturing & baking. Rendered in Marmoset.</p>
         
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
            if (n > slides.length) {
              slideIndex = 1
            }
            if (n < 1) {
              slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
          }
        </script>

      </ul>
    </div>
    <!-- ------------------------------3D page content ---------------------------------->
  </div>

</body>

</html>