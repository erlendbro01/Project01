<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

    <?php include('head.php'); ?>
    <style>
        #button-contact {
            background-color: rgb(100, 0, 255);
            color: #fff;
            font-variation-settings: "wght"135;
        }

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

                <!--imag01-->
                <li class="flex-item">
                    <div class="imageContainer">
                        <img src="img/Profile.png" width="30%"></img>
                    </div>
                </li>

                <!--text01-->
                <li class="flex-item" id="01">

                    <h2>Contact</h2>
                    <p>Feel free to contact me at: Erlendbro@hotmail.com </p>
                  


                </li>





            </ul>
        </div>
        <!-- ------------------------------3D page content ---------------------------------->
    </div>
    <script src="javaScript.js"></script>
</body>

</html>