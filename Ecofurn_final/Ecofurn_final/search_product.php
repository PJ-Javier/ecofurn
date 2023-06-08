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
<title>EcoFurn</title>
<!-- Icon -->
<link rel="shortcut icon" href="images/eco_2.png" type="image/x-icon">
    <!--CSS File-->
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="footer.css?<?php echo time(); ?>">
<!--Bootstrap CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
<!--Font awsome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Nav -->
  <!-- Nav -->
<div><?php 
 include('nav.php');?></div>
  <!-- Nav End -->
<!-- Room Name -->
<div class="container-fluid backcolor_product">
<div class="row">
<div class="col-md-12 text-center">
  <h3 class="animate-charcter"style="margin-bottom: 100px;">Search</h3>
</div>
</div>
</div>
<!-- Category Container -->
<div class="container-fluid shadow_product"></div>
<!-- Product Container -->
<div class="container-fluid top_prod">
<div class="row justify-content-center">
<?php

search_product();
//add to cart
if(isset($_GET['product_buy'])){
  $product_id=$_GET['product_buy'];
  
  $select_query="Select * from `products` where product_id=$product_id";
  $result_query=mysqli_query($con,$select_query);
  $row=mysqli_fetch_assoc($result_query);
    $prodname = $row['product_title'];
    $user = $user_id;
    $price = $row['product_price'];
    $image =$row['product_image1'];
    $quantity = 1;
    $insert_products="insert into `cart`(user_id,name,price,image,quantity) values ('$user','$prodname','$price','$image', '$quantity' )";
    $result_query=mysqli_query($con,$insert_products);
          if($result_query){
              echo"<script>alert('Successfully inserted the products')</script>";
          }
  }


?>
</div>
</div>
<!-- Footer Child -->
<?php
include ('footer.php');
?>
</body>
</html>