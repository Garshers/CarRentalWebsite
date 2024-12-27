<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rent our car - Car rental</title>
    <link rel="shortcut icon" href="Images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="booking_Page.css" />
    <link rel="stylesheet" href="main_Page.css" />
    <link rel="stylesheet" href="car_Portfolio.css" />
    <link rel="stylesheet" href="booking_Form.css" />
    <link rel="stylesheet" href="header_footer.css" />
    <link rel="stylesheet" type="text/css" href="calendar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
</head>

<body style="background: white;">
    <div id="home-page">
        <div id="header"></div>

        <div class="booking-content">
            <div class="left-box">
                <div class="form-container">
                    <div class="pick-up-location">
                        <div class="pick-up-text">Pick-up location</div>
                        <input id="pick-up-place" name="location" placeholder="Enter pick-up place" autocomplete="off" class="content1">

                        <!-- Dropdown list with locations, this is an alternative solution implemented due to the need to pay for the Google Places API...
                        and the requirement to provide card details for the Mapbox Places API -->
                        <div id="locations-dropdown" class="locations-dropdown datalist-hidden">
                            <div>Katowice International Airport</div>
                            <div>Spodek Katowice</div>
                            <div>Katowice Railway Station</div>
                            <div>Silesia City Center</div>
                            <div>University of Silesia</div>
                            <div>Nikiszowiec</div>
                        </div>
                        <div id="drop-off-section" class="datalist-hidden">
                            <div class="pick-up-text">Drop-off location</div>
                            <input id="drop-off-place" name="dropoff-location" placeholder="Enter drop-off place" autocomplete="off" class="content1">

                            <div id="dropoff-locations-dropdown" class="locations-dropdown datalist-hidden">
                                <div>Katowice International Airport</div>
                                <div>Spodek Katowice</div>
                                <div>Katowice Railway Station</div>
                                <div>Silesia City Center</div>
                                <div>University of Silesia</div>
                                <div>Nikiszowiec</div>
                            </div>
                        </div>
                        <div class="pick-up-return">
                            <form action="submit.php" method="POST">
                                <input type="checkbox" id="checkbox1" name="custom_checkbox" value="1" class="custom-checkbox">
                                <label for="checkbox1" class="custom-checkbox-label"></label>
                            </form>
                            <div class="content0">Return car in different location</div>
                        </div>
                    </div>
                    <div class="pick-up-date">
                        <div class="date-container">
                            <div class="pick-up-text">Pick-up and Drop-off</div>
                            <div class="calendar-container">
                                <div class="calendar jsCalendar" data-localized_date='{"days":{"names":{"min":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]}},"months":{"names":{"long":["January","February","March","April","May","June","July","August","September","October","November","December"]}}}'></div>
                                <script type="text/javascript" src="external/jquery-1.6.1.js"></script>
                            </div>
                            <div class="time-container">
                                <div class="stime">
                                    <div class="content0">Pick up:</div>
                                    <select name="time" id="time" class="time-choice"></select>
                                </div>
                                <div class="stime">
                                    <div class="content0">Drop off:</div>
                                    <select name="time" id="time1" class="time-choice"></select>
                                </div>
                            </div>
                            <div class="summary"> Summary:
                                <div class="description pick-up" style="color:black;"></div>
                                <div class="description drop-off" style="color:black;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-container">
                    <div class="filter-title">Filtering</div>
                    <div class="filter-box" data-category="model/number-type">
                        <div class="filter-subtitle">Text filtering</div>
                        <input class="filter-specified-box" style="padding: 5px;  border-radius: 5px;" type="text" id="car-name" name="carName"/>
                    </div>
                    <div class="filter-box" data-category="vehicle-type">
                        <div class="filter-subtitle">Vehicle type</div>
                        <div class="filter-specified-box" data-filter="car-kind-1" id="show-all">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Show all</div>
                        </div>
                        <div class="filter-specified-box" data-filter="car-kind-2">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Passenger</div>
                        </div>
                        <div class="filter-specified-box" data-filter="car-kind-3">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Van</div>
                        </div>
                        <div class="filter-specified-box" data-filter="car-kind-4">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Delivery van</div>
                        </div>
                        <div class="filter-specified-box" data-filter="car-kind-5">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Electric</div>
                        </div>
                    </div>

                    <div class="filter-box" data-category="transmission">
                        <div class="filter-subtitle">Transmission</div>
                        <div class="filter-specified-box" data-filter="transmission-1">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Manual</div>
                        </div>
                        <div class="filter-specified-box" data-filter="transmission-2">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Automatic</div>
                        </div>
                    </div>

                    <div class="filter-box" data-category="cost">
                        <div class="filter-subtitle">Fuel type</div>
                        <div class="filter-specified-box" data-filter="cost-1">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Gasoline/Petrol</div>
                        </div>
                        <div class="filter-specified-box" data-filter="cost-2">
                            <div class="check-box"></div>
                            <div class="filter-specification-text">Disel</div>
                        </div>
                    </div>

                    <div class="bot-container">
                        <div class="content0">Driver's country of residence is Poland and age is 30-65</div>
                        <div class="search-container">
                            <div class="pick-up-text" style="color: #FFFFFF;">Search</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <div class="box">
                    <?php
                    // Database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "wypozyczalnia";
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Fetching the list of cars from the database, ordered by brand
        
                    $sql1 = "SELECT * FROM cars ORDER BY brand";
                    $result1 = $conn->query($sql1);

                    // Checking if there are any results
                    if ($result1->num_rows > 0) {

                    $counter = 0; // Variable that will count the tiles
                     // Opening the first content-frame

                    while ($row = $result1->fetch_assoc()) {

                        // Checking if this is the fifth tile
    
                            echo '</div>'; // Closing the previous content-frame
                            echo '<div class="content-frame" style="width: 100%; padding: 10px;">'; 
                        

                        echo '<div class="box" style="background-color: #FFFFFF; border: 1px solid #E2E8EB; transition: transform 0.3s; margin-bottom: -40px;">';
                        echo '<div class="inside0-frame">';
                        echo '<div class="module">' . $row["brand"] . ' ' . $row["model"] . '</div>';
                        echo '<div class="price">';
                            echo '<div class="dolar-sign">PLN</div>';
                            echo '<div class="cost">' . $row["daily_price"] . '</div>';
                            echo '<div class="period">/day</div>';
                        echo '</div>';
                        echo '<img src="images/cars/' . $row["image_title"] . '" alt="check" class="custom-image">';
                        echo '</div>';
                        echo '<div class="inside1-frame">';
                        echo '<div class="description">' . $row["long_description"] . '</div>';
                        echo '<div class="icon-box">';
                            echo '<div class="small-icon-box">';
                                echo '<div class="pros">';
                                    echo '<img src="images/icon_Tank.png" alt="check" class="custom-icon">';
                                    echo '<div class="text">' . $row["tank"] . '</div>';
                                echo '</div>';
                                echo '<div class="pros">';
                                    echo '<img src="images/icon_Transmission.png" alt="check" class="custom-icon">';
                                    echo '<div class="text">' . $row["transmission"] . '</div>';
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="small-icon-box">';
                                echo '<div class="pros">';
                                    echo '<img src="images/icon_Luggage.png" alt="check" class="custom-icon">';
                                    echo '<div class="text">' . $row["trunk_capacity"] . '</div>';
                                echo '</div>';
                                echo '<div class="pros">';
                                    echo '<img src="images/icon_1_to_100.png" alt="check" class="custom-icon">';
                                    echo '<div class="text">' . $row["acceleration_0_to_100"] . 's</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<a class="get-started" href="PayingForm.php?car_id=' . $row["car_id"] . '"><div class="start-text">Rent the car</div></a>';
                        echo '</div>';
                        echo '</div>';

                        $counter++; // Increment after every tile
                        }
                    echo '</div>'; // Closing last content-frame
                    }
                    else {
                        echo '<div class="container">';
                        while($row = $result1->fetch_assoc()) {
                            echo '<div id="kafelek"><h3>' . $row["brand"] . '</h3>';
                            echo '<p>' . $row["model"] . '</p></div>';
                            echo '<p>' . $row["engine"] . '</p></div>';
                        }
                        echo '</div>';
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>

        <div id="footer"></div>
        <script src="./header.js"></script>
    </div>

</body>
</html>

<!-- 
------------------------------------------------------------------------------------
----------------------Calendar section---------------------
------------------------------------------------------------------------------------
-->
<script type="text/javascript" src="external/customModernizr.js"></script>
<script type="text/javascript" src="calendar.js"></script>
<script type="text/javascript">
    $(".jsCalendar").bind("startDateChanged", function () {
        $(this).data("startdate");
    }).bind("endDateChanged", function () {
        $(this).data("enddate");
    });
</script>
<!-- 
------------------------------------------------------------------------------------
----------------------Location, date and hour selection section---------------------
------------------------------------------------------------------------------------
-->
<script>
    // This script passes car name choosen on Car Portfolio page
    try {
        const carName = sessionStorage.getItem('carName');
        console.log('SessionStorage content carName:', carName);
        if (carName) {
            const inputElement = document.getElementById('car-name');
            if (inputElement) {
                inputElement.value = carName;
            } else {
                console.error('Element #car-name not found.');
            }
        }
    } catch (error) {
        console.error('Error inside window.onload:', error);
    };
</script>
<script>
    //This script ensures a smooth and interactive user experience for selecting locations
    const input = document.getElementById('pick-up-place'); 
    const dropdown = document.getElementById('locations-dropdown'); 
    const checkbox = document.getElementById('checkbox1'); 
    const dropOffSection = document.getElementById('drop-off-section'); 
    const dropOffInput = document.getElementById('drop-off-place'); 
    const dropOffDropdown = document.getElementById('dropoff-locations-dropdown'); 

    // Show the pick-up dropdown when input is focused
    input.addEventListener('focus', () => {
        dropdown.classList.remove('datalist-hidden');
    });

    // Set input value to selected location and hide dropdown
    dropdown.addEventListener('click', (event) => {
        if (event.target.tagName === 'DIV') {
            input.value = event.target.textContent;
            dropdown.classList.add('datalist-hidden');
        }
    });

    // Hide the dropdown when clicking outside of input or dropdown
    document.addEventListener('click', (event) => {
        if (!input.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('datalist-hidden');
        }
    });

    // Toggle dropdown visibility when input is clicked
    input.addEventListener('click', () => {
        dropdown.classList.remove('datalist-hidden');
    });

    // Prevent dropdown from closing when clicking inside the dropdown
    dropdown.addEventListener('mousedown', (event) => {
        event.preventDefault();
    });

    // Show or hide the drop-off section based on checkbox state
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            dropOffSection.classList.remove('datalist-hidden');
        } else {
            dropOffSection.classList.add('datalist-hidden');
        }
    });

    // Show the drop-off dropdown when input is focused
    dropOffInput.addEventListener('focus', () => {
        dropOffDropdown.classList.remove('datalist-hidden');
    });

    // Set drop-off input value to selected location and hide dropdown
    dropOffDropdown.addEventListener('click', (event) => {
        if (event.target.tagName === 'DIV') {
            dropOffInput.value = event.target.textContent;
            dropOffDropdown.classList.add('datalist-hidden');
        }
    });

    // Hide the drop-off dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!dropOffInput.contains(event.target) && !dropOffDropdown.contains(event.target)) {
            dropOffDropdown.classList.add('datalist-hidden');
        }
    });

    // Toggle drop-off dropdown visibility when input is clicked
    dropOffInput.addEventListener('click', () => {
        dropOffDropdown.classList.remove('datalist-hidden');
    });

    // Prevent drop-off dropdown from closing when clicking inside
    dropOffDropdown.addEventListener('mousedown', (event) => {
        event.preventDefault();
    });
