<?php include "master-nav+fx.php";?>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> About // Alec Greene </title>

        <!-- Links to the global and local style sheets. -->
        <link rel="stylesheet" href="styles/globalStyle.css">
        <link rel="stylesheet" href="styles/aboutStyle.css">
        
    </head>
    <body>
        <div class="smooth-scroll-wrapper">
            <div class="content">
                <div class="container">
                    <div class="image-container">
                        <h2 class="text text-dark">
                            <div class="parallax-title">
                                education
                            </div>
                        </h2>
                    </div>
                    <h2 class="text">
                        <div class="parallax-title">
                            education
                        </div>
                    </h2>
                </div>
            </div>
        </div>

        <script>
            let atScroll = false;
            let parallaxTitle = document.querySelectorAll(".parallax-title");

            const scrollProgress = () => {
                atScroll = true;
            };

            const raf = () => {
                if (atScroll) {
                    parallaxTitle.forEach((element, index) => {
                        element.style.transform = "translateX(" + window.scrollY / 8 + "%)";
                    });
                    atScroll = false;
                }
                requestAnimationFrame(raf);
            };

            requestAnimationFrame(raf);
            window.addEventListener("scroll", scrollProgress);
        </script>

    </body>
</html>