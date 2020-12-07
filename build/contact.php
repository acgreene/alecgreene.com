<?php include "master-nav+fx.php"; ?>
<html lang="en-US">
    <head>
        <title> Contact // Alec Greene </title>

        <!-- Link to the global style sheet. -->
        <link rel="stylesheet" href="styles/globalStyle.css">
        <link rel="stylesheet" href="styles/contactStyle.css">

        <!-- Must add this for @media functionality -->
        <meta name ="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="container">
            <div class="text">
                
                <h2> Contact me </h2>

                <p> I am interested in both full time employment and freelance 
                    opportunities &#8211; especially ambitious or large projects. 
                    However, if you have another request or question, don&#8217;t 
                    hesitate to contact me using the form below. 
                </p>

            </div>
            <form method="post" action="form-files/formtocsv.php">
                <div class="form-row">

                    <div class="input-data">
                        <input type="text" required name="form_name">
                        <div class="underline"></div>
                        <label for="">Name</label>
                    </div>  

                    <div class="input-data">
                        <input type="text" required name="form_email">
                        <div class="underline"></div>
                        <label for="">Email</label>
                    </div>

                </div>
                <div class="form-row">

                    <div class="input-data">
                        <input type="text" required name="form_subj">
                        <div class="underline"></div>
                        <label for="">Subject</label>
                    </div>

                </div>
                <div class="form-row">

                    <div class="input-data">
                        <input type="text" required name="form_msg">
                        <div class="underline"></div>
                        <label for="">Message</label>
                    </div>

                </div>

                <div class="submit-btn">
                        <div class="input-data">
                            <input type="submit" value="submit">
                        </div>
                    </div>

            </form>
        </div>

        <!-- <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBta-IIJJrLzKVJtgc8TrJpj35b3gp1vpI&callback=initMap&libraries=&v=weekly"
            defer
        ></script>

        <script>
            // Initialize and add the map
            function initMap() {
                const ann_arbor = { lat: 42.279594, lng: -83.732124 };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 6,
                    center: ann_arbor,
                });
                const marker = new google.maps.Marker({
                    position: ann_arbor,
                    map: map,
                });
            }
        </script>

        <div class="inf-map">
            Alec Greene,<br/>
            Ann Arbor, Michigan, USA. (810) 844 6445.
            <br/><br/><span><span>@</span>: acgreene@umich.edu </span>
        </div>

        <div class="map-wrap">
            <div id="map"></div>
        </div> -->

    </body>
</html>