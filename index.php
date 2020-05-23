<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

  <?php include('head.php'); ?>

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