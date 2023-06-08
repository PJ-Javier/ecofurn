<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918435/ecofurn/image/logo_rvpooq.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Nav -->
    <div><?php
            include('nav.php'); ?></div>
    <!--Slider-->
    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918433/ecofurn/image/about_2_yebml6.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">About Ecofurn</h2>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918445/ecofurn/image/about_1_mcqaky.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">About Ecofurn</h2>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918446/ecofurn/image/about_3_pfboc4.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">About Ecofurn</h2>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js">
    </script>
    <script type="text/javascript" src="home.js"></script>

    <!--Main body-->
    <section class="about">
        <div class="about-row">
            <h2 class="section-heading">WHO WE ARE</h2>
        </div>
        <div class="about-row">
            <div class="column">
                <div class="cardss">
                    <a href="about-story.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3>How We Started</h3>
                        <p>From vision to reality: The story of Ecofurn</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="about-mission.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-handshake"></i>
                        </div>
                        <h3>Our Mission</h3>
                        <p>Our Mission: Redefining Furniture with Recycled and Sustainable Materials</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="about-vision.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <h3>Our Vision</h3>
                        <p>Our Vision: Creating a Sustainable Furniture Revolution </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="about-row">
            <h2 class="section-heading">OUR SERVICES</h2>
        </div>
        <div class="about-row">
            <div class="column">
                <div class="cardss">
                    <a href="serv-pu.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-truck-loading"></i>
                        </div>
                        <h3>Furniture Pick Up</h3>
                        <p>Convenient pick-up services for your unwanted furnitures</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="serv-delivery.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-truck"></i>
                        </div>
                        <h3>Delivery</h3>
                        <p>Get your products delivered at your doorstep</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="serv-fi.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-tools"></i>
                        </div>
                        <h3>Furniture Installations</h3>
                        <p>Efficient and reliable installation services</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="serv-paym.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-credit-card"></i>
                        </div>
                        <h3>Flexible Payment Options</h3>
                        <p>Flexible payment methods tailored to your needs</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="serv-lps.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-hand-holding-heart"></i>
                        </div>
                        <h3>Loyalty Points System</h3>
                        <p>To show appreciation to our loyal customers</p>
                    </a>
                </div>
            </div>
            <div class="column">
                <div class="cardss">
                    <a href="serv-cs.php">
                        <div class="icon-wrapper">
                            <i class="fa fa-headset"></i>
                        </div>
                        <h3>Customer Support</h3>
                        <p>Guiding you every step of the way</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div style="margin-top:500px;"></div>
    <!-- Nav -->
    <div style="position:relative" ;><?php
                                        include('footer.php'); ?></div>
</body>

</html>