</script>

<script>
    //This script supports hour selection
    const times = [
        "12:00am", "12:30am", "1:00am", "1:30am", "2:00am", "2:30am", "3:00am", "3:30am",
        "4:00am", "4:30am", "5:00am", "5:30am", "6:00am", "6:30am", "7:00am", "7:30am",
        "8:00am", "8:30am", "9:00am", "9:30am", "10:00am", "10:30am", "11:00am", "11:30am",
        "12:00pm", "12:30pm", "1:00pm", "1:30pm", "2:00pm", "2:30pm", "3:00pm", "3:30pm",
        "4:00pm", "4:30pm", "5:00pm", "5:30pm", "6:00pm", "6:30pm", "7:00pm", "7:30pm",
        "8:00pm", "8:30pm", "9:00pm", "9:30pm", "10:00pm", "10:30pm", "11:00pm", "11:30pm"
    ];

    // Function to populate the select dropdown with time options
    function populateTimeOptions(selectId) {
        const select = document.getElementById(selectId);
        times.forEach(time => {
            const option = document.createElement('option');
            option.value = time;
            option.text = time;
            select.appendChild(option);
        });
    }

    // Populate time options for pick-up and drop-off time dropdowns
    populateTimeOptions('time');  // For Pick up time
    populateTimeOptions('time1'); // For Drop off time
    
    // Wait for the DOM to be fully loaded
    document.addEventListener("DOMContentLoaded", () => {
        // Retrieve previously saved pick-up and drop-off times from localStorage
        const pickUpTime = localStorage.getItem("pickUpTime");
        const dropOffTime = localStorage.getItem("dropOffTime");

        // Set the selected times in the dropdowns if they exist in localStorage
        if (pickUpTime) {
            document.getElementById('time').value = pickUpTime;
        }
        if (dropOffTime) {
            document.getElementById('time1').value = dropOffTime;
        }

        // Listen for changes in the pick-up time and save the selected value to localStorage
        document.getElementById('time').addEventListener("change", (event) => {
            localStorage.setItem("pickUpTime", event.target.value);
        });

        // Listen for changes in the drop-off time and save the selected value to localStorage
        document.getElementById('time1').addEventListener("change", (event) => {
            localStorage.setItem("dropOffTime", event.target.value);
        });
    });

    // Event listener to save selected pick-up location in localStorage when a location is clicked
    document.querySelectorAll('#locations-dropdown div').forEach(location => {
        location.addEventListener('click', () => {
            const pickUpLocation = location.textContent;
            localStorage.setItem("pickUpLocation", pickUpLocation);
        });
    });
    
    // Event listener to save selected drop-off location in localStorage when a location is clicked
    document.querySelectorAll('#dropoff-locations-dropdown div').forEach(location => {
        location.addEventListener('click', () => {
            const dropOffLocation = location.textContent;
            localStorage.setItem("dropOffLocation", dropOffLocation);
        });
    });
