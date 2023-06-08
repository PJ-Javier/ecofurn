<?php ini_set('display_errors', 0); ?>

<?php

include('connection/connect.php');
session_start();
    
        $user_id = $_SESSION['user_id'];

$select_user = mysqli_query($con, "SELECT * FROM `userid` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
function login(){
    global $user_id,  $fetch_user;
    $name = $fetch_user['name'];
    if(!isset($user_id)){
        echo"<li><a class='dropdown-item' href='login.php'>Log in</a></li>
        <li><a class='dropdown-item' href='signup.php'>Sign up</a></li>";
    }
    else{
        echo " <li class='dropdown-item nonhover'>$name</li> 
        <li><a class='dropdown-item' href='home.php?logout=<?php echo $user_id; ?>' onclick='return confirm('are your sure you want to logout?');'>Log Out</a></li>";
        
    }

}

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:home.php');
 };
//  function buy(){
//     global $con;
//     global $fetch_user;
//     //condition to check isset or not
    
//      $product_id=$_GET['product_buy'];
//      $select_query="Select * from `products` where product_id=$product_id";
//      $result_query=mysqli_query($con,$select_query);
//      while($row=mysqli_fetch_assoc($result_query)){

//         $prodname = $row['product_title'];
//         $priceprod = $row['product_price'];
//         $product_title=$row['product_title'];
//         $image = $row['product_image1'];
//         $quantity = 1;
//          $insert_products="insert into `cart` (name,price,image,quantity)
//              values ('$product_title','$priceprod','$image','$quantity')";
//              $result_query=mysqli_query($con,$insert_products);
//              if($result_query){
//                  echo"<script>alert('Successfully Added')</script>";
//              }

//      }
     
//   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Headland+One&display=swap');

    * {
        font-family: 'Headland One', serif;
    }
    body{
        background-color: inherit;
    }
    .navbar {
        background-color: #41452B;
        color: #ECE5D5;
        z-index: 9999;
    }
    .popicon:hover{
        transition: .4s ease-in;
        transform: scale(1.2);
    }
    /* change the link color */
    .nav-link {
        color: inherit;
    }
    .nonhover:hover{
        background-color: #41452B;
        color: #ECE5D5;
    }
    .navbar-toggler,
    .navbar-toggler-icon {
        color: #ECE5D5;
        background-color: #ECE5D5;
    }

    .nav-item{
        color: #ECE5D5;
    }
    /* change the color of active or hovered links */
    .nav-item .active .nav-link,
    .nav-item:focus .nav-link,
    .nav-item:hover .nav-link {
        color: #ECE5D5;
    }

    .nav-item:hover {
        transition: .4s ease-in;
        transform: scale(1.02);
        box-shadow: 1px 11px 6px -6px rgba(0, 0, 0, 0.45),
            0px 25px 20px -20px rgba(0, 0, 0, 0.45);
    }

    /* for dropdowns only */
    .dropdown-menu {
        background-color: #41452B;
       
    }

    /* dropdown item text color */
    .dropdown-item {
        color: #ECE5D5;
    }


    .textinput,
    textarea {
        background: #ECE5D5;
        border: none;
    }

    @media screen and (max-width:991px) {
        .collapse {
            display: Flex;
            flex-direction: column-reverse;
            text-align: left;
        }

        .collapse>form,
        .navbar-nav {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <div>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- HAMBURGER ICON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- LOGO GOES HERE -->
            <a class="navbar-brand" href="home.php">
                <img class="popicon" style="height: 50px;" src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" alt="">
            </a>
            <!-- Area -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-4 mb-lg-0 ">
                    <!-- drop down item for products -->
                    <li class="nav-item px-2 dropdown">
                        <!-- remove dropdown toggle to remove arrow -->
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="bedroom_products.php">Bedroom</a></li>
                            <li><a class="dropdown-item" href="children_products.php">Children's Room</a></li>
                            <li><a class="dropdown-item" href="livingroom_products.php">Living Room</a></li>
                            <li><a class="dropdown-item" href="dining_products.php">Dining & Kitchen</a></li>
                            <li><a class="dropdown-item" href="office_products.php">Office</a></li>
                            <li><a class="dropdown-item" href="outdoor_products.php">Outdoors</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2 px-3">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="contact.php">Contacts</a>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Login -->
                            <?php login(); 
                            ?>
                            <!-- <li><a class="dropdown-item" href="login.php">Log in</a></li>
                            <li><a class="dropdown-item" href="signup.php">Sign up</a></li> -->
                            <!-- <li><a class="dropdown-item" href="home.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');">Log Out</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="cart.php">
                            <i class="fa fa fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="search_product.php" method="get">
                    <input class="form-control me-2 textinput" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <button class="btn btn-outline-light" type="submit" name="search_data_product"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
    </div>
</body>

</html>