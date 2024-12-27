<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home page - Car rental</title>
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="main_Page.css" />
    <link rel="stylesheet" href="booking_Form.css" />
    <link rel="stylesheet" href="header_footer.css" />
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

<body style="background-color: #F9F8FB;">
    <div id="home-page">

        <div class="background-slideshow"></div>

        <div id="header"></div>

        <div class="mid_content">
            <div class="gallery-car-title">Find car for you!</div>
            <div class="gallery-car-description">Over 2,700 new, well-equipped passenger and commercial vehicles to choose from.</div>

            <div class="gallery-container">
                <div class="mid-container">
                    <div class="small-container" onclick="applyFilter('city')">
                        <img class="gallery-cars" src="images/cars/Car_2.png" />
                        <div class="title">City</div>
                    </div>
                    <div class="small-container" onclick="applyFilter('electric')">
                        <img class="gallery-cars" src="images/cars/Car_6.png" />
                        <div class="title">Electric</div>
                    </div>
                </div>
                
                <div class="mid-container">
                    <div class="small-container" onclick="applyFilter('van')">
                        <img class="gallery-cars" src="images/cars/Car_17.png" />
                        <div class="title">Van</div>
                    </div>
                    <div class="small-container" onclick="applyFilter('van')">
                        <img class="gallery-cars" src="images/cars/Car_20.png" />
                        <div class="title">Delivery Van</div>
                    </div>
                </div>
            </div>
            <img class="map" src="images/map.png"/>

            <div class="big-text-container">
                <div id="blockOne"></div>
                <div id="blockTwo"></div>
            </div>
        </div>


        <div id="footer"></div>
        <script src="./header.js"></script>
        <script src="./mainPage.js"></script>
    </div>
</body>
</html>

<script> // this script sends user to CarPortfolio page with choosen filter
    function applyFilter(vehicleType) {
        window.location.href = "CarPortfolio.php?filter=" + vehicleType;
    }
</script>
