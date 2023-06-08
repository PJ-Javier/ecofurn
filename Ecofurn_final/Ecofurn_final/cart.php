<?php

    include('connection/connect.php');
    include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOFURN | CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon"
        href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    .cart-section {
        background-color: #ece5d5;
    }

    .cart-section>i,
    .cart-section>.btn-link,
    .cart-section .btn {
        color: #41452B;
    }
    </style>
</head>

<body>
    <!-- Nav -->
    <div><?php 
 include('nav.php');?></div>
    <?php
 function cartprod(){
    global $con;
    global $user_id;
  
      $select_query="Select * from `cart` where user_id = $user_id";
      $result_query=mysqli_query($con,$select_query);
      
      while($row=mysqli_fetch_assoc($result_query)){
        $name=$row['name'];
        $price=$row['price'];
        $image=$row['image'];
        $quantity=$row['quantity'];
        
        echo "<div class='card rounded-3 mb-4'>
        <div class'card-body p-4'>
            <div class='row d-flex justify-content-between align-items-center'>
                <div class='col-md-2 col-lg-2 col-xl-2'>
                    <img src='$image'
                        class='img-fluid rounded-3' alt='Cotton T-shirt'>
                </div>
                <div class='col-md-3 col-lg-3 col-xl-3'>
                    <p class='lead fw-normal mb-2'>$name</p>
                </div>
                <div class='col-md-3 col-lg-3 col-xl-2 d-flex'>
                    <button class='btn btn-link px-2'
                        onclick='this.parentNode.querySelector('input[type=number]').stepDown()'>
                        <i class='fas fa-minus'></i>
                    </button>

                    <input id='form1' min='0' name='quantity' value='$quantity' type='number'
                        class='form-control form-control-sm' />

                    <button class='btn btn-link px-2'
                        onclick='this.parentNode.querySelector('input[type=number]').stepUp()'>
                        <i class='fas fa-plus'></i>
                    </button>
                </div>
                <div class='col-md-3 col-lg-2 col-xl-2 offset-lg-1'>
                    <h5 class='mb-0'>$price AED</h5>
                </div>
            </div>
        </div>
    </div>";
      }
  }
 ?>
    <section class="h-100 cart-section">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="fw-normal mb-0 text-black">CHECKOUT</h3>
                        <!-- SORT -->
                    </div>
                    <!--  ITEM CARD -->
                    <?php
                    cartprod();
                    ?>
                    <!-- <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="images/aguedo (1).jpg"
                                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Basic T-shirt</p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="1" type="number"
                                        class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">$499.00</h5>
                                </div>
                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                    <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->



                    <!-- Shipping -->
                    <div class="card mb-4">
                        <div class="card-body p-4 d-flex flex-row">
                            <div class="form-outline flex-fill">
                                <p>Subtotal: <?php subtotal();?> AED</p>
                                <p>Shipping: 10 AED</p>
                                <p>Total: <?php total();?> AED</p>
                            </div>
                        </div>
                        <!-- checkout button -->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <a href="checkout.php">
                                        <button type="button"
                                            class="btn btn-block justify-content-center align-self-center btn-lg"
                                            style="background-color:#41452B; color:#ece5d5;">Proceed to Pay</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <!-- footer -->
    <div><?php 
 include('footer.php');?></div>
</body>

</html>