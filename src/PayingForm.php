<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paying Form - Carental</title>
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="booking_Page.css" />
    <link rel="stylesheet" href="main_Page.css" />
    <link rel="stylesheet" href="car_Portfolio.css" />
    <link rel="stylesheet" href="Paying_form.css" />
    <link rel="stylesheet" href="header_footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div id="home-page">
        <div id="header"></div>
        <div class="background-slideshow"></div>
        <div class="mid_content" style="padding: 140px 30px 120px;">
            <div class="gallery-car-title" style="padding: 15px;">You have chosen!</div>
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "wypozyczalnia"; // Database name

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check for connection errors
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get car ID from the URL
                $car_id = isset($_GET['car_id']) ? intval($_GET['car_id']) : 0;

                // Retrieve car details from the database
                $sql = "SELECT * FROM cars WHERE car_id = $car_id";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $car = $result->fetch_assoc();
                    // Display car details
                    echo '<div class="content-frame" style="width: 80%; pointer-events: none;">';
                    echo '<div class="box" style="background-color: #FFFFFF; border: 1px solid #E2E8EB; transition: transform 0.3s;">';
                                echo '<div class="inside0-frame">';
                                echo '<div class="module">' . $car["brand"] . ' ' . $car["model"] . '</div>';
                                echo '<div class="price">';
                                echo '<div class="dolar-sign">PLN</div>';
                                echo '<div class="cost">' . $car["daily_price"] . '</div>';
                                echo '<div class="period">/day</div>';
                                echo '</div>';
                                echo '<img src="images/cars/' . $car["image_title"] . '" alt="check" class="custom-image">';
                                echo '</div>';
                                echo '<div class="inside1-frame">';
                                echo '<div class="description">' . $car["long_description"] . '</div>';
                                echo '<div class="icon-box">';
                                echo '<div class="small-icon-box">';
                                echo '<div class="pros">';
                                echo '<img src="images/icon_Tank.png" alt="check" class="custom-icon">';
                                echo '<div class="text">' . $car["tank"] . '</div>';
                                echo '</div>';
                                echo '<div class="pros">';
                                echo '<img src="images/icon_Transmission.png" alt="check" class="custom-icon">';
                                echo '<div class="text">' . $car["transmission"] . '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="small-icon-box">';
                                echo '<div class="pros">';
                                echo '<img src="images/icon_Luggage.png" alt="check" class="custom-icon">';
                                echo '<div class="text">' . $car["trunk_capacity"] . '</div>';
                                echo '</div>';
                                echo '<div class="pros">';
                                echo '<img src="images/icon_1_to_100.png" alt="check" class="custom-icon">';
                                echo '<div class="text">' . $car["acceleration_0_to_100"] . 's</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="description pick-up" style="color:black;"></div>';
                                echo '<div class="description drop-off" style="color:black;"></div>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                    // Optionally, payment form or other details can be added here
                } else {
                    echo "<p>Car not found.</p>";
                }

                $conn->close();
            ?>

        <div class="choice-text">Choose your package</div>
            <div class="paying-frame">
                <div class="paying-choices" onclick="selectOption(this, 0)">
                    <div class="tick-box"><b>STANDARD Liability Waiver Package <span style="color: rgb(54, 89, 195);">INCLUDED</span></b></div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Basic third-party, collision, and personal accident insurance ensuring safe vehicle usage.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />With the STANDARD option, the deductible is 2000 PLN.</div>
                </div>
                <div class="paying-choices" onclick="selectOption(this, 39)">
                    <div class="tick-box"><b>GOLD Liability Waiver Package <span style="color: rgb(54, 89, 195);">+39 PLN</span></b></div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />The Gold insurance option waives the AC damage deductible to 0 PLN.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Reduces the required deposit by half.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Insurance is valid only within Poland.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Includes protection for windows, rims, and tires.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Safety package – replacement vehicle and roadside assistance included.</div>
                </div>
                <div class="paying-choices" onclick="selectOption(this, 89)">
                    <div class="tick-box"><b>GOLD UE Liability Waiver Package <span style="color: rgb(54, 89, 195);">+89 PLN</span></b></div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />The Gold EU insurance option waives the AC damage deductible to 0 PLN.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Reduces the required deposit by half.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Insurance is valid across the entire European Union.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Includes protection for windows, rims, and tires.</div>
                    <div class="tick-box"><img src="images/checkSign.png" style="height: 20px;" />Safety package – replacement vehicle and roadside assistance included.</div>
                </div>
            </div>
            <div class="summary">
                <div class="summary-inbox">
                    <div class="inbox-text">Your car</div>
                    <div class="inbox-price" id="car-price">---</div>
                </div>
                <div class="summary-inbox">
                    <div class="inbox-text">Waiver Package</div>
                    <div class="inbox-price" id="waiver-price">---</div>
                </div>
                <div class="summary-inbox">
                    <div class="inbox-text">Total</div>
                    <div class="inbox-price" id="total-price">---</div>
                </div>
                <div class="summary-button">Payment ➤</div>
            </div>
        </div>

        <div id="footer"></div>
        <script src="./header.js"></script>
    </div>
