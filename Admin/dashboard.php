
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="new_dashboard.css">    
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <!-- <img src="logo.jpg" > -->
            <h2>JOURNEY BEYOND</h2>
        </div>
        <ul>
            <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
            <li><i class="fa-solid fa-location-dot"></i>Trips</li>
            <li><i class="fa-solid fa-users"></i> Service Providers</li>
            <li><i class="fa-solid fa-suitcase-rolling"></i>Travelers</li>
            <li><i class="fas fa-file-alt"></i> Income Report</li>
            <li><i class="fas fa-envelope"></i> Messages</li>
            <li><i class="fas fa-cog"></i> Settings</li>
            <li><i class="fas fa-sign-out-alt"></i> Sign Out</li>
        </ul>     
    </div>

    <div class="main-content">
        <header>
            <div class="header-title">
                <h2>Admin Dashboard</h2>
            </div>
            <div class="header-search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search here...">
                
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
            <div class="Total trips">
                    <?php 
                    
                    $color1 = '#C814F6'; 
                    $text1 = 'Total trips'; 
                    $text2 = 'All'; 
                    $bottomText = '1,500'; 
                    $borderColor = '#13C296';
                    // $imagePath=<i class="fa-solid fa-route"></i>;
                    include 'dataset.php'; 
                    ?>                
            </div>
            
            <div class="Total Travelers">
                    <?php 
                    
                    $color1 = '#6D28D9'; 
                    $text1 = 'Total Travelers'; 
                    // $text2 = 'All'; 
                    $bottomText = '1,500'; 
                    $borderColor = '#13C296';
                    // $imagePath=<i class="fa-solid fa-route"></i>;
                    include 'dataset.php'; 
                    ?>                
            </div>
            <div class="Total Service Providers">
                    <?php 
                    
                    $color1 = '#1C3FB7'; 
                    $text1 = 'Total Service Providers'; 
                    $text2 = 'All'; 
                    $bottomText = '1,500'; 
                    $borderColor = '#13C296';
                    // $imagePath=<i class="fa-solid fa-route"></i>;
                    include 'dataset.php'; 
                    ?>                
            </div>

            <div class="Total Income">
                    <?php 
                    
                    $color1 = '#0B76B7'; 
                    $text1 = 'Total Income'; 
                    $text2 = 'All'; 
                    $bottomText = '1,500'; 
                    $borderColor = '#13C296';
                    // $imagePath=<i class="fa-solid fa-route"></i>;
                    include 'dataset.php'; 
                    ?>                
            </div>
        </div>

        <div class="charts">
            
            <div class="calendar">
                <div id="calendar-header">
                    <button id="prev-month">‹</button>
                    <h2 id="calendar-title">August 2024</h2>
                    <button id="next-month">›</button>
                </div>
                <table id="calendar-table">
                    <thead>
                        <tr>
                            <th>Sun</th>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <script src="calendar.js"></script>

                    </tbody>
                </table>
            </div>
            
            
           
        </div>
    </div>
</body>
</html>
