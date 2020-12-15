<?php include "master-nav+fx.php"; ?>
<html lang="en-US">

    <!-- 
            Easter egg No.1, welcome to my real web page ;) 

                                ████████                                  
                              ██        ██                                
                            ██▒▒▒▒        ██                              
                          ██▒▒▒▒▒▒      ▒▒▒▒██                            
                          ██▒▒▒▒▒▒      ▒▒▒▒██                            
                        ██  ▒▒▒▒        ▒▒▒▒▒▒██                          
                        ██                ▒▒▒▒██                          
                      ██▒▒      ▒▒▒▒▒▒          ██                        
                      ██      ▒▒▒▒▒▒▒▒▒▒        ██                        
                      ██      ▒▒▒▒▒▒▒▒▒▒    ▒▒▒▒██                        
                      ██▒▒▒▒  ▒▒▒▒▒▒▒▒▒▒  ▒▒▒▒▒▒██                        
                        ██▒▒▒▒  ▒▒▒▒▒▒    ▒▒▒▒██                          
                        ██▒▒▒▒            ▒▒▒▒██                          
                          ██▒▒              ██                            
                            ████        ████                              
                                ████████                                                                                                                                                                                                                            
    
    -->

    <head>
      <title> Home // Alec Greene </title>

      <!-- Link to the global & index page style sheet. -->
      <meta charset="utf-8" />
      <link rel="stylesheet" href="styles/globalStyle.css">
      <link rel="stylesheet" href="styles/indexStyle.css">

      <!-- Must add this for @media functionality -->
      <meta name ="viewport" content="width=device-width, initial-scale=1">

      <script src="https://cdn.rawgit.com/bradley/Blotter/master/build/blotter.min.js"></script>
      <script src="https://cdn.rawgit.com/bradley/Blotter/3007fe6e/build/materials/fliesMaterial.js"></script>

    </head>
    <body>

      <!-- Menu Blocks -->
      <div class="container">

        <div class="block block-name">
        <div id="distortion-text"></div>
            <h1><br> electrical & sound engineer. </h1>
            <h2>signal processing specialist / audiophile / programming hobbyist. </h2>
        </div>

        <div style="cursor: none;" onclick="window.location='about.php';" class="block block-1">
            <h1>about</h1>
        </div> 

        <div style="cursor: none;" onclick="window.location='eecs.php';" class="block block-2">
            <h1>engineering</h1>
        </div>

        <div style="cursor: none;" onclick="window.location='audio.php';" class="block block-3">
            <h1>audio</h1>
        </div>
        
      </div>

      
      <div id="main"></div>

      <script>

          container = document.getElementById("main");

          var text = new Blotter.Text("alec greene", {
            //   family: "serif",
              size: 135,
              fill: "whitesmoke",
              paddingLeft: 80,
              paddingRight: 80,
              paddingTop: 80,
              paddingBottom: 80
          });

          var material = new Blotter.FliesMaterial();
          material.uniforms.uPointCellWidth.value = 0.003;
          material.uniforms.uPointRadius.value = 0.67;
          material.uniforms.uSpeed.value = 2;

          var blotter = new Blotter(material, {
              texts: text
          });

          var scope = blotter.forText(text);
          scope.appendTo(container);

      </script>

      <!-- JavaScript menu block horizontal animation -->
      <script src="node_modules/horizontal-scroll/dist/index.js"></script>
        
      <script>
        var blocks = document.getElementsByClassName("block");
        var container = document.getElementsByClassName("container");
        var hs = new HorizontalScroll.default({
          blocks: blocks,
          container: container,
          isAnimated: true,
          springEffect: 0.8,
          // values below are from 0-20. 
          skewReducer: 20, //strength of skew effect
          skewLimit: 5, //limit value of the skew effect
        })
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