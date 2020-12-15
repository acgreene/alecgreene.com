<html> 
    <head>

        <!-- Link to the global & index page style sheet. -->
        <link rel="stylesheet" href="styles/globalStyle.css">

        <!-- Must add this for @media functionality -->
        <meta name ="viewport" content="width=device-width, initial-scale=1">

        <!-- Load in the feather icon library, if this ever breaks try src="node_modules/feather-icons/dist/icons/feather.js" -->
        <script src="https://unpkg.com/feather-icons"></script>

        <!-- Links to JavaScript libraries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <!-- <script src="node_modules/Blotter-master/build/blotter.min.js"></script> -->

    </head>

    <body> 
        <!-- Mobile side navigation toolbar -->
        <span class="open-mobile" data-feather="menu" onclick="openNav()"></span> 
        
        <div id="mobile-nav" class="mymobile-nav">
            <a href="javascript:void(0)" class="close-mobile" onclick="closeNav()"><span data-feather="x"></span></a>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="eecs.php">Engineering</a>
            <a href="audio.php">Audio</a>
            <a href="contact.php">Contact</a>

            <div class = "socialmobile-nav"> 
                <br> <br>
                <a class="git-s" href="https://github.com/acgreene" target="_blank"><span data-feather="github"></span></a>
                <br>
                <a class="linkedin-s" href="https://www.linkedin.com/in/alecgreene/" target="_blank"><span data-feather="linkedin"></span></a>
                <br>
                <a class="twtr-s" href="https://twitter.com/aleccgreene" target="_blank"><span data-feather="twitter"></span></a>
            </div> 
        </div>

        <script> 
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
                function openNav() {
                    document.getElementById("mobile-nav").style.width = "250px";
                    document.getElementById("intro-head").style.marginLeft = "300px";
                }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
                function closeNav() {
                    document.getElementById("mobile-nav").style.width = "0";
                    document.getElementById("intro-head").style.marginLeft = "0";
                    document.body.style.backgroundColor = "var(--pitch_black)";
                }
        </script>

        <!-- Social media & navigation icons -->
        <div class = "social"> 
            <a class="home" style="cursor: none;" href="index.php"><span data-feather="home"></span></a>
            <a class="contact" style="cursor: none;" href="contact.php"><span data-feather="mail"></span></a>
            <a class="linkedin" style="cursor: none;" href="https://www.linkedin.com/in/alecgreene/" target="_blank"><span data-feather="linkedin"></span></a>
            <a class="twtr" style="cursor: none;" href="https://twitter.com/aleccgreene" target="_blank"><span data-feather="twitter"></span></a>
            <a class="git" style="cursor: none;" href="https://github.com/acgreene" target="_blank"><span data-feather="github"></span></a>
        </div> 

        <script>
            feather.replace()
        </script>
  
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        
        <!-- JavaScript image hover and mouse animations -->
        <script>
                var cursor = $(".cursor"),
                    follower = $(".cursor-follower");

                var posX = 0,
                    posY = 0,
                    mouseX = 0,
                    mouseY = 0;

                TweenMax.to({}, 0.016, {
                    repeat: -1,
                    onRepeat: function() {
                        posX += (mouseX - posX) / 9;
                        posY += (mouseY - posY) / 9;

                        TweenMax.set(follower, {
                            css: {
                                left: posX - 20,
                                top: posY - 20
                            }
                        });

                        TweenMax.set(cursor, {
                            css: {
                                left: mouseX,
                                top: mouseY
                            }
                        });
                    }
                });

                $(document).on("mousemove", function(e) {
                    mouseX = e.pageX;
                    mouseY = e.pageY;
                });

                $(".block").on("mouseenter", function() {
                    cursor.addClass("active");
                    follower.addClass("active");
                });

                $(".block").on("mouseleave", function() {
                    cursor.removeClass("active");
                    follower.removeClass("active");
                });
            </script>

    </body> 
</html>