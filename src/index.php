<?php 
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <!--slide-->
    <div id="slide">
        <section id="slideshow">
            <article class="cycle-slideshow">

                <img src="images/slide1.jpg" alt="aurora slide">
                <img src="images/slide2.jpg" alt="aurora slide">
                <img src="images/slide3.jpg" alt="aurora slide">
                <img src="images/slide4.jpg" alt="aurora slide">

            </article>
        </section>
    </div>
    </div>

    <!--activity-->
    <div id="activity">
        <div class="container">
            <h2>Multiple activities</h2>
            <ul>
                <li>
                    <div>
                        <figure data-scroll-class="chapter-image-popped">
                            <img src="images/bear.png" alt="polar bear">
                        </figure>
                    </div>
                    <h3>Polar bear</h3>
                    <p>Chasing the footprints </p>
                    <a href="book.php">Book now</a>
                </li>
                <li class="line"></li>

                <li>
                    <div>
                        <figure data-scroll-class="chapter-image-popped">
                            <img src="images/tent.jpg" alt="camping tent">
                        </figure>
                    </div>
                    <h3>Camping</h3>
                    <p>Tent camping under the stars </p>
                    <a href="book.php">Book now</a>
                </li>
                <li class="line"></li>

                <li>
                    <div>
                        <figure data-scroll-class="chapter-image-popped">
                            <img src="images/people.jpg" alt="Santa">
                        </figure>
                    </div>
                    <h3>Santa</h3>
                    <p>Ride the reindeer to visit Santa </p>
                    <a href="book.php">Book now</a>
                </li>
                <li class="line"></li>

                <li>
                    <div>
                        <figure data-scroll-class="chapter-image-popped">
                            <img src="images/photo-of-gray-fish-caught-by-fishing-rod-1058295.jpg" alt="fishing">
                    </div>
                    </figure>
                    <h3>Fishing</h3>
                    <p>Taste the fresh seafood </p>
                    <a href="book.php">Book now</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="clike">Click to Read more information</div>
    <div id="info">
        <h3>Polar bear</h3>
        <p>Suitable for families to experience together is to observe wild polar bears and pass
            on the children's awareness of ecological environment protection.</p>
        <h3>Camping</h3>
        <p>The tent under the stars is located on the lawn, which is a good place for
            couples dating and family gatherings.</p>
        <h3>Santa</h3>
        <p> Not only can you take a photo with the mysterious Santa, but you can also get a gift that Santa has
            hand-picked for you.</p>
        <h3>Fishing</h3>
        <p>For lover of good food tourists, you can fish on the ice lake and have
            someone to help cook the fresh seafood you catch.</p>
    </div>

    <!--detail-->
    <div id="detail">
        <div class="container">
            <div class="detail-top">
                <h2>More choices</h2>
            </div>
            <div class="detail-main">
                <div class="detail-left left">
                    <div>
                        <img src="images/lunch-table-5929.jpg" alt="family lunch">
                        <h1>Family long table buffet.</h1>
                        <a href="activity.php">Read more</a>
                    </div>

                    <div>
                        <img src="images/photo-of-tent-at-near-trees-2422265.jpg" alt="camping tent">
                        <h1>Tent camping under Polaris.</h1>
                        <a href="activity.php">Read more</a>
                    </div>

                    <div>
                        <img src="images/northern-lights-1933319.jpg" alt="aurora ">
                        <h1>Watch the aurora.</h1>
                        <a href="activity.php">Read more</a>
                    </div>
                </div>

                <div class="detail-right right">
                    <div>
                        <img src="images/boarding.jpg" alt="boarding">
                        <h1>Boating on the ice lake.</h1>
                        <a href="activity.php">Read more</a>
                    </div>

                    <div>
                        <img src="images/48879547432_596e9403f0_c.jpg" alt="mermaid swimming">
                        <h1>Mermaid costume experience.</h1>
                        <a href="activity.php">Read more</a>
                    </div>

                    <div>
                        <img src="images/man-on-ski-board-on-snow-field-1271147.jpg" alt="skiing">
                        <h1>Extreme skiing challenge.</h1>
                        <a href="activity.php">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/scrollClass.min.js"></script>

</body>

<script>
    $(document).ready(function () {
        $("#clike").click(function () {
            $("#info").slideDown("slow");
        });
    });
</script>

</html>
