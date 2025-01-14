# Carental - Car Rental Website

Welcome to Carental, your one-stop solution for renting cars! This README provides an overview of the Carental website, its features, and instructions for using the site.

---

## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Setup Instructions](#setup-instructions)
3. [Features](#features)
4. [Responsive Design](#responsive-design)
5. [Database Integration](#database-integration)
6. [Challenges During Production](#challenges-during-production)
7. [Troubleshooting](#troubleshooting)
8. [License](#license)

---

## Prerequisites

To set up and run the Carental website, you will need the following applications:

- **XAMPP**: A free and open-source cross-platform web server solution stack package, which includes Apache, MySQL, and PHP. [Download XAMPP](https://www.apachefriends.org/index.html).
- **Web Browser**: Any modern web browser such as Google Chrome, Firefox, Edge, or Safari.
- **Text Editor/IDE (for making changes)**: Examples include Visual Studio Code, Sublime Text, or any other editor of your choice.

---

## Setup Instructions

Follow these steps to set up the Carental website on your local machine:

1. **Install XAMPP**:
   - Download and install XAMPP from the official website.
   - Open the XAMPP Control Panel and start the `Apache` and `MySQL` services.

2. **Set Up the Database**:
   - Open PHPMyAdmin by navigating to `http://localhost/phpmyadmin` in your browser.
   - Import the database schema and seed data:
     - Click the `SQL` tab.
     - Paste the content of the provided file `SQL setup - wypozyczalnia.sql`.
     - Click `Go` to execute the SQL script. This will create the necessary tables and populate them with initial data.

3. **Configure the Project**:
   - Create a folder named `Carental` in the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS).
   - Copy all project files (PHP, JS, CSS, etc.) into the `Carental` folder.

4. **Run the Project**:
   - Ensure both the Apache and MySQL services are running.
   - Open your browser and navigate to `http://localhost/Carental`.
   - The website should now be operational.

---

## Features

### Home Page
![Car Portfolio Page](src/images/readme/Home-Page.gif)

- Four tiles navigate the user to the Car Portfolio page with corresponding URL filters.
- General information about the company.
- Interactive map displaying abroad restrictions.

### Car Portfolio
![Car Portfolio Page](src/images/readme/Car-Portfolio-Page.gif)

- Displays the company’s car portfolio dynamically from the database.
- Filtering options include:
  - City, SUV, Sports, Van, Electric, Luxury, Truck.
- "Rent the car" button redirects users to the Booking page with pre-filled car details.

### Booking Page
![Booking Page](src/images/readme/Booking-Page.gif)

- Mandatory fields for:
  - Pick-up and Drop-off location (dropdown).
  - Pick-up and Drop-off date (calendar).
  - Pick-up and Drop-off time (dropdown).
- Advanced filtering options for:
  - Vehicle type, Transmission type, Fuel type.
- Selected options are saved in `localStorage` and displayed in a summary.

### Payment Page
![Paying Page](src/images/readme/Paying-Form-Page.gif)

- Displays a summary of selected options and car details.
- Users choose a "Waiver Package":
  - STANDARD, GOLD, GOLD UE.
- Calculates and displays the total cost dynamically.

### User Authentication
![Sign in / Log in Page](src/images/readme/Sign-In-Log-In-Page.gif)

- Users must sign up and log in to rent cars.
- Account creation requires basic personal details.

---

## Responsive Design

- Optimized for desktops, laptops, tablets, and mobile phones.
- Interactive elements like buttons and headers respond to user actions (hovering, scrolling).
- Home and Sign in/Log in pages feature fluid background image transitions.

---

## Database Integration

- The database includes tables for car types, user accounts, and login credentials.
- User passwords are securely stored using hashing algorithms.

---

## Challenges During Production

### JavaScript Integration

- Developing advanced JavaScript scripts for dynamic content and calendar integration was challenging due to initial skill gaps.
- Extensive time was invested in learning JavaScript and understanding asynchronous operations.
- The experience led to significant improvements in the team’s programming skills.

---

## Troubleshooting

### "MySQL shutdown unexpectedly" Error

If you encounter this error, follow these steps:

1. **Stop MySQL Service:**
   - Open XAMPP Control Panel and stop MySQL.

2. **Backup Existing Data:**
   - Rename `xampp/mysql/data` to `data_old`.

3. **Restore from Backup:**
   - Copy the `backup` folder inside `xampp/mysql` and rename it to `data`.

4. **Restore Your Databases:**
   - Copy database folders from `data_old` (excluding `mysql`, `performance_schema`, `phpmyadmin`) into `data`.

5. **Restore `ibdata1`:**
   - Copy `ibdata1` from `data_old` to `data`.

6. **Start MySQL:**
   - Start the MySQL service in XAMPP and verify functionality.

### Page Not Loading or 404 Error

- Verify that the project files are in the correct `htdocs` folder.
- Ensure the Apache server is running and the URL is correct (`http://localhost/Carental`).
- Check browser console for errors.

---

## License

This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.
