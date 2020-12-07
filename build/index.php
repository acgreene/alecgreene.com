<?php 
  // require __DIR__.'../vendor/autoload.php';
  // use Kreait\Firebase\Factory;

  // $factory = (new Factory())->withDatabaseUri('https://alecgreene-default-rtdb.firebaseio.com/');
  include "master-nav+fx.php";
?>

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
        <link rel="stylesheet" href="styles/globalStyle.css">
        <link rel="stylesheet" href="styles/indexStyle.css">

        <!-- Must add this for @media functionality -->
        <meta name ="viewport" content="width=device-width, initial-scale=1">

        <!-- Load in the feather icon library, if this ever breaks try src="node_modules/feather-icons/dist/icons/feather.js" -->
        <script src="https://unpkg.com/feather-icons"></script>
    
    </head>
    <body>

        <!-- Introduction -->
        <div class="intro-h" id="intro-head"> 
            <h1> Hi, <br /> I'm Alec, <br /> electrical & sound engineer. </h1>
                <div class="intro-sh" id="intro-sub-head"> 
                    <p> Signal Processing Specialist / Audiophile / Programming Hobbyist. </p>
                </div>
        </div>

        <!-- <a href="master-nav+fx.php">TEST PAGE</a> -->

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="/__/firebase/8.1.2/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="/__/firebase/8.1.2/firebase-analytics.js"></script>

        <!-- Initialize Firebase -->
        <script src="/__/firebase/init.js"></script>
        
        <script>
            feather.replace()
        </script>

    </body>
</html>