<!DOCTYPE html>
<html>

<head style="background-color: #121212;">

    <?php include('head.php'); ?>
    <style>

    #button-home {
        background-color: rgb(100, 0, 255);
        color: #fff;
        font-variation-settings: "wght" 135;
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


    <!-- ------------------------------3D page content ---------------------------------->
    <div class="gridItem_body">

    <!-- flexbox container -->
        <ul class="flex-container">
            
            <!----Flex Items ---->
            <li class="flex-item">

                <div class="container">
                    <div class="mySlides">
                        <div class="numbertext">1 / 3</div>
                        
                        <img src="3D/exiles/01.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 3</div>
                        
                        <img src="3D/exiles/02.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 3</div>
                        
                        <img src="3D/exiles/03.png" style="width:100%">
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </li>



            <!--text01-->
            <li class="flex-item" id="placehere">

                <h1>Exiles of Eternity</h1>


                <p>Short description: The game is a Battle Royale mixed with moba elements. Up to 18 players starts on a 1x1 square kilometer map, where they fight until last man standing. The combat is spellbased, with different character using unique skills. Each player have the ability to level up their character and spells by killing monsters spread across the world, or fighting other players.

                My main contribution to the game has been creating the character animation controller, environment (Props and terrain), shaders, particle effects, sound and UI.</p>
                
                <script>
                var icons = ["maya", "unreal","painter","designer","alchemist","speedtree"];
                addIcons([icons]);
                </script>
                
                <hr>
            </li>
            
            <!----Flex Items ---->
            <!--imag01-->
            <li class="flex-item">
                <div class="imageContainer">
                    <a href="3D/mountain.html">
                        <img src="3D/machine/01.png">
                    </a>
                </div>
            </li>
            
            <!--text01-->
            <li class="flex-item">
                <h1>Vintage Vending Machine</h1>

                <p>Created one weekend to practise high Poly to low Poly workflow. My goal was to create a mesh below 1K vertices. The current mesh is at 825. Maya for modeling, Painter for texturing & baking. Rendered in Marmoset.</p>
                
                <hr>
            </li>
            
                <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("demo");
                var captionText = document.getElementById("caption");
                if (n > slides.length) {
                slideIndex = 1
                }
                if (n < 1) {
                slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                captionText.innerHTML = dots[slideIndex - 1].alt;
                }
                </script>

                </ul>
            </div>
    <!-- ------------------------------3D page content ---------------------------------->
        </div>

    </body>

</html>