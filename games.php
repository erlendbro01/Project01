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


        <!----GAMES PAGE--->
        <div class="gridItem_body">

            <!-- flexbox container -->
            <ul class="flex-container">



                <!----Flex Items ---->
                <!--imag01-->
                <li class="flex-item">
                    <div class="imageContainer">
                        
                            <img src="img/Exiles01.png">
                     
                    </div>
                </li>

                <!--text01-->
                <li class="flex-item" id="01">
                    <h1>Exiles of Eternity</h1>
                    <p>The game is a Battle Royale mixed with moba elements. Up to 18 players starts on a 1x1 square kilometer map, where they fight until last man standing.
                        The combat is spellbased, with different character using unique skills.
                        Each player have the ability to level up their character and spells by killing monsters spread across the world, or fighting other players.
                        My main contribution to the game has been creating the character animation controller, environment (Props and terrain), shaders, particle effects, sound and UI.</p>
                  
          <script>
              var id = '01';
          var icons = ["maya","designer","painter","unreal","speedtree","alchemist"];
          addIcons([icons],id);
          </script>
           <hr>
        </li>
                </li>



            </ul>
        </div>
        <!-- ------------------------------3D page content ---------------------------------->
    </div>
    <script src="javaScript.js"></script>
</body>

</html>