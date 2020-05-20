<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

  <?php include('head.php'); ?>

  <title>GITTTTT</title>

</head>

<body style="background-color: #151A1F;">


<!-- Load Icon Images -->
<div class="sketchfab-embed-wrapper">
    <iframe title="A 3D model" width="640" height="480" src="https://sketchfab.com/models/246b8bbf724b40e5b6005391323fd462/embed?autospin=1&autostart=1&camera=0&ui_infos=0&ui_controls=0&ui_stop=0&ui_watermark=0" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
    <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
        <a href="https://sketchfab.com/3d-models/military-container-246b8bbf724b40e5b6005391323fd462?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Military Container</a>
        by <a href="https://sketchfab.com/erlendbro?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">erlendbro</a>
        on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campaign=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
    </p>
</div>


<!-- Get Gyroscope -->

<h2 class ="base">print</h2>
    
<div class="grid-container">
<script>UPDATE();</script>




<!--SideBar -->
  <div class="gridItem_sidebar"> 
    <?php include('sidebar.php'); ?>
</div>



<!--Body -->
  <div class="gridItem_body"> 
    <?php include('body.php'); ?>
  </div>


</div>

</body>
</html>