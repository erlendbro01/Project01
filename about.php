<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

  <?php include('head.php'); ?>
  <style>
    .flex-item {
      width: 50%
    }
    @media only screen and (max-width: 1200px) {

.flex-item{
  width: 90%
}
    }

    
  </style>

</head>

<body style="background-color: #151A1F;">

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

    <!-- STATIC PANELS -->



    <!-- About Page START -->
    <div class="gridItem_body">

      <!-- flexbox container -->
      <ul class="flex-container">

        <!--Summary-->
        <li class="flex-item">
          <h1>Summary</h1>

          <p>I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D development.
            I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8 games in total, doing:
            Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation. As a technical artist I have experience when it comes to both 3D and programming .
            I'm used to work with both small and large teams, and knows the importance of communication.</p>
          <hr>
        </li>

        <!--Skills-->
        <li class="flex-item">
          <h1>Skills</h1>

          <p>I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D development.
            I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8 games in total, doing:
            Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation. As a technical artist I have experience when it comes to both 3D and programming .
            I'm used to work with both small and large teams, and knows the importance of communication.</p>
            <hr>
          <!--img-->
          <div class="imageContainer">
            <a href="3D/mountain.html">
              <img src="3D/machine/01.png"></img>
            </a>
          </div>
        </li>

        <!--Experience-->
        <li class="flex-item">
          <h1>Experience</h1>

          <p>Software Developer at Way AS Trondheim, Norway</p>

          <div class="imageContainer">
            <a href="3D/mountain.html">
              <img src="3D/machine/01.png"></img>
            </a>
          </div>
        </li>

      </ul>
    </div>
  </div>

</body>

</html>