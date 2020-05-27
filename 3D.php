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


    <!----PERSNOAL PAGE--->
    <div class="gridItem_body">
      <!-- flexbox container -->
      <ul class="flex-container">
        <!----Flex Items ---->

        <!--imag01-->
        <li class="flex-item" >
          <div class="imageContainer">
            <img src="img/VendingMachine01.png">
          </div>
        </li>

        <!--text01-->
        <li class="flex-item" id= "01">
          <h1>Vintage Vending Machine</h1>
          <p>Created one weekend to practise high Poly to low Poly workflow. My goal was to create a mesh below 1K vertices.
             The current mesh is at 825. Maya for modeling, Painter for texturing & baking. Rendered in Maromset.</p>
         
          <script>
         var id = '01';
          var icons = ["maya","painter"];
          addIcons([icons], id);
          </script>
           <hr>
        </li>



          <!--imag02-->
          <li class="flex-item" >
          <div class="imageContainer">
            <img src="img/Ground01.png">
          </div>
        </li>

        <!--text02-->
        <li class="flex-item" id= "02">
          <h1>PBR Texturing</h1>
          <p>Made for a game project.</p>
         
          <script>
          var id = '02';
          var icons = ["designer"];
          addIcons([icons], id);
          </script>
           <hr>
        </li>


      </ul>
    </div>
    <!-- ------------------------------3D page content ---------------------------------->
  </div>
  <script src="javaScript.js"></script>
</body>

</html>