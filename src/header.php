<?php
    session_start();
?>
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    
    <div id="nav">
        <div class="container">
            <div class="header"></div>
            <ul class="">
                <li><a href="index.php">Home</a></li>
                <li><a href="activity.php">Activity</a></li>
                <li><a href="hotel.php">Hotel</a></li>

                <?php
                        if (isset($_SESSION["username"])) {
                            echo "<li><a href='book.php'>Book</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";

                        }
                        else {
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                            echo "<li><a href='login.php'>Log in</a></li>";
                        }
                    
                    ?> 


            </ul>


        </div>
    </div>
                
