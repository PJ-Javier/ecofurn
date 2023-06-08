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
    <title>Document</title>
    
    <!-- Icon -->
<link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" type="image/x-icon">
    <!--CSS File-->
        <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
        <link rel="stylesheet" href="footer.css?<?php echo time(); ?>">
      
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <!--Font awsome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Js Link For Scroll Anim -->
    <script  src="scroll.js" defer></script>
</head>
<body>

  <!-- Nav -->
  <div><?php 
 include('nav.php');?></div>
 <?php    //add to cart
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
  }?>
  <!-- Nav End -->
  <div class="productback">
    <!-- Product Slider First Child-->
    <div class="container-fluid ">
      <div class="row">
        <div class="col-md slidecolor hidden">
          <?php 
            view_details_img();
          ?>
        </div>
        <!-- Text Info -->
        <div class="col-md texts hidden">
          <?php
            view_details();
          ?>
        </div>
      </div>
    </div>

    <!-- Material Description -->
    <div>
      <section class="hidden stick_card desc_center" style="background-color: #3c3c39; color:#ece5d5;">
        <div class="container">
          <div class="row">
            <?php
            mat_desc();
            ?>
            <!-- <div class="col-md">
              <h1 style="font-size:3.5vw;">MDF Board</h1>
              <h1 style="font-size:1.4vw; padding-top:100px; text-align: justify; letter-spacing: 0.8px;"> MDF is a popular material known for its versatility and affordability, but it is often discarded after use. Instead of letting this valuable resource go to waste, we actively seek out sources of recycled MDF. This includes collecting offcuts, unused pieces, or even entire furniture items made from MDF that would otherwise be destined for disposal.</h1>
            </div>
            <div class="col-md">
              <img src="images/rec6.jpg" class="img-fluid" alt="" style="border-radius:10px;">
            </div> -->
          </div>
        </div>
      </section>
      <section class="stick_card" style="background-color: #41452b ; color:#ece5d5;">
        <h1 style='font-size:3.5vw; padding-top:70px;padding-left:40px;padding-bottom:20px; font-weight: bold'>Often Bought With:</h1>
        <div class="desc_center">
          <?php often_bought()?>
        </div>
      </section>
      
      <?php
      //condition to check isset or not
      $product_idz=$_GET['product_id'];
      $select_query="Select * from `products` where product_id=$product_idz";
      $result_query=mysqli_query($con,$select_query);
      $row=mysqli_fetch_assoc($result_query);
      $sel_room = $row['room_id'];

      if ($sel_room<=5){
        echo"<section class='hidden stick_card' style='background-color: #ece5d5 ; color:#3c3c39;'>";
        echo" <h1 style='font-size:3.5vw; padding-top:100px;padding-left:40px;padding-bottom:60px;font-weight: bold'>Similar Product:</h1>";
        echo"<div class='desc_center'>";
          similar_product();
          echo"</div>";
          echo"</section>";
          echo "<div style='height: 100px; background-color: #ece5d5 class='hidden'></div>";
      }
      else{
        echo "<div style='height: 100px; background-color: #ada797 class='hidden'></div>";
      }
      ?>
    </div>
    <!-- Footer Child -->
      <?php
        include ('footer.php');
      ?>
  <!-- End of body -->
  </div>




  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
  <script>
 // Observer Script
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        console.log(entry)
          if(entry.isIntersecting){
            entry.target.classList.add('show');
          } else{
            entry.target.classList.remove('show');
          }
      });
    });





      const hiddenElements = document.querySelectorAll('.hidden');
      hiddenElements.forEach((el) => observer.observe(el));</script>
</body>
</html>