</script>
<script>
    // This function manages the storage and retrieval of rental information (pickup and drop-off times, 
    // locations, and dates) from localStorage, updating the corresponding input fields on the page. 
    // It also handles user interactions such as setting or changing locations, synchronizing pickup 
    // and drop-off locations via a checkbox, and validating required dates before submitting the rental form
    document.addEventListener("DOMContentLoaded", () => {
        // Get data from localStorage
        const pickUpTime = localStorage.getItem("pickUpTime");
        const dropOffTime = localStorage.getItem("dropOffTime");
        const pickUpLocation = localStorage.getItem("pickUpLocation");
        const dropOffLocation = localStorage.getItem("dropOffLocation");

        // Check if elements exist before manipulating them
        const pickUpTimeInput = document.getElementById('time');
        const dropOffTimeInput = document.getElementById('time1');
        const pickUpLocationElements = document.querySelectorAll('#locations-dropdown div');
        const dropOffLocationElements = document.querySelectorAll('#dropoff-locations-dropdown div');
        const pickUpInput = document.getElementById("pick-up-place");
        const dropOffInput = document.getElementById("drop-off-place"); // Element for drop-off
        const rentButton = document.querySelector(".get-started");
        const pickUpDateInput = document.querySelector('input[name="pick-up-date"]');
        const dropOffDateInput = document.querySelector('input[name="drop-off-date"]');
        const checkbox1 = document.getElementById("checkbox1"); // Checkbox

        if (!pickUpTimeInput || !dropOffTimeInput || !pickUpInput || !dropOffInput || !rentButton || !checkbox1) {
            console.error("Required elements are missing in the DOM.");
            return;
        }

        // Set the locations on page initialization and save them to localStorage
        pickUpInput.value = "Katowice International Airport";
        localStorage.setItem("pickUpLocation", pickUpInput.value);
        dropOffInput.value = pickUpInput.value;
        localStorage.setItem("dropOffLocation", pickUpInput.value);

        // Set the time values
        pickUpTimeInput.value = pickUpTime;
        dropOffTimeInput.value = dropOffTime;

        // Listen for changes in time inputs and save them to localStorage
        pickUpTimeInput.addEventListener("change", (event) => {
            localStorage.setItem("pickUpTime", event.target.value);
        });
        dropOffTimeInput.addEventListener("change", (event) => {
            localStorage.setItem("dropOffTime", event.target.value);
        });

        // Function to save the pick-up location to localStorage
        pickUpLocationElements.forEach(location => {
            location.addEventListener('click', () => {
                const pickUpLocation = location.textContent;
                localStorage.setItem("pickUpLocation", pickUpLocation); // Save pick-up location
                console.log("Pick-up Location saved:", pickUpLocation);
            });
        });

        // Function to save the drop-off location to localStorage
        dropOffLocationElements.forEach(location => {
            location.addEventListener('click', () => {
                const dropOffLocation = location.textContent;
                localStorage.setItem("dropOffLocation", dropOffLocation); // Save drop-off location
                console.log("Drop-off Location saved:", dropOffLocation);
            });
        });

        // Handle checkbox for synchronizing locations
        checkbox1.addEventListener("change", () => {
            if (checkbox1.checked) {
                // If the checkbox is checked, allow different pick-up and drop-off locations
                dropOffInput.disabled = false; // Enable editing of drop-off location
                console.log("Return car to a different location.");
            } else {
                // If the checkbox is unchecked, set the drop-off location to match the pick-up location
                dropOffInput.value = pickUpInput.value;
                localStorage.setItem("dropOffLocation", pickUpInput.value); // Save updated drop-off location
                dropOffInput.disabled = true; // Disable editing of drop-off location
                console.log("Drop-off Location synchronized with Pick-up Location.");
            }
        });

        // Handle the rentButton click
        rentButton.addEventListener("click", (event) => {
            const pickUpDate = localStorage.getItem("startDate");
            const dropOffDate = localStorage.getItem("endDate");

            console.log("Pick-up Date:", pickUpDate);
            console.log("Drop-off Date:", dropOffDate);

            if (!pickUpDate) {
                alert("Please select a pick-up date.");
                event.preventDefault();
                return;
            }
            if (!dropOffDate) {
                alert("Please select a drop-off date.");
                event.preventDefault();
                return;
            }

            // If startDate or endDate is null, log an error
            if (pickUpDate === null || dropOffDate === null) {
                console.error("Error: startDate or endDate is null.");
                alert("Pick-up and Drop-off dates cannot be null.");
                event.preventDefault();
                return;
            }
        });
    });
