<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Car rental</title>
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="car_Portfolio.css" />
    <link rel="stylesheet" href="header_footer.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>


<body style="background-color: #F9F8FB;">
    <div id="home-page">
    <div id="header"></div>

        <div class="main-frame">
            <div class="title">Our available cars</div>
            <div class="content1">Choose the right car for you and get started with your tour.</div>
        </div>
        <div class="search-frame">
            <div class="search-box" style="gap: 5px;">
                <div class="choice-box" data-filter="city">
                    <div class="choice-text">CITY</div>
                </div>
                <div class="choice-box" data-filter="suv">
                    <div class="choice-text">SUV</div>
                </div>
                <div class="choice-box" data-filter="sport">
                    <div class="choice-text">SPORTS</div>
                </div>
                <div class="choice-box" data-filter="van">
                    <div class="choice-text">VAN</div>
                </div>
                <div class="choice-box" data-filter="electric">
                    <div class="choice-text">ELECTRIC</div>
                </div>
                <div class="choice-box" data-filter="luxury">
                    <div class="choice-text">LUXURY</div>
                </div>
                <div class="choice-box" data-filter="truck">
                    <div class="choice-text">TRUCK</div>
                </div>
            </div>
        </div>
            
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

            // Retrieve the 'filter' parameter from the URL if set
            $filter = isset($_GET['filter']) ? $_GET['filter'] : '';

            // Prepare the SQL query
            $sql = "SELECT * FROM cars";
            if (!empty($filter)) {
                // If a filter is provided, modify the query to filter by category
                $sql .= " WHERE category = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $filter); // Bind the filter parameter to the query

            } else {
                // If no filter is provided, prepare the query without filtering
                $stmt = $conn->prepare($sql);
            }

            // Execute the query
            $stmt->execute();
            $result = $stmt->get_result();

            $cars = [];
            // Fetch the results and store them in the $cars array
            while ($row = $result->fetch_assoc()) {
                $cars[] = $row;
            }

            // If there are cars available, display them
            if (count($cars) > 0) {
                echo '<div class="content-frame">';
                foreach ($cars as $car) {
                    echo '<div class="box" style="background-color: #FFFFFF; border: #E2E8EB;">';
                    echo '<div class="inside0-frame">';
                    echo '<div class="module">' . $car["brand"] . ' ' . $car["model"] . '</div>';
                    echo '<div class="price">';
                    echo '<div class="dolar-sign">PLN</div>';
                    echo '<div class="cost">' . $car["daily_price"] . '</div>';
                    echo '<div class="period">/day</div>';
                    echo '</div>';
                    echo '<img src="images/cars/' . $car["image_title"] . '" alt="Car Image" class="custom-image">';
                    echo '</div>';
                    echo '<div class="inside1-frame">';
                    echo '<div class="description">' . $car["long_description"] . '</div>';
                    echo '<div class="icon-box">';
                    echo '<div class="small-icon-box">';
                    echo '<div class="pros">';
                    echo '<img src="images/icon_Tank.png" alt="Tank Icon" class="custom-icon">';
                    echo '<div class="text">' . $car["tank"] . '</div>';
                    echo '</div>';
                    echo '<div class="pros">';
                    echo '<img src="images/icon_Transmission.png" alt="Transmission Icon" class="custom-icon">';
                    echo '<div class="text">' . $car["transmission"] . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="small-icon-box">';
                    echo '<div class="pros">';
                    echo '<img src="images/icon_Luggage.png" alt="Luggage Icon" class="custom-icon">';
                    echo '<div class="text">' . $car["trunk_capacity"] . '</div>';
                    echo '</div>';
                    echo '<div class="pros">';
                    echo '<img src="images/icon_1_to_100.png" alt="Acceleration Icon" class="custom-icon">';
                    echo '<div class="text">' . $car["acceleration_0_to_100"] . 's</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    // Pass car name directly to JavaScript function
                    echo '<a class="get-started" onclick="window.location.href=\'Booking.php\';"><div class="start-text">Rent our cars</div></a>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>'; // Closing content-frame
            } else {
                echo '<p>No cars found in this category.</p>';
            }
        
            $conn->close();
        ?>

    <div id="footer"></div>
    <script src="./header.js"></script>
</body>
</html>

<script>
    // Combined functionality for filter navigation and active state toggling for .choice-box elements
    document.addEventListener("DOMContentLoaded", () => {
        const choiceBoxes = document.querySelectorAll('.choice-box');
        
        // Function to update the filter in the URL when a box is clicked
        function updateFilter(filter) {
            window.location.href = 'CarPortfolio.php?filter=' + filter;
        }

        // Function to toggle the active state of the clicked box
        function toggleActiveState(event) {
            const clickedBox = event.currentTarget;
            if (clickedBox.classList.contains('active')) {
                clickedBox.classList.remove('active');
            } else {
                // Remove 'active' class from all boxes and add it to the clicked one
                choiceBoxes.forEach(box => box.classList.remove('active'));
                clickedBox.classList.add('active');
            }
        }

        // Set up event listeners for each .choice-box element
        choiceBoxes.forEach(box => {
            // Update filter URL on box click
            box.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');
                updateFilter(filter);  // Navigate with the selected filter
                toggleActiveState(event); // Toggle active state
            });
        });

        // Reset active state on reset button click
        const resetButton = document.getElementById('reset-button');
        if (resetButton) {
            resetButton.addEventListener('click', () => {
                choiceBoxes.forEach(box => box.classList.remove('active'));
            });
        }
    });
</script>

<script>
    // Script to handle select element changes and show corresponding box
    document.addEventListener("DOMContentLoaded", () => {
        const select = document.getElementById('select');
        const wyniki = document.querySelectorAll('.container > *');

        select.addEventListener('change', function () {
            wyniki.forEach(item => item.style.display = 'none');
            const selectedBox = document.querySelector('.box' + this.value);
            if (selectedBox) {
                selectedBox.style.display = 'block';
            }
        });
    });
</script>

<script>
    // Script to manage active state based on the 'filter' parameter in the URL
    document.addEventListener("DOMContentLoaded", () => {
        const choiceBoxes = document.querySelectorAll(".choice-box");

        // Function to retrieve the 'filter' parameter from the URL
        function getFilterFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('filter') || ''; // Default to empty if no filter
        }

        // Function to set the active class based on the filter value
        function setActiveBox(filterType) {
            choiceBoxes.forEach(box => box.classList.remove("active"));
            const activeBox = document.querySelector(`.choice-box[data-filter="${filterType}"]`);
            if (activeBox) {
                activeBox.classList.add("active");
            }
        }

        // Get the filter from URL and apply the active state
        const filter = getFilterFromURL();
        if (filter) {
            setActiveBox(filter);
        }

        // Optional: Attach click event listeners to each box for manual activation
        choiceBoxes.forEach(box => {
            box.addEventListener("click", () => {
                const filterType = box.getAttribute("data-filter");
                setActiveBox(filterType);
            });
        });
    });
</script>
