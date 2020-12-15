<?php include "master-nav+fx.php"; ?>
<html lang="en-US">
    <head>
        <title> Contact // Alec Greene </title>

        <!-- Link to the global style sheet. -->
        <link rel="stylesheet" href="styles/globalStyle.css">
        <!-- <link rel="stylesheet" href="styles/contactStyle.css"> -->

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


        <div id="map"></div>

        <script> 
            function initMap() {

                //Map options
                const ann_arbor = { lat: 42.279594, lng: -83.732124 };
                var options = {
                    zoom: 5,
                    center: ann_arbor,
                    styles: 
                    [
                        {
                            "featureType": "all",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "saturation": 36
                                },
                                {
                                    "color": "#f5f5f5"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "all",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#070707"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#070707"
                                },
                                {
                                    "lightness": -100
                                },
                                {
                                    "weight": 0
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#070707"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#778899"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#778899"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#778899"
                                },
                                {
                                    "lightness": 45
                                },
                                {
                                    "weight": 0.2
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 15
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 16
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#000000"
                                },
                                {
                                    "lightness": 19
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#b0c4de"
                                },
                                {
                                    "lightness": 0
                                }
                            ]
                        }
                    ]
                }

                //New map
                var map = new google.maps.Map(document.getElementById("map"), options);

                var infoWindow = new google.maps.InfoWindow({
                    content: '<div class="info-map">Alec Greene,<br/>Ann Arbor, Michigan, USA. (810) 844 6445.<br/>@acgreene@umich.edu</div>'
                })

                infoWindow.setPosition(new google.maps.LatLng(42.279594, -83.732124));

                infoWindow.open(map);
            }
        </script>

        <script defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBta-IIJJrLzKVJtgc8TrJpj35b3gp1vpI&callback=initMap">
        </script>

        <style>
            #map {
                height: 100vh;
                width: 60vw;
            }

            *{
                margin: 0;
                padding: 0;
                outline: none;
                box-sizing: border-box;
            }

            body {
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }

            /* The entire contact form container */
            .container {
                width: clamp(800px, 70%, 1000px);
                /* top | right | bottom | left */
                padding: 25px 100px 10px 200px;
            }

            @media (max-width: 1050px) {
                .container {
                    padding: 25px 40px 10px 105px;
                    transition: 1s;
                }
                #map {
                    display: none;
                }
            }

            @media (max-width: 703px) {
                .container {
                    padding: 25px 40px 10px 40px;
                    transition: 1s;
                }
            }

            .container .text h2 {
                font-size: 35px;
                font-weight: 600;
            }

            .container .text p {
                transform: translateY(10px);
            }

            /*  Top of contact form text */
            .text {
                color: var(--whitesmoke);
            }
            
            .container .text {
                text-align: center;
            }

            .container form {
                padding: 30px 0 0 0;
            }

            .container form .form-row {
                display: flex;
                margin: 32px 0;
            }

            /* Text inside the form boxes (name, email, subj, msg) */
            form .form-row .input-data {
                width: 100%;
                height: 40px;
                margin: 0 20px;
                position: relative;
                color: var(--whitesmoke);
            }

            /* Space inside each entry box + entry text */
            .input-data input,
            .textarea textarea {
                display: block;
                width: 100%;
                height: 100%;
                border: none;
                font-size: 17px;
                border-bottom: 2px solid rgba(0,0,0, 0.12);
                background-color: transparent;
                color: var(--whitesmoke);
            }

            /* Action: what happens to the text inside the data boxes as it moves upward. */
            .input-data input:focus ~ label, .textarea textarea:focus ~ label,
            .input-data input:valid ~ label, .textarea textarea:valid ~ label{
                transform: translateY(-20px);
                font-size: 14px;
            }

            .textarea textarea {
                resize: none;
                padding-top: 10px;
            }

            .input-data label {
                position: absolute;
                pointer-events: none;
                bottom: 10px;
                font-size: 16px;
                transition: all 0.3s ease;
            }

            .textarea label {
                width: 100%;
                bottom: 40px;
                background: var(--slate_grey);
            }

            /* Contact form underline animations. Animation is created by creating a linear gradient, 
                making the background gigantic, and then keyframing the position of the background. */
            .input-data .underline{
                position: absolute;
                bottom: 0;
                height: 2px;
                width: 100%;
                background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite;
            }

            @keyframes gradient {
                0% {
                    background-position: 0% 50%;
                }
                50% {
                    background-position: 100% 50%;
                }
                100% {
                    background-position: 0% 50%;
                }
            }

            .input-data .underline:before{
                position: absolute;
                content: "";
                height: 2px;
                width: 100%;
                transform: scaleX(0);
                transform-origin: center;
                transition: transform 0.3s ease;
            }

            .submit-btn .input-data{
                overflow: hidden;
            }

            .submit-btn .input-data input{
                background: none;
                border: none;
                color: var(--whitesmoke);
                font-size: 17px;
                font-weight: 500;
                text-transform: uppercase;
                letter-spacing: 1px;
                cursor: pointer;
                position: relative;
                z-index: 2;
            }

            .submit-btn {
                display: flex;
                justify-content: center;
                align-items: center;
                transform: scale(120%);
            }

            @media (max-width: 700px) {

            .container .text .h2{
                    font-size: 30px;
            }

            .container form{
                    padding: 0px 0 0 0;
            }

            .container form .form-row{
                    display: block;
            }

            form .form-row .input-data{
                    margin: 35px 0!important;
            }

            .submit-btn .input-data{
                    width: 100%!important;
            }

            }

            @media (max-height: 700px) {

                p {
                    font-size: 14px;
                }
                
            }

            @media (max-width: 1535px) {
                
            }
        </style>

    </body>
</html>