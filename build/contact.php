<?php include "master-nav+fx.php";?>
<html lang="en-US">
    <head>
        <title> Contact // Alec Greene </title>

        <!-- Link to the global style sheet. -->
        <link rel="stylesheet" href="styles/globalStyle.css">
        <link rel="stylesheet" href="styles/contactStyle.css">

        <script
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

    </head>

    <body>

        <h1> Contact me </h1>
        
        <p> I am interested in both full-time work and freelance opportunities &#8211; especially ambitious or large projects. 
            However, if you have another request or question, don&#8217;t hesitate to contact me using the form below. 
        </p>

        <!--Form Element: 
            (1) action: defines location where to send the form's collected data.  
            (2) method: defines which http method to send the data with (usually "get" or "post")
        -->
        <form method="post" action="form-files/formtocsv.php">
        <ul>
            <li>
                <label for="name"> Name </label>
                <input type="text" id="name" name="form_name">
            </li>

            <li>
                <label for="mail"> Email </label>
                <input type="email" id="mail" name="form_email">
            </li>

            <li> 
                <label for="subj"> Subject </label>
                <input type="text" id="subj" name="form_subj">
            </li>

            <li>
                <label for="msg"> Message </label>
                <textarea id="msg" name="form_msg"></textarea>
            </li>

            <li class="button">
                <button type="submit"> Send </button>
            </li>

        </ul>
        </form>

        <div class="inf-map">
            Alec Greene,<br/>
            Ann Arbor, Michigan, USA. (810) 844 6445.
            <br/><br/><span><span>@</span>: acgreene@umich.edu </span>
        </div>

        <div class="map-wrap">
            <div id="map"></div>
        </div>
        
    </body>
</html>