<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

  <?php include('head.php'); ?>
  <style>
    #button-home {
      background-color: rgb(100, 0, 255);
      color: #fff;
      font-variation-settings: "wght"135;
    }

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


    <!----PERSNOAL PAGE--->
    <div class="gridItem_body">

      <!-- flexbox container -->
      <ul class="flex-container">

        <!----Flex Items ---->
        <!--imag01-->
        <li class="flex-item">
          <div class="imageContainer">

            <img src="img/Mountain01.png">

          </div>
        </li>

        <!--text01-->
        <li class="flex-item" id="01">
          <h1>Foot of The Mountain</h1>
          <p>Real-time render using Unreal Engine This is a personal project I worked on, to improve my skills in terrain creation</p>
          <script>
            var id = '01';
            var icons = ["maya", "designer", "painter", "unreal", "speedtree", "alchemist", "zbrush"];
            addIcons([icons], id);
          </script>
          <hr>
        </li>

      </ul>
    </div>
    <!-- ------------------------------3D page content ---------------------------------->
  </div>

</body>

</html>