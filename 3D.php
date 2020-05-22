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
                <!--imag01-->
                <li class="flex-item">
               
                        <div id="slideshow">
                            <div>
                                <img src="3D/machine/01.png">
                            </div>
                            <div>
                                <img src="http://farm6.static.flickr.com/5230/5638093881_a791e4f819_m.jpg">
                            </div>
                            <div>
                                Pretty cool eh? This slide is proof the content can be anything.
                            </div>
                        </div>
                    
                </li>

                <!--text01-->
                <li class="flex-item">
                    <h1>Summary</h1>

                    <p>I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D
                        development.
                        I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8
                        games in total, doing:
                        Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation.
                        As a technical artist I have experience when it comes to both 3D and programming .
                        I'm used to work with both small and large teams, and knows the importance of communication.</p>
                    <hr>
                </li>


 


                <!----Flex Items ---->
                <!--imag01-->
                <li class="flex-item">
                    <h1>gallery</h1>
                    <div class="imageContainer">
                        <a href="3D/mountain.html">
                            <img src="3D/machine/01.png"></img>
                        </a>
                    </div>
                </li>

                <!--text01-->
                <li class="flex-item">
                    <h1>Summary</h1>

                    <p>I have a Bachelor in Games and Entertainment Technology where I'm specialized within 3D
                        development.
                        I am used to the whole 3D pipeline from sketch to build. During my studies i have worked with 8
                        games in total, doing:
                        Environment design, 3D moddeling/texturing, shader development, UI, programming and Animation.
                        As a technical artist I have experience when it comes to both 3D and programming .
                        I'm used to work with both small and large teams, and knows the importance of communication.</p>
                    <hr>
                </li>



                <!----Flex Items ---->
            </ul>
        </div>
        <!-- ------------------------------3D page content ---------------------------------->
    </div>

</body>

</html>