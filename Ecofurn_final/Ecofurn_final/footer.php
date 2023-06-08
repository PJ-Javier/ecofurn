<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body{
            background-color: inherit;
            bottom: 0;
        }
    .footer-section ul {
        list-style-type: none;
        padding: 0 50px;
        margin: 0px;
        padding: 0px;
    }

    .footer-section li {
        float: right;

    }

    .footer-section li a {
        display: block;
        text-align: center;
        padding: 5px;
        text-decoration: none;
        color: inherit;
    }

    .footer-section li a:hover {
        background-color: #3c3c39;
    }

    .footer-section {
        background: #333a2b;
        position: relative;
    }

    .footer-cta {
        border-bottom: 1px solid #ece5d5;
    }

    .single-cta i {
        color: #ece5d5;
        font-size: 30px;
        float: left;
        margin-top: 8px;
    }

    .cta-text {
        padding-left: 15px;
        display: inline-block;
    }

    .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
    }

    .cta-text span {
        color: #ece5d5;
        font-size: 15px;
    }

    .footer-content {
        position: relative;
        z-index: 2;
    }

    .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
    }

    .footer-logo {
        margin-bottom: 30px;
    }

    .footer-logo img {
        max-width: 200px;
    }

    .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
        color: #ece5d5;
        line-height: 28px;
    }

    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
    }

    .facebook-bg {
        background: #3B5998;
    }

    .twitter-bg {
        background: #55ACEE;
    }

    .instagram-bg {
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
    }

    .whatsapp-bg {
        background: black;
    }

    .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
    }

    .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ece5d5;
    }

    .footer-widget ul li {
        display: inline-block;
        width: 50%;
        margin-bottom: 12px;
    }

    .footer-widget ul li a:hover {
        color: #ada797;
    }

    .footer-widget ul li a {
        color: #ece5d5;
        text-transform: capitalize;
    }

    .copyright-area {
        background: #202020;
        padding: 25px 0;
    }

    .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
    }
    </style>
</head>

<body>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Al-Dhait South, Ras Al Khaimah UAE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>05012345767</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>ci.t3am@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Sustainable and Ecofriendly furniture made from recycled materials.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="https://www.beeahgroup.com">Our Partner Beah</a></li>
                                <li><a href="https://www.moccae.gov.ae/en/home.aspx">ministry of enviornment</a></li>
                                <li><a href="https://dubairecycles.ae/en/Pages/default.aspx">Dubai Recyles</a></li>
                                <li><a href="https://u.ae/en/information-and-services/environment-and-energy">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Follow us on our Socials</h3>
                            </div>
                            <div class="d-none d-lg-block text-right">
                                <div class="footer-social-icon">
                                    <a href="https://www.facebook.com/profile.php?id=100090880724144&mibextid=ZbWKwL"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                    <a href="https://twitter.com/Ecofurn_"><i class="fab fa-twitter twitter-bg"></i></a>
                                    <a href="https://www.instagram.com/ecofurn.ae/"><i class="fab fa-instagram instagram-bg"></i></a>
                                    <a href="https://www.tiktok.com/@ecofurn_?_t=8cZAmWm7Wug&_r=1"><i class="fab fa-tiktok whatsapp-bg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class=" text-center text-lg-left">
                    <div class="copyright-text">
                        <p>© ECOFURN Inc. 2023</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </footer>
</body>

</html>