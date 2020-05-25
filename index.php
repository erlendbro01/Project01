<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

  <?php include('head.php'); ?>

  <style>

#button-home {
  background-color: rgb(98, 0, 255);
  color: #fff;
  font-variation-settings: "wght" 135;
    }

  </style>

</head>

<body style="background-color: #121212;">







<!-- css grid layout -->
<div class="grid-container">

<!-- Side Bar -->
  <div class="gridItem_sidebar"> 
    <?php include('sidebar.php'); ?>
</div>

<!-- Body -->
  <div class="gridItem_body"> 
    <?php include('body.php'); ?>
  </div>

  <!-- Footer -->
  <div class="gridItem_footer"> 
    <?php include('footer.php'); ?>
  </div>
</div>


<script src="javaScript.js"></script>

</body>
</html>