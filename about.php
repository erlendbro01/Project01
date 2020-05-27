<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

    <?php include('head.php'); ?>
    <style>
        #button-about {
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

                    <h2>About Me</h2>
                    <p>My Name is Erlend Brodal, and I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D development.
                        I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8 games in total, doing: Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation.
                        As a technical artist I have experience when it comes to both 3D and programming. I'm used to work with both small and large teams, and knows the importance of communication!</p>
                    <br>


                    <h3>Experience</h3>
                    <p>Technical Artist at Way AS Trondheim, Norway
                        <br>
                        Bachelor in Games - Nord University</p>

                    <br>
                    <h3>Software Skills</h3>
                    <script>
                        var id = '01';
                        var icons = ["maya", "painter", "designer", "unreal", "unity", "alchemist", "speedtree"];
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