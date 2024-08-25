<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="serviceprovider.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            
            <h2>JOURNEY BEYOND</h2>
        </div>
        <ul>
            <li><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li ><i class="fa-solid fa-location-dot"></i>Trips</li>
            <li class="active"><i class="fa-solid fa-users"></i> Service Providers</li>
            <li><i class="fa-solid fa-suitcase-rolling"></i>Travelers</li>
            <li><i class="fas fa-file-alt"></i> Income Report</li>
            <li><i class="fas fa-envelope"></i> Messages</li>
            <li><i class="fas fa-cog"></i> Settings</li>
            <li><i class="fas fa-sign-out-alt"></i> Sign Out</li>

        </ul>
        <p>All Right Reserved 2024</p>
     
    </div>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>Service Provider Section</h2>
            </div>
            <div class="header-profile">
                <div class="notification">
                    <i class="fa-regular fa-bell"></i>
                </div>
                <div class="profile-pic">
                    <i class="fa-solid fa-user-large"></i>
                </div>
            </div>
        </header>

        <div class="dashboard-cards">
            <div class="accomadator">
                <?php 
                
                $color1 = '#13C275'; 
                $text1 = 'Accomadators'; 
                $text2 = 'All'; 
                $bottomText = '1,500'; 
                $borderColor = '#13C296';
                $imagePath="home.png";
                include 'dataset.php'; ?>

            </div>
            <div class="guider">
                <?php 

                $color1 = '#3758F9'; 
                $text1 = 'Guiders'; 
                $text2 = 'All'; 
                $bottomText = '1,700'; 
                $imagePath="guide.png";
                include 'dataset.php'; ?>
                
            </div>
            <div class="transport">
                <?php 

                $color1 = 'rgba(242, 153, 74, 1)'; 
                $text1 = 'Transport'; 
                $text2 = 'All'; 
                $bottomText = '1,700'; 
                $imagePath="car.png";
                include ('dataset.php'); ?>
                
            </div>
            <div class="equipment">
                <?php 

                $color1 = '#13C296'; 
                $text1 = 'Equipment'; 
                $text2 = 'All'; 
                $bottomText = '1,900'; 
                $imagePath="support.png";
                include ('dataset.php'); ?>
                
            </div>
        </div>
        
        <div class="charts">
            <div class="table">
            <?php
            include 'tableofcustomer.html';?>
            </div>
       
       
        <div class="notice">
            <!-- <h3>Details Of the Trip</h3> -->
            <form id="trip-details-form">
                <div class="form-group">
                    <label for="tripID">TripID:</label>
                    <input type="text" id="tripID" name="tripID" readonly>
                </div>
                <div class="form-group">
                    <label for="travelerID">TravelerID:</label>
                    <input type="text" id="travelerID" name="travelerID" readonly>
                </div>
                <div class="form-group">
                    <label for="numDates">Number of Dates:</label>
                    <input type="text" id="numDates" name="numDates">
                </div>
                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="text" id="amount" name="amount">
                </div>
                <div class="form-group">
                    <label for="numPeople">Number of People:</label>
                    <input type="text" id="numPeople" name="numPeople">
                </div>
                <div class="form-buttons">
                    <button type="button" class="btn btn-delete" onclick="confirmDelete()">Delete</button>
                    <button type="submit" class="btn btn-ok">OK</button>
                </div>
            </form>
        </div>
        </div>
        
        <script>
            function confirmDelete() {
                const userConfirmed = confirm("Are you sure you want to delete?");
                if (userConfirmed) {
                    // Proceed with deletion
                    alert("Deleted successfully."); // Placeholder action
                    // Add actual deletion logic here (e.g., form submission, API call, etc.)
                } else {
                    // Deletion canceled
                    alert("Deletion canceled.");
                }
            }
            </script>
    <!-- </div> -->
</body>
</html>