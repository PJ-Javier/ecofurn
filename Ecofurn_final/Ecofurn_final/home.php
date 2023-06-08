<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecofurn</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918435/ecofurn/image/logo_rvpooq.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Nav -->
    <div><?php
            include('nav.php'); ?></div>
    <?php    //add to cart
    if (isset($_GET['product_buy'])) {
        $product_id = $_GET['product_buy'];

        $select_query = "Select * from `products` where product_id=$product_id";
        $result_query = mysqli_query($con, $select_query);
        $row = mysqli_fetch_assoc($result_query);
        $prodname = $row['product_title'];
        $user = $user_id;
        $price = $row['product_price'];
        $image = $row['product_image1'];
        $quantity = 1;
        $insert_products = "insert into `cart`(user_id,name,price,image,quantity) values ('$user','$prodname','$price','$image', '$quantity' )";
        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert('Successfully inserted the products')</script>";
        }
    } ?>
    <!--Slider-->
    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918436/ecofurn/image/slider1_oyind0.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Dining Room Furniture</h2>
                <a href="dining_products.php" class="btn">Show More</a>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918444/ecofurn/image/slider2_m5hgum.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Bedroom Furniture</h2>
                <a href="bedroom_products.php" class="btn">Show More</a>
            </div>
        </div>

        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918436/ecofurn/image/slider3_pkgw8l.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Outdoor Furniture</h2>
                <a href="outdoor_products.php" class="btn">Show More</a>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918437/ecofurn/image/slider4_app3e2.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Children's Room</h2>
                <a href="children_products.php" class="btn">Show More</a>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918431/ecofurn/image/slider5_qlwhjr.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Living Room Furniture</h2>
                <a href="livingroom_products.php" class="btn">Show More</a>
            </div>
        </div>
        <div class="carousel-cell" style="background-image: url(https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918430/ecofurn/image/slider6_fotc0m.jpg);">
            <div class="overlay"></div>
            <div class="inner">
                <h2 class="title">Office Furniture</h2>
                <a href="office_products.php" class="btn">Show More</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script>
    <script type="text/javascript" src="home.js"></script>

    <!--Main Body-->
    <section class="backgroundcolor">
        <div class="container">
            <div class="text">
                <h2>ENVIRONMENTAL IMPACT</h2>
            </div>
            <div class="row-items">
                <div class="container-box">
                    <div class="container-img">
                        <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918431/ecofurn/image/7_wrvkrh.png">
                    </div>
                    <h4>20000+ KG</h4>
                    <p>Post consumer plastic waste recycled</p>
                </div>
                <div class="container-box">
                    <div class="container-img">
                        <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918432/ecofurn/image/8_pok2ts.png">
                    </div>
                    <h4>24000+ KG</h4>
                    <p>CO2 equivalent mitigated</p>
                </div>
                <div class="container-box">
                    <div class="container-img">
                        <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918432/ecofurn/image/9_shqznh.png">
                    </div>
                    <h4>2100+ CU. FT</h4>
                    <p>Wood saved by making recycled furniture</p>
                </div>
            </div>
        </div>
    </section>

    <!--Main Body-->
    <section class="collection" id="collection">
        <div class="title">
            <h2>OUR COLLECTION</h2>
            <div class="line"></div>
        </div>
        <div class="gallery">
            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918433/ecofurn/image/arisha_vrdbfl.jpg">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Wardrobes </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918433/ecofurn/image/ayda_m9oe4f.jpg">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Chairs & Sofas </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918434/ecofurn/image/decor_licyyj.jpg">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Decorations </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919139/ecofurn/products/helieu2_qssvqv.jpg">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Beds </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919151/ecofurn/products/baldric2_km6pw6.jpg">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Tables </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="grid">
                <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918435/ecofurn/image/outdoor_iskw92.png">
                <div class="overlay-gal">
                    <div class="info">
                        <h3 class="caption">
                            <a href="#"> Outdoors </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="explore">
        <div class="explore-cont">
            <h1>"The world is changed by your example, not by your opinion. Start recycling!"</h1>
            <p>Remember, every small act of recycling contributes to a more sustainable future. Let's make recycling a part of our daily lives!</p>
            <a href="about.html" class="ctn">Learn More</a>
        </div>
    </section>

    <!--Split Screen Parallax-->
    <section class="services">
        <div class="services-title" id="about">
            <h2>Our Services</h2>
        </div>
        <div class="scroll">
            <div>
                <h2>Pick Up and Delivery</h2>
            </div>
            <div>
                <h2>Multiple Payment Methods</h2>
            </div>
            <div>
                <h2>Furniture Installation</h2>
            </div>
            <div>
                <h2>Customer Service</h2>
            </div>
            <div>
                <h2>Loyalty Points</h2>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <div><?php
            include('footer.php'); ?></div>
</body>

</html>