</script>
<script>
    // This function saves and updates the pickup and drop-off date, time, and location information
    // in localStorage, and displays them on the page, ensuring synchronization when changes occur
    document.addEventListener("DOMContentLoaded", () => {
        // Function to update the description displayed on the page based on stored values
        const updateDescriptions = () => {
            // Retrieve the stored values for start date, end date, pick-up time, drop-off time, and locations
            const startDate = localStorage.getItem("startDate");
            const endDate = localStorage.getItem("endDate");
            const pickUpTime = localStorage.getItem("pickUpTime");
            const dropOffTime = localStorage.getItem("dropOffTime");
            const pickUpLocation = localStorage.getItem("pickUpLocation");
            const dropOffLocation = localStorage.getItem("dropOffLocation");

            // Update the description in the HTML with the retrieved values
            document.querySelector(".description.pick-up").innerHTML = `Pickup Date and Time: <b>${startDate} at ${pickUpTime}</b><br>Pickup Location: <b>${pickUpLocation}</b>`;
            document.querySelector(".description.drop-off").innerHTML = `Return Date and Time: <b>${endDate} at ${dropOffTime}</b><br>Return Location: <b>${dropOffLocation}</b>`;
        };

        // Function to validate and set default dates in localStorage if needed
        const validateDates = () => {
            const today = new Date();
            today.setHours(0, 0, 0, 0); // Set today's date to midnight
            const tomorrow = new Date(today);
            tomorrow.setDate(today.getDate() + 1); // Set tomorrow's date

            let startDate = localStorage.getItem("startDate");
            let endDate = localStorage.getItem("endDate");

            // If no start or end date is set in localStorage, set them to today and tomorrow
            if (!startDate || !endDate) {
                startDate = today.toISOString().split('T')[0];
                endDate = tomorrow.toISOString().split('T')[0];
                localStorage.setItem("startDate", startDate);
                localStorage.setItem("endDate", endDate);
            } else {
                // If dates are set, ensure that the start date is not in the past
                const startDateObj = new Date(startDate);
                const endDateObj = new Date(endDate);

                if (startDateObj < today) {
                    // If the start date is in the past, reset to today and tomorrow
                    localStorage.setItem("startDate", today.toISOString().split('T')[0]);
                    localStorage.setItem("endDate", tomorrow.toISOString().split('T')[0]);
                }
            }
        };

        // Validate and set default dates on page load
        validateDates();
        // Update descriptions every second
        updateDescriptions();
        setInterval(updateDescriptions, 1000);

        // Listen for changes in localStorage and update descriptions
        window.addEventListener("storage", updateDescriptions);

        // Event listeners for pick-up time, drop-off time, pick-up location, and drop-off location inputs
        const pickUpTimeInput = document.getElementById("pick-up-time");
        if (pickUpTimeInput) {
            pickUpTimeInput.addEventListener("change", (event) => {
                localStorage.setItem("pickUpTime", event.target.value); // Save the selected pick-up time
            });
        }

        const dropOffTimeInput = document.getElementById("drop-off-time");
        if (dropOffTimeInput) {
            dropOffTimeInput.addEventListener("change", (event) => {
                localStorage.setItem("dropOffTime", event.target.value); // Save the selected drop-off time
            });
        }

        const pickUpLocationInput = document.getElementById("pick-up-location");
        if (pickUpLocationInput) {
            pickUpLocationInput.addEventListener("change", (event) => {
                localStorage.setItem("pickUpLocation", event.target.value); // Save the selected pick-up location
            });
        }

        const dropOffLocationInput = document.getElementById("drop-off-location");
        if (dropOffLocationInput) {
            dropOffLocationInput.addEventListener("change", (event) => {
                localStorage.setItem("dropOffLocation", event.target.value); // Save the selected drop-off location
            });
        }
    });
