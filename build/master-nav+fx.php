<html> 
    <head>
        <!-- Link to the global & index page style sheet. -->
        <link rel="stylesheet" href="styles/globalStyle.css">

        <!-- Must add this for @media functionality -->
        <meta name ="viewport" content="width=device-width, initial-scale=1">

        <!-- Load in the feather icon library, if this ever breaks try src="node_modules/feather-icons/dist/icons/feather.js" -->
        <script src="https://unpkg.com/feather-icons"></script>
    </head>

    <body> 
        <!-- Desktop side navigation toolbar -->
        <ul class ="side-nav">
            <li data-text="Home"> <a href="index.php"><span data-feather="home"></span></a> </li>
            <li data-text="About"> <a href="about.php"><span data-feather="book"></span></a> </li>
            <li data-text="Engineering"> <a href="eecs.php"><span data-feather="box"></span></a> </li>
            <li data-text="Audio"> <a href="audio.php"><span data-feather="bar-chart-2"></span></a> </li>
            <li data-text="Contact"> <a href="contact.php"><span data-feather="message-square"></span></a> </li>
        </ul>

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

        <!-- Social media icons -->
        <div class = "social"> 
            <a class="linkedin" href="https://www.linkedin.com/in/alecgreene/" target="_blank"><span data-feather="linkedin"></span></a>
            <a class="twtr" href="https://twitter.com/aleccgreene" target="_blank"><span data-feather="twitter"></span></a>
            <a class="git" href="https://github.com/acgreene" target="_blank"><span data-feather="github"></span></a>
        </div> 
    
        <!-- Mouse Fx -->
        <script type="text/javascript">
            document.addEventListener("mousemove", function(e){
                var body = document.querySelector('html');
                var pixels = document.createElement("span");
                var x = e.offsetX;
                var y = e.offsetY;
                pixels.style.left = x+'px';
                pixels.style.top = y+'px';

                var size = Math.random() * 2.1;
                pixels.style.width = 1.3*size+'px';
                pixels.style.height = size+'px';

                body.appendChild(pixels);

                setTimeout(function(){
                    pixels.remove();
                }, 4000) //this value here is the decay time on the pixels.
            })
        </script>

        <script>
            feather.replace()
        </script>

        <style>
            @import "globalStyle.css";

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                overflow: hidden;
                background-color: var(--pitch_black);
            }

            /* The tab strip. */
            ul {
                position: fixed;
                left: 50;
                top: 50%;
                padding-top: 500px;
                padding-bottom: 500px;
                transform: translate(0, -50%);
                background-color: var(--light_black);
            } 

            ul:hover {
                background-color: transparent;
            }

            ul li {
                list-style: none;
            }

            /* This is the giant text that comes up PRE HOVER. */
            ul li:before {
                content: attr(data-text);
                position: absolute;
                transform: translate(35%, 35%);
                color: var(--light_black);
                font-size: 1.8em;
                font-weight: 0;
                pointer-events: none;
                opacity: 0;
                letter-spacing: 8px;
                transition-timing-function: ease-out;
                transition: 0.7s;
                white-space: nowrap;
                transform: scaleX(1.3);
            }

            /* This is the giant text that comes up POST HOVER. */
            ul li:hover:before {
                content: attr(data-text);
                opacity: 1;
                letter-spacing: 5px;
                font-weight: 500;
                font-size: 2em;
                z-index: 2000;
                color: var(--lavender);
                justify-content: right;
                align-content: right;
                transform: scaleX(1.0);
            }

            /* These are the individual tabs */
            ul li a {
                position: relative;
                display: inline-block;
                padding: 20px 35px;
                background: var(--light_slate_grey);
                color: var(--whitesmoke);
                overflow: hidden;
                transition: 0.5s;
                z-index: 1;
            }

            /* Effects all tabs when one is hovered over. */
            ul:hover li a {
                opacity: 0.2;
            }

            /* Effects a single tab when hovered */
            ul li a:hover {
                transform: scale(1.15);
                z-index: 1000;
                background: rgb(18, 19, 22);
                opacity: 0.5;
                width: 175px;
            }

            /* This is the flash effect PRE HOVER */
            ul li a:before {
                content: '';
                position: absolute;
                top: 0;
                left: -900px;
                width: 1000px;
                height: 100%;
                background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
                opacity: 0.7;
                transform: skewX(35deg);
                transition: 0s;
            } 

            /* This is the flash effect POST HOVER */
            ul li a:hover:before {
                left: calc(100% + 100px);
                transition: 1s;
                transition-delay: 0.05s;
            }

            .linkedin {
                position:absolute;
                bottom: 60;
                left: 67;
                padding: 10px 17px;
                color: var(--whitesmoke);
                overflow: hidden;
                transition: 0.5s;
                z-index: 1;
            }

            .linkedin:hover {
                color: rgb(14, 118, 168);
                transition: 0.6s;
            }

            .git {
                position:absolute;
                bottom: 100;
                left: 67;
                padding: 10px 17px;
                color: var(--whitesmoke);
                overflow: hidden;
                transition: 0.5s;
                z-index: 1;
            }

            .git:hover {
                color: rgb(110, 84, 148);
                transition: 0.6s;
            }

            .twtr {
                position:absolute;
                bottom: 20;
                left: 67;
                padding: 10px 17px;
                color: var(--whitesmoke);
                overflow: hidden;
                transition: 0.5s;
                z-index: 1;
            }

            .twtr:hover {
                color: rgb(0, 172, 238);
                transition: 0.6s;
            }

            span {
                position: absolute;
                width: 1px;
                height: 1px;
                background: lightskyblue;
                background-size:cover;
                pointer-events: none;
                transform: translate(-50%, 50%);
                animation: animate 10s linear infinite;
            }

            .open-mobile {
                position: fixed;
                top: 15;
                left: 15;
                color: var(--light_steel_blue);
                transform: scale3d(1.3,1.3,1.3);
            }

            @media screen and (min-width: 703px) {
                .open-mobile {
                    display: none;
                }
            }

            .mymobile-nav {
                height: 100%; 
                width: 0; /* 0 width - change this with JavaScript */
                position: fixed; /* Stay in place */
                z-index: 1; /* Stay on top */
                top: 0; 
                left: 0;
                background-color: var(--light_black);
                overflow-x: hidden; /* Disable horizontal scroll */
                padding-top: 60px; 
                transition: 0.5s; 
            }

            /* The navigation menu links */
            .mymobile-nav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: var(--light_steel_blue);
                display: block;
                transition: 0.3s;
            }

            .mymobile-nav a:hover {
                color: var(--whitesmoke);
            }

            .mymobile-nav .socialmobile-nav a {
                left: 1em;
            }

            /* Position and style the close button (top left corner) */
            .mymobile-nav .close-mobile {
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            /* Push the page content to the right when mobile-nav opens */
            #main {
                transition: margin-left .5s;
                padding: 20px;
            }

            /* On smaller screens, where height is less than 450px, change the style of the mobile-nav (less padding and a smaller font size) */
            @media screen and (max-height: 450px) {
                .mymobile-nav {padding-top: 15px;}
                .mymobile-nav a {font-size: 18px;}
            }

            @media screen and (min-width: 703px) {
                .mymobile-nav {
                    display: none;
                }
            }

            @keyframes animate {
                0%
                {
                    transform: translate(-50%, -50%);
                    opacity: 0.2;
                }
                25%
                {
                    background: limegreen;
                }
                75%
                {
                    background: yellow;
                }
                100%
                {
                    transform: translate(-50%, -10000%);
                    background: purple;
                    opacity: 0;
                }
            }

            @media (max-width: 703px) {
                ul li {
                    display: none;
                }
            }

            @media screen and (max-width: 1000px) {
                ul {
                    transition: 0.5s;
                    left: 0;
                    padding-top: 0;
                    padding-bottom: 0;
                }
            }

            @media (max-height: 615px), (max-width: 1000px) { 
                .social{
                    display: none;
                }
            }     
        </style>
    </body> 
</html>