</body>
</html>

<script>
    // This script calculates the number of rental days and updates the car's total cost based on the selected options.
    // Also updates the displayed price for the selected options and the total price.
    function calculateDays(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const diffTime = end - start;
        return Math.ceil(diffTime / (1000 * 60 * 60 * 24)); // Day conversion
    }

    function selectOption(selectedElement, price) {
        const carCostPerDay = parseInt(document.querySelector('.cost').textContent, 10);
        const startDate = localStorage.getItem("startDate");
        const endDate = localStorage.getItem("endDate");

        const rentalDays = calculateDays(startDate, endDate);
        const carTotalCost = carCostPerDay * rentalDays;

        const carPriceField = document.getElementById('car-price');
        carPriceField.textContent = `${carTotalCost} PLN (${rentalDays} days)`;

        const options = document.querySelectorAll('.paying-choices');
        options.forEach(option => option.classList.remove('selected'));

        selectedElement.classList.add('selected');

        const waiverPriceField = document.getElementById('waiver-price');
        if (price === 0) {
            waiverPriceField.textContent = "INCLUDED";
        } else {
            waiverPriceField.textContent = `+${price} PLN`;
        }

        const totalPriceField = document.getElementById('total-price');
        const totalPrice = carTotalCost + price;
        totalPriceField.textContent = `${totalPrice} PLN`;
    }

    document.addEventListener('DOMContentLoaded', () => {
        const carCostPerDay = parseInt(document.querySelector('.cost').textContent, 10);

        const startDate = localStorage.getItem("startDate");
        const endDate = localStorage.getItem("endDate");
        
        const rentalDays = calculateDays(startDate, endDate);
        const carTotalCost = carCostPerDay * rentalDays;

        document.getElementById('car-price').textContent = `${carTotalCost} PLN (${rentalDays} days)`;
    });
</script>
<script>
    // This script displays the pick-up and drop-off details (date, time, and location) based on information stored in localStorage.
    document.addEventListener("DOMContentLoaded", () => {
        const startDate = localStorage.getItem("startDate");
        const endDate = localStorage.getItem("endDate");
        const pickUpTime = localStorage.getItem("pickUpTime");
        const dropOffTime = localStorage.getItem("dropOffTime");
        const pickUpLocation = localStorage.getItem("pickUpLocation");
        const dropOffLocation = localStorage.getItem("dropOffLocation");
    
        if (startDate && pickUpTime && pickUpLocation) {
            document.querySelector(".description.pick-up").textContent = `Pick-up: ${startDate} at ${pickUpTime}, Location: ${pickUpLocation}`;
        }
        if (endDate && dropOffTime && dropOffLocation) {
            document.querySelector(".description.drop-off").textContent = `Drop-off: ${endDate} at ${dropOffTime}, Location: ${dropOffLocation}`;
        }
    });
</script>