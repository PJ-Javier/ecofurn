<?php

    include('connection/connect.php');
    include('functions/common_function.php');
    session_start();
    $user_id = $_SESSION['user_id'];
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            background-color: #ece5d5;
            font-family: "HeadlandOne", serif;
            color: #41452B;
        }

        .container {
            height: 100vh;
        }

        .card {
            border: none;
        }

        .form-control {
            border-bottom: 2px solid #ada797 !important;
            border: none;
        }

        .form-control:focus {
            color: #ada797;
            border-color: #ada797;
            outline: 0;
            box-shadow: none;
            border-radius: 0px;
            border-bottom: 2px solid #41452b !important;
        }

        .inputbox {
            position: relative;
            margin-bottom: 20px;
            width: 100%
        }

        .inputbox span {
            position: absolute;
            top: 7px;
            left: 11px;
            transition: 0.5s
        }

        .inputbox i {
            position: absolute;
            top: 13px;
            right: 8px;
            transition: 0.5s;
            color: #41452B;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .inputbox input:focus~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }

        .inputbox input:valid~span {
            transform: translateX(-0px) translateY(-15px);
            font-size: 12px
        }

        .card-pay-bg {
            background-color: #333a2b;
        }

        .hightlight {
            background-color: #ece5d5;
            color: #3c3c39;
            padding: 10px;
            border-radius: 10px;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Confirm Order and pay</h2>
            <span>Enter your details below.</span>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card p-3">
                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"><input type="text" name="name" class="form-control" autocomplete="name" required="required" /> <span>Name on card</span></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 mr-2"><input type="text" name="name" autocomplete="cc-number" class="form-control" required="required" /> <i class="fa fa-credit-card"></i> <span>Card Number</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required" /> <span>Expiry</span></div>

                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required" /> <span>CVV</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 mb-4">
                        <h6 class="text-uppercase">Billing Address</h6>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" autocomplete="street-address" required="required" /> <span>Street Address</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required" /> <span>City</span></div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" autocomplete="address-line1" required="required" /> <span>State/Province</span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inputbox mt-3 mr-2"><input type="text" name="name" class="form-control" required="required" /> <span>Zip code</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 mb-4 d-flex justify-content-between">
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button type="button" class="btn btn-block justify-content-center align-self-center btn-lg" style="background-color:#41452B; color:#ece5d5;">Proceed to Pay</button>
                        </div>
                        <div class="d-grid gap-2 my-2">
                            <a href="cart.php">
                            <button type="button" class="btn btn-block justify-content-center align-self-center btn-lg" style="background-color:#41452B; color:#ece5d5;">Return to Previous</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-pay-bg p-3 text-white mb-3">
                    <span>Your Total is</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0"><?php total();?> AED</h1>
                    </div>

                    <div class="hightlight">
                        <span>100% Ecofriendly and Sustainable.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>