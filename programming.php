<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

    <?php include('head.php'); ?>
    <style>
     

        .flex-item {
            width: 60%
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
              
             
                <script src="https://www.yr.no/sted/Danmark/Hovedstaden/København/ekstern_boks_time_for_time.js"></script><noscript><a href="https://www.yr.no/sted/Danmark/Hovedstaden/København/">yr.no: Værvarsel for København</a></noscript>

              
            </ul>
         

            <ul class="flex-container">
                <!----Flex Items ---->
              
             <p>Working on something big this year. Meanwhile, enjoy the weather!</p>

              
            </ul>
        </div>
        <!-- ------------------------------3D page content ---------------------------------->
    </div>
    <script src="javaScript.js"></script>
</body>

</html>