</script>
<!-- 
------------------------------------------------------------------------------------
-----------------------------------Filtering section--------------------------------
------------------------------------------------------------------------------------
-->
<script>
    // This script supports activation of selected boxes
    // Loop through all elements with the class 'choice-box'
    document.querySelectorAll('.choice-box').forEach(box => {
        box.addEventListener('click', function () {
            // Check if the clicked box is already active
            if (this.classList.contains('active')) {
                // If it's active, remove the 'active' class
                this.classList.remove('active');
            } else {
                // Remove the 'active' class from all other boxes
                document.querySelectorAll('.choice-box').forEach(b => b.classList.remove('active'));

                // Add the 'active' class to the clicked box
                this.classList.add('active');
            }
        });
    });
</script>
<script>
    // Function to handle clicks on filter options
    document.querySelectorAll('.filter-specified-box').forEach(box => {
        box.addEventListener('click', function () {
            const isActive = this.classList.contains('active');
            const parentBox = this.closest('.filter-box'); // Find the parent section
            const isShowAll = this.getAttribute('id') === 'show-all';
            const isVehicleTypeSection = parentBox.getAttribute('data-category') === 'vehicle-type';

            // If "Show all" was clicked in the "Vehicle type" section
            if (isVehicleTypeSection && isShowAll) {
                if (!isActive) {
                    // Select "Show all" and deselect other options in the "Vehicle type" section
                    this.classList.add('active');
                    parentBox.querySelectorAll('.filter-specified-box').forEach(opt => {
                        if (opt !== this) {
                            opt.classList.remove('active');
                        }
                    });
                } else {
                    // Deselect "Show all" if it was already selected
                    this.classList.remove('active');
                }
            } else if (isVehicleTypeSection) {
                // If another option besides "Show all" was selected in the "Vehicle type" section
                if (!isActive) {
                    this.classList.add('active');
                    parentBox.querySelector('#show-all').classList.remove('active'); // Deselect "Show all"
                } else {
                    this.classList.remove('active');
                }
            } else {
                // If an option in other sections (Transmission, Cost) was clicked
                this.classList.toggle('active');
            }

            // Send the status information to the database or logic handler
            const filterType = this.getAttribute('data-filter');
            const status = !isActive ? 'selected' : 'deselected';
            sendStatusToDatabase(filterType, status);
        });
    });

    function sendStatusToDatabase(filterType, status) {
        console.log(`Filter: ${filterType}, Status: ${status}`);
        // Example of sending to a database or API:
        // fetch('/api/update-filter', { method: 'POST', body: JSON.stringify({ filterType, status }) });
    }

    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    function setFilterFromURL() {
        const vehicleType = getQueryParam('vehicle'); // Get the 'vehicle' parameter from the URL
        
        if (vehicleType) {
            // Example: Set the appropriate filter on the page based on the passed parameter
            const filterBox = document.querySelector(`.filter-specified-box[data-filter="${vehicleType}"]`);
            if (filterBox) {
                // Select the appropriate box based on the URL parameter
                filterBox.classList.add('active'); // Add the 'active' class to the box
                filterBox.querySelector('.check-box').classList.add('checked'); // Mark the checkbox
            }
        }
    }

    // Set the filters after the page is loaded
    window.onload = setFilterFromURL;
</script>
