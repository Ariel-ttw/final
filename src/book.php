<?php 
include_once 'header.php';
?>
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">
</head>

<body>

    <!--contact us-->
    <form action="">
        <table>
            <tr>
                <th>
                    <img src="images/banner2.png" alt="aurora">
                </th>
            </tr>

            <tr>
                <th>
                    <h1> Book your trip</h1>
                </th>
            </tr>

            <tr>
                <td>Your Name :</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Your e-mail :</td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Your phone number : </td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Scheduled time (year/ month/ day) : </td>
            </tr>
            <tr>
                <td><input type="text"></td>
            </tr>

            <tr>
                <td>Number of bookings :</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" value="A person" class="check-box">A person
                    <input type="checkbox" value="Two people" class="check-box">Two people
                    <input type="checkbox" value="three people" class="check-box">Three people
                    <input type="checkbox" value="four people" class="check-box">Four people
                </td>
            </tr>

            <tr>
                <td>Hotel type :</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" value="Igloo" class="check-box">Ice house
                    <input type="checkbox" value="Tent" class="check-box">Tent
                    <input type="checkbox" value="Vacation hotel" class="check-box">Vacation hotel
                    <input type="checkbox" value="Forest Chalet" class="check-box">Forest Chalet
                </td>
            </tr>

            <tr>
                <td>Selected event type :</td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" value="Ice fishing" class="check-box">Ice fishing
                    <input type="checkbox" value="Mermaid experience" class="check-box">Mermaid experience
                    <input type="checkbox" value="Santa's Journey" class="check-box">Santa's Journey
                    <input type="checkbox" value="Ski" class="check-box">Ski
                    <input type="checkbox" value="Aurora viewing" class="check-box">Aurora viewing
                    <input type="checkbox" value="Polar bear footprint" class="check-box">Polar bear
                </td>
            </tr>

            <tr>
                <td>The booking request you want to add :</td>
            </tr>

            <div id="text">
                <tr>
                    <td>
                        <textarea name="" id="" cols="100" rows="10"></textarea>
                    </td>
                </tr>
            </div>
            <tr>
                <th>
                     <button type="submit" class="submit">
                        <a href="pop.html">Submit</a></button>
                        
                </th>
            </tr>
        </table>
    </form>

    <!--service-->
    <div id="service">
        <ul>
            <li>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="reference.php">Reference</a></li>
                </ol>
            </li>
            <li>
                <ol>
                    <li><a href="activity.php">Activity</a></li>
                    <li><a href="activity.php">Ski</a></li>
                    <li><a href="activity.php">Polar bear</a></li>
                    <li><a href="activity.php">Ice fishing</a></li>
                    <li><a href="activity.php">Aurora viewing</a></li>
                    <li><a href="activity.php">Santa's Journey</a></li>
                    <li><a href="activity.php">Mermaid experience</a></li>
                </ol>
            </li>
            <li>
                <ol>
                    
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="hotel.php">Tent</a></li>
                    <li><a href="hotel.php">Ice house</a></li>
                    <li><a href="hotel.php">Forest Chalet</a></li>
                    <li><a href="hotel.php">Vacation hotel</a></li>
                </ol>
            </li>
            <li>
                <ol>
                    <li><a href="log.php">Log in</a></li>
                </ol>
            </li>
            <li>
                <ol>
                    <li><a href="book.php?">Bookings</a></li>
                </ol>
            </li>

        </ul>
    </div>
    </div>

</body>

<script src="js/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("button").click(function () {
            $("#text").empty();
        });
    });
</script>

</php>
    


</body>
</html>
