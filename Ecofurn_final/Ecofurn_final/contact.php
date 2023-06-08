<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us || Ecofurn</title>
    <link rel="stylesheet" href="contact.css?<?php echo time(); ?>">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Nav -->
    <div><?php
            include('nav.php'); ?></div>
    <section>
        <div class="container">
            <div class="contactInfo">
                <div>
                    <h2>Get in Touch!</h2>
                    <ul class="info">
                        <li>
                            <span><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918434/ecofurn/image/location_umrflp.png"></span>
                            <span> 1234 Street<br>
                                Ras al Khaimah, UAE </span>
                        </li>
                        <li>
                            <span><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918435/ecofurn/image/mail_u7qt3s.png"></span>
                            <span>ci.t3am@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684918435/ecofurn/image/phone_kyyoay.png"></span>
                            <span>+971 53 059 2064</span>
                        </li>
                    </ul>
                </div>
                <ul class="sci">
                    <li><a href="#"><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684935697/ecofurn/products/1_owp5qv.png"></a></li>
                    <li><a href="#"><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684935697/ecofurn/products/2_vwtfgb.png"></a></li>
                    <li><a href="#"><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684935697/ecofurn/products/3_ydqzb1.png"></a></li>
                    <li><a href="#"><img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684935697/ecofurn/products/4_hascfc.png"></a></li>
                </ul>
            </div>
            <div class="inquiry">
                <h2>SEND A MESSAGE!</h2>
                <p>For any inquiries, please contact us and we will gladly assist.</p>
                <form accept-charset="UTF-8" action="https://getform.io/f/744c2e9c-55b4-4635-83f7-faa18faba50c" method="POST" enctype="multipart/form-data" target="_blank" id="wpform">
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="fname" required="required">
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="lname" required="required">
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="number" name="number" required="required">
                            <span>Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="MESSAGE" required="required"></textarea>
                            <span>WRITE YOUR MESSAGE HERE!</span>
                        </div>
                        <div style="position: absolute; left: 0px; bottom: 86px;">
                            <label>Upload document:</label>
                            <input type="file" name="file" required="required">
                            <input type="hidden" name="utf8" value="✓">
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>