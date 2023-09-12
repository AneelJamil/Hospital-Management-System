<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        /* Custom CSS for the form */
        .custom-form {
            /* background-color: rgba(0, 0, 0, 0.7); Black with 70% opacity */
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
        }
    /* </style>
    <style> */
        body {
            background-image: url('./Background\ image.jpg'); /* Corrected the image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        .logo img {
            max-width: 150px; 
            height: auto;
            margin-right: 10px; 
        }

        .search-logo {
            cursor: pointer;
        }

         .location-options, .payment-options {
            display: none;
            text-align: center;
            background-color: #000000;
            padding: 10px 0;
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
        }
        .search-location{
            display: none;
            text-align: center;
            /* background-color: #000000; */
            padding: 10px 0;
            position: absolute;
            top: 70px;
            left: 0;
            right: 0;
        }

        .search-location input[type="text"] {
            width: 200px;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .search-location button {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-location button:hover {
            background-color: #494747;
        }

        .location-button, .payment-button {
            background-color: #000000;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .location-button:hover, .payment-button:hover {
            background-color: #494747;
        }

        .location-options a, .payment-options a {
            color: #fff;
            text-decoration: none;
            padding: 10px 0;
            display: block;
        }

        .location-options a:hover, .payment-options a:hover {
            background-color: #494747;
        }

        .payment-option {
            display: flex;
            align-items: center;
            color: #fff;
        }

        .payment-option img {
            max-width: 50px;
            height: auto;
            margin-right: 10px;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        nav {
            flex-grow: 1;
            text-align: right;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        #features {
            /* background-color: rgba(0, 0, 0, 0.7); */
            padding: 20px;
        }

        #features h2 {
            color: #fff;
        }

        .feature-columns {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .feature-column {
            flex-basis: calc(33.33% - 20px); /* Adjust the width as needed */
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            margin-bottom: 20px;
            color: #fff;
            border-radius: 5px;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            cursor: pointer;
        }

        .feature-column:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }

        .feature-column h3 {
            font-size: 24px;
            margin: 0;
            color: #00ffea;
        }

        .feature-column p {
            font-size: 18px;
        }

        /* Additional styles for home page */
        .home-background {
            background-image: url('./hospital-image.jpg'); /* Replace with your background image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .home-background img {
            max-width: 100%;
            height: auto;
        }

        .home-content {
            text-align: center;
            padding: 20px;
            color: #000000;
            /* background-color: rgba(0, 0, 0, 0.7); */
            border-radius: 5px;
        }

        .home-content h2 {
            font-size: 36px;
            margin: 0;
        }

        .home-content p {
            font-size: 18px;
            margin: 10px 0;
        }

        .learn-more-button {
            display: inline-block;
            background-color: #00ffea;
            color: #000;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .learn-more-button:hover {
            background-color: #494747;
        }
    </style>
</head>
<body>
        <!-- nav bar start  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Logo on the left side -->
                <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo" width="50"></a>
        
                <!-- Toggler button for small screens -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Navigation links on the right side -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Index 16.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Content</a>
                        </li>
                        <!-- Payment dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="paymentDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Payment
                            </a>
                            <div class="dropdown-menu" aria-labelledby="paymentDropdown">
                                <a class="dropdown-item d-flex" href="#">
                                    <img src="PayPal.png" alt="Logo" width="50">
                                    <p>Paypal</p>
                                </a>
                                <a class="dropdown-item d-flex" href="#">
                                    <img src="credit-card.png" alt="Logo" width="50">
                                    <p>Card</p>
                                </a>
                                <a class="dropdown-item d-flex" href="#">
                                    <img src="bank-transfer.png" alt="Logo" width="50">
                                    <p>Banktransfer</p>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="container">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search">search</i></button>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">

                            <!-- login form start  -->
    
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-bs-whatever="@mdo">login</button>
                            
    
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Message:</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Send message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
    
                            <!-- login form end  -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav bar end -->
    <!-- Content for Home Page -->
    <section id="home" class="content-section">
        <div class="home-content">
            <h2>Welcome to Hospital Management System</h2>
            <p>Efficiently manage your hospital operations with our user-friendly system.</p>
            <a href="learn.html" target="_self" class="learn-more-button">Learn More</a>
        </div>
    </section>
    <!-- Rest of your content -->
    <section id="features">
        <h2>Key Features</h2>
        <div class="feature-columns">
            <!-- Feature 1 -->
            <div class="feature-column">
                <i class="fas fa-user-md"></i>
                <h3>Manage Patients</h3>
                <p>Efficiently manage patient records and information.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-column">
                <i class="fas fa-user-nurse"></i>
                <h3>Doctors' Dashboard</h3>
                <p>Allow doctors to access patient data and appointments.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-column">
                <i class="fas fa-calendar-check"></i>
                <h3>Appointment Scheduling</h3>
                <p>Streamline appointment scheduling and reminders.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-column">
                <i class="fas fa-chart-line"></i>
                <h3>Generate Reports</h3>
                <p>Generate reports and insights for better decision-making.</p>
            </div>
        </div>
    </section>
    <footer>
        <p id="datetime">Hospital Management System</p>
    </footer>
    <script>
        let searchLocationVisible = false;
        let locationVisible = false;
        let paymentVisible = false;

        function toggleSearchLocation() {
            const searchLocation = document.querySelector('.search-location');
            searchLocationVisible = !searchLocationVisible;
            searchLocation.style.display = searchLocationVisible ? 'block' : 'none';
        }

        function toggleLocation() {
            const locationOptions = document.querySelector('.location-options');
            locationVisible = !locationVisible;
            locationOptions.style.display = locationVisible ? 'block' : 'none';
        }

        function togglePayment() {
            const paymentOptions = document.querySelector('.payment-options');
            paymentVisible = !paymentVisible;
            paymentOptions.style.display = paymentVisible ? 'block' : 'none';
        }

        function updateDateTime() {
            const datetimeElement = document.getElementById('datetime');
            setInterval(() => {
                const now = new Date();
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
                const formattedDate = now.toLocaleDateString(undefined, options);
                datetimeElement.textContent = formattedDate;
            }, 1000);
        }

        updateDateTime();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>
</html>
