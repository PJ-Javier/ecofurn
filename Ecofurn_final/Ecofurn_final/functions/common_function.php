<?php

// include connection
include('./connection/connect.php');

function getproducts(){
    global $con;
    global $room;
    //condition to check isset or not
    if(!isset($_GET['category'])){

    $select_query="Select * from `products` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    
    $select_rooms="Select * from `rooms`";
    $result_rooms=mysqli_query($con,$select_rooms);
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $room_id=$row['room_id'];

  if($room==$room_id){
        echo " <div class='col-md-4'>
        <div class='card cardprod'>
            <a href='product_details.php?product_id=$product_id' class='view'>
            <img class='card-img-top' src='$product_image1' alt='$product_title'>
            <div class='card-body body-prod'>
                <h4 class='card-title'>$product_title</h4>
                <p class='card-text'>$category_id Product</p>
                <h5 class='card-text'>$product_price AED</h5> 
                <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
            </div>
            </a>
        </div>
        </div>";
    }
        }
    }   
    }
    
    function getoutproducts(){
      global $con;
      global $room;
      //condition to check isset or not
      if(!isset($_GET['category'])){
  
      $select_query="Select * from `products` order by rand()";
      $result_query=mysqli_query($con,$select_query);
  
      $select_rooms="Select * from `rooms`";
      $result_rooms=mysqli_query($con,$select_rooms);
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $room_id=$row['room_id'];
  
    if($room==$room_id){
          echo " <div class='col-md-4'>
          <div class='card cardprod'>
              <a href='product_details.php?product_id=$product_id' class='view'>
              <img class='card-img-top' src='$product_image1' alt='$product_title'>
              <div class='card-body body-prod'>
                  <h4 class='card-title'>$product_title</h4>
                  <p class='card-text'>Outdoor Product</p>
                  <h5 class='card-text'>$product_price AED</h5> 
                  <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a>
              </div>
              </a>
          </div>
          </div>";
      }
          }
      }
      }
    function get_unique_categories(){
        global $con;
        global $room;
        //condition to check isset or not
        $lopag = 0;
        if(isset($_GET['category'])){
          $category_id=$_GET['category'];
        $select_query="Select * from `products` where category_num=$category_id order by rand()";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        
        if($num_of_rows==0){
          echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
        }
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_image1=$row['product_image1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $room_id=$row['room_id'];
      
        if($room==$room && $room==$room_id){
              echo " <div class='col-md-4'>
              <div class='card cardprod '>
                  <a href='product_details.php?product_id=$product_id' class='view'>
                  <img class='card-img-top' src='$product_image1' alt='$product_title'>
                  <div class='card-body body-prod'>
                      <h4 class='card-title'>$product_title</h4>
                      <p class='card-text'>$category_id Product</p>
                      <h5 class='card-text'>$product_price AED</h5> 
                      <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a>
                  </div>
                  </a>
              </div>
              </div>";
          }
          //  else {
          //    $lopag++;
          //    if ($lopag == 1){
          //    echo "<h2 class='text-center text-danger'>No stock for this category</h2>";
          //    }
          //  }
        }
      }
     }

    function getcategories_bed(){
        global $con;
        $select_categories="Select * from `categories`";
          $result_categories=mysqli_query($con,$select_categories);
          while($row_data=mysqli_fetch_assoc($result_categories)){
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<div class='category'>
            <img src='images/$category_title.jpg' alt=''>
            <a href='bedroom_products.php?category=$category_id'>
            <div class='category-body'>
                <h4>$category_title</h4>
            </div>
            </a></div>";
          }
    }
    function getcategories_liv(){
        global $con;
        $select_categories="Select * from `categories`";
          $result_categories=mysqli_query($con,$select_categories);
          while($row_data=mysqli_fetch_assoc($result_categories)){
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<div class='category'>
            <img src='images/$category_title.jpg' alt=''>
            <a href='livingroom_products.php?category=$category_id'>
            <div class='category-body'>
                <h4>$category_title</h4>
            </div>
            </a></div>";
          }
    }
    function getcategories_din(){
      global $con;
      $select_categories="Select * from `categories`";
        $result_categories=mysqli_query($con,$select_categories);
        while($row_data=mysqli_fetch_assoc($result_categories)){
          $category_title = $row_data['category_title'];
          $category_id = $row_data['category_id'];
          echo "<div class='category'>
          <img src='images/$category_title.jpg' alt=''>
          <a href='dining_products.php?category=$category_id'>
          <div class='category-body'>
              <h4>$category_title</h4>
          </div>
          </a></div>";
        }
  }
  function getcategories_off(){
    global $con;
    $select_categories="Select * from `categories`";
      $result_categories=mysqli_query($con,$select_categories);
      while($row_data=mysqli_fetch_assoc($result_categories)){
        $category_title = $row_data['category_title'];
        $category_id = $row_data['category_id'];
        echo "<div class='category'>
        <img src='images/$category_title.jpg' alt=''>
        <a href='office_products.php?category=$category_id'>
        <div class='category-body'>
            <h4>$category_title</h4>
        </div>
        </a></div>";
      }
}
function getcategories_chi(){
  global $con;
  $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title = $row_data['category_title'];
      $category_id = $row_data['category_id'];
      echo "<div class='category'>
      <img src='images/$category_title.jpg' alt=''>
      <a href='children_products.php?category=$category_id'>
      <div class='category-body'>
          <h4>$category_title</h4>
      </div>
      </a></div>";
    }
}
     function view_details_img(){
       global $con;
         //condition to check isset or not
          $product_id=$_GET['product_id'];
          $select_query="Select * from `products` where product_id=$product_id";
          $result_query=mysqli_query($con,$select_query);
          while($row=mysqli_fetch_assoc($result_query)){
            $product_image1=$row['product_image1'];
            $product_image2=$row['product_image2'];
            $product_image3=$row['product_image3'];
            if (!$product_image3 == ""){
            echo "<swiper-container effect='cube'grab-cursor='true'style='--swiper-navigation-color: #fff; --swiper-pagination-color: #fff' class='mySwiper '
            thumbs-swiper='.mySwiper2' space-between='10' navigation='false'cube-effect-shadow='true'
            cube-effect-slide-shadows='true' cube-effect-shadow-offset='20' cube-effect-shadow-scale='0.94' autoplay-delay='3000' autoplay-disable-on-interaction='false'>
            <swiper-slide>
              <img src='$product_image1' />
            </swiper-slide>
            <swiper-slide>
              <img src='$product_image2' />
            </swiper-slide>
            <swiper-slide>
              <img src='$product_image3' />
            </swiper-slide>
          </swiper-container>
        
          <swiper-container class='mySwiper2 hov img-fluid' space-between='55' slides-per-view='3' free-mode='true'
            watch-slides-progress='true'>
            <swiper-slide>
              <img src='$product_image1' />
            </swiper-slide>
            <swiper-slide>
              <img src='$product_image2' />
            </swiper-slide>
            <swiper-slide>
              <img src='$product_image3' />
            </swiper-slide>
          </swiper-container>";
            }
           else if ($product_image2 == "" && $product_image3 == ""){
            echo "<swiper-container effect='cube'grab-cursor='true'style='--swiper-navigation-color: #fff; margin-bottom: 50px; --swiper-pagination-color: #fff;' class='mySwiper'
            thumbs-swiper='.mySwiper2' space-between='10' navigation='false'cube-effect-shadow='true'
            cube-effect-slide-shadows='true' cube-effect-shadow-offset='20' cube-effect-shadow-scale='0.94' autoplay-delay='3000' autoplay-disable-on-interaction='false'>
            <swiper-slide>
              <img src='$product_image1' />
            </swiper-slide>

        
          ";
              }
            else{
              echo "<swiper-container effect='cube'grab-cursor='true'style='--swiper-navigation-color: #fff; --swiper-pagination-color: #fff' class='mySwiper'
              thumbs-swiper='.mySwiper2' space-between='10' navigation='false'cube-effect-shadow='true'
              cube-effect-slide-shadows='true' cube-effect-shadow-offset='20' cube-effect-shadow-scale='0.94' autoplay-delay='3000' autoplay-disable-on-interaction='false'>
              <swiper-slide>
                <img src='$product_image1' />
              </swiper-slide>
              <swiper-slide>
                <img src='$product_image2' />
              </swiper-slide>
            </swiper-container>
          
            <swiper-container class='mySwiper2 hov' space-between='55' slides-per-view='2' free-mode='true'
              watch-slides-progress='true'>
              <swiper-slide>
                <img src='$product_image1' />
              </swiper-slide>
              <swiper-slide>
                <img src='$product_image2' />
              </swiper-slide>
            </swiper-container>";
            }
         }
        }

    function view_details(){
      global $con;
        //condition to check isset or not

         $product_id=$_GET['product_id'];
         $select_query="Select * from `products` where product_id=$product_id";
         $result_query=mysqli_query($con,$select_query);
         while($row=mysqli_fetch_assoc($result_query)){
          $product_title=$row['product_title'];
          $category_id = $row['category_id'];
          $product_material = $row['product_material'];
          $product_dimensions = $row['product_dimensions'];
          $product_size = $row['product_size'];
          $product_price=$row['product_price'];
          $room_id=$row['room_id'];
          if ($room_id == 6){
            echo "<div class='card-body texts'>
            <h1 class='card-title animate-charctertwo' style='margin-top: 50px;'>$product_title</h1>
              <h2 class=' card-title ' style='margin-top: 20px;'>Outdoor</h2>
              <h5 class='card-title' style='margin-top: 70px;'> <i class='fa-solid fa-layer-group' style='color: #3c3c39;'></i>  Material: $product_material</h5>
              <h5 class='card-title' style='margin-top: 20px;'><i class='fa-brands fa-codepen' style='color: #3c3c39;'></i>   Dimension: $product_dimensions</h5>
              <h1 class='card-title' style='margin-top: 70px; margin-bottom: 30px;'>$product_price AED</h1>
              <a class='prod_but cart2' href='home.php?product_buy=$product_id'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i>  ADD TO CART</a>
              </div>";
          }
          else{
            if ($product_size == " "){
           echo "<div class='card-body texts'>
           <h1 class='card-title animate-charctertwo' style='margin-top: 50px;'>$product_title</h1>
             <h2 class=' card-title ' style='margin-top: 20px;'>$category_id</h2>
             <h5 class='card-title' style='margin-top: 70px;'> <i class='fa-solid fa-layer-group' style='color: #3c3c39;'></i>  Material: $product_material</h5>
             <h5 class='card-title' style='margin-top: 20px;'><i class='fa-brands fa-codepen' style='color: #3c3c39;'></i>   Dimension: $product_dimensions</h5>
             <h1 class='card-title' style='margin-top: 70px; margin-bottom: 40px;'>$product_price AED</h1>
             <a class='prod_but cart2' href='home.php?product_buy=$product_id'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i>  ADD TO CART</a>
             </div>";
           }
            else{
             echo "<div class='card-body texts'>
             <h1 class='card-title animate-charctertwo' style='margin-top: 20px;'>$product_title</h1>
               <h2 class=' card-title ' style='margin-top: 20px;'>$category_id</h2>
               <h5 class='card-title' style='margin-top: 50px;'> <i class='fa-solid fa-layer-group' style='color: #3c3c39;'></i>  Material: $product_material</h5>
               <h5 class='card-title' style='margin-top: 20px;'><i class='fa-brands fa-codepen' style='color: #3c3c39;'></i>   Dimension: $product_dimensions</h5>
               <h5 class='card-title' style='margin-top: 20px;'><i class='fa-solid fa-ruler-combined' style='color: #3c3c39;'></i>  Size: $product_size</h5>
               <h1 class='card-title' style='margin-top: 100px; margin-bottom: 50px;'>$product_price AED</h1>
               <a class='prod_but cart2' href='home.php?product_buy=$product_id'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i>  ADD TO CART</a>
               </div>";
            }
          }
        }
       }


function often_bought(){
  global $con;
  //condition to check isset or not

  $product_idz=$_GET['product_id'];
  $select_query="Select * from `products` where product_id=$product_idz";
  $result_query=mysqli_query($con,$select_query);
  $row=mysqli_fetch_assoc($result_query);
  $sel_room = $row['room_id'];
  $sel_category = $row['category_num'];
  if($sel_room <=5){
    $select_room="Select * from `products` where room_id=$sel_room order by rand()";
  $result_room=mysqli_query($con,$select_room);
  $x=1;
  while($row_room=mysqli_fetch_assoc($result_room)){
    $product_id=$row_room['product_id'];
      $product_title=$row_room['product_title'];
      $product_image1=$row_room['product_image1'];
      $product_price=$row_room['product_price'];
      $category_id=$row_room['category_id'];
      $category_num=$row_room['category_num'];
      $room_id=$row_room['room_id'];
    if($product_id == $product_idz){
    }
    else{
      if($sel_category == $category_num){
      }
      else{
        if ($x <= 3){
          echo " <div class='col-md-4 hidden hid$x'>
           <div class='card cardprod'>
              <a href='product_details.php?product_id=$product_id' class='view'>
               <img class='card-img-top' src='$product_image1' alt='$product_title'>
               <div class='card-body body-prod'>
                 <h4 class='card-title'>$product_title</h4>
                 <p class='card-text'>$category_id Product</p>
                 <h5 class='card-text'>$product_price AED</h5>
                   <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
              </div>
              </a>
           </div>
           </div>";
           $x++;
        }
      }
    }
    
  }
  }
if ($sel_room == 6){
  $select_room="Select * from `products` where room_id=$sel_room order by rand()";
  $result_room=mysqli_query($con,$select_room);
  $x=1;
  while($row_room=mysqli_fetch_assoc($result_room)){
    $product_id=$row_room['product_id'];
      $product_title=$row_room['product_title'];
      $product_image1=$row_room['product_image1'];
      $product_price=$row_room['product_price'];
      $category_id=$row_room['category_id'];
      $room_id=$row_room['room_id'];
    if($product_id == $product_idz){
    }
    else{
      if ($x <= 3){
        echo " <div class='col-md-4 hidden hid$x'>
         <div class='card cardprod'>
            <a href='product_details.php?product_id=$product_id' class='view'>
             <img class='card-img-top' src='$product_image1' alt='$product_title'>
             <div class='card-body body-prod'>
               <h4 class='card-title'>$product_title</h4>
               <p class='card-text'>Outdoor Product</p>
               <h5 class='card-text'>$product_price AED</h5>
                 <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
            </div>
            </a>
         </div>
         </div>";
         $x++;
      }
    }
    
  }
}             
}

function similar_product(){
  global $con;
  //condition to check isset or not

  $product_idz=$_GET['product_id'];
  $select_query="Select * from `products` where product_id=$product_idz";
  $result_query=mysqli_query($con,$select_query);
  $row=mysqli_fetch_assoc($result_query);
  $sel_cat = $row['category_num'];
  $sel_room = $row['room_id'];
  $select_cat="Select * from `products` where category_num=$sel_cat order by rand()";
  $result_cat=mysqli_query($con,$select_cat);
  $x=1;
  while($row_room=mysqli_fetch_assoc($result_cat)){
    $product_id=$row_room['product_id'];
      $product_title=$row_room['product_title'];
      $product_image1=$row_room['product_image1'];
      $product_price=$row_room['product_price'];
      $category_id=$row_room['category_id'];
      $category_num=$row_room['category_num'];
      $room_id=$row_room['room_id'];
      if($product_id == $product_idz or $room_id == 6){
      }
      else{
      if ($x <= 3){
        echo " <div class='col-md-4 hidden hid$x'>
         <div class='card cardprod'>
            <a href='product_details.php?product_id=$product_id' class='view'>
             <img class='card-img-top' src='$product_image1' alt='$product_title'>
             <div class='card-body body-prod'>
               <h4 class='card-title'>$product_title</h4>
               <p class='card-text'>$category_id Product</p>
               <h5 class='card-text'>$product_price AED</h5>
                 <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
            </div>
            </a>
         </div>
         </div>";
         $x++;
      }
    }
    }
    
  }

        
function search_product(){
  global $con;  
  if(isset($_GET['search_data_product'])){
    $search_data_value=$_GET['search_data'];
  $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
  $result_query=mysqli_query($con,$search_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center no_result'>No Result Found</h2>";
  }
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $room_id=$row['room_id'];
//if($room==$room and $category_id==$room){
  if ($room_id==6){
    echo " <div class='col-md-4'>
  <div class='card cardprod'>
      <a href='product_details.php?product_id=$product_id' class='view'>
      <img class='card-img-top' src='$product_image1' alt='$product_title'>
      <div class='card-body body-prod'>
          <h4 class='card-title'>$product_title</h4>
          <p class='card-text'>Outdoor Product</p>
          <h5 class='card-text'>$product_price AED</h5> 
          <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
      </div>
      </a>
  </div>
  </div>";
  }
  else{
    echo " <div class='col-md-4'>
  <div class='card cardprod'>
      <a href='product_details.php?product_id=$product_id' class='view'>
      <img class='card-img-top' src='$product_image1' alt='$product_title'>
      <div class='card-body body-prod'>
          <h4 class='card-title'>$product_title</h4>
          <p class='card-text'>$category_id Product</p>
          <h5 class='card-text'>$product_price AED</h5> 
          <a href='?product_buy=$product_id'class='btn float-end cart'><i class='fa-solid fa-cart-plus' style='color: #ece5d5;'></i></a> 
      </div>
      </a>
  </div>
  </div>";
  }
  }
}
}
  






function subtotal(){
  global $con;
  global $user_id;

    $select_query="Select * from `cart` where user_id = $user_id";
    $result_query=mysqli_query($con,$select_query);
    
    $money = 0;
    while($row=mysqli_fetch_assoc($result_query)){
  
      $price=$row['price'];
      
      $money += $price;

  
    }
    echo "$money";
  }

  function total(){
    global $con;
    global $user_id;
  
      $select_query="Select * from `cart` where user_id = $user_id";
      $result_query=mysqli_query($con,$select_query);
      
      $money = 0;
      while($row=mysqli_fetch_assoc($result_query)){
    
        $price=$row['price'];
        
        $money += $price;
        
    
      }
      $money +=10;
      echo "$money";
    }





















 // Function To Print Material Description
  function mat_desc(){
    global $con;
    $product_id=$_GET['product_id'];
         $select_query="Select * from `products` where product_id=$product_id";
         $result_query=mysqli_query($con,$select_query);
         while($row=mysqli_fetch_assoc($result_query)){
          $product_material = $row['product_material'];
        
            if($product_material == " Velvet & Wood"){
              echo"<div class='col-md'>
                <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
                <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px; line-height: 40px;' class='text-wrap'> The recycled velvet is skillfully combined with reclaimed or sustainably sourced wood, resulting in furniture that embodies elegance, functionality, and environmental consciousness</h1>
              </div>
              <div class='col-md'>
                <img src='images/rec4.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
              </div>";
            }
            else if ($product_material == " Panel Board"){
              echo"<div class='col-md'>
                <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
                <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled panel boards, such as reclaimed building materials or discarded furniture items, we divert these materials from ending up in landfills. Our skilled craftsmen carefully assess the quality and condition of the recycled panel boards, ensuring they meet our high standards for durability and aesthetics</h1>
              </div>
              <div class='col-md'>
                <img src='images/rec8.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
              </div>";
              }
            else if ($product_material == " Wood & Fabric"){
              echo"<div class='col-md'>
                <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
                <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> we collect recycled fabric from various sources, such as discarded textiles or old upholstery. These fabrics are inspected and sorted, ensuring they are suitable for reuse in our furniture designs. Working closely with our design team, we create unique and stylish furniture pieces that incorporate both recycled wood and fabric</h1>
              </div>
              <div class='col-md'>
                <img src='images/rec1.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
              </div>";
              }
          else if ($product_material == " Leather & Wood"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled leather, such as discarded furniture upholstery or manufacturing scraps, we divert these materials from ending up in landfills. Our skilled craftsmen carefully assess the quality and condition of the recycled leather, ensuring it meets our standards for durability and aesthetics</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec5.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Velvet Fabric & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> we collect recycled metal from various sources, such as old appliances or industrial scraps. These metal pieces undergo a thorough inspection and sorting process to determine their suitability for reuse in our furniture designs</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec7.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " MDF"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> MDF is a popular material known for its versatility and affordability, but it is often discarded after use. Instead of letting this valuable resource go to waste, we actively seek out sources of recycled MDF. This includes collecting offcuts, unused pieces, or even entire furniture items made from MDF that would otherwise be destined for disposal</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec8.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Wood"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled wood, such as reclaimed lumber, old furniture, or discarded building materials, we divert these materials from ending up in landfills. Our skilled artisans carefully assess the quality and condition of the recycled wood, ensuring it meets our standards for durability and aesthetics</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec4.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " MDF & Glass"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> we collect recycled glass from various sources, such as discarded windows, bottles, or glassware. These glass pieces undergo a thorough inspection and sorting process to determine their suitability for reuse in our furniture designs</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec6.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Panel Board & Glass"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled panel board, such as reclaimed building materials or discarded furniture, we divert these materials from ending up in landfills. Our skilled craftsmen carefully assess the quality and condition of the recycled panel board, ensuring it meets our standards for durability and aesthetics</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec5.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " MDF & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px; line-height: 40px;' class='text-wrap'> Working closely with our design team, we create unique and stylish furniture pieces that incorporate both recycled MDF and metal. The recycled MDF serves as a versatile base for our designs, providing stability and structure, while the repurposed metal adds an industrial and contemporary touch, enhancing the overall aesthetic appeal</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec7.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " MDF & Wood"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our design team, we create unique and stylish furniture pieces that incorporate both recycled MDF and wood. The recycled MDF serves as a strong and versatile base, while the repurposed wood adds warmth, natural beauty, and a touch of authenticity to our designs</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec8.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Wood & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our design team, we create unique and stylish furniture pieces that incorporate both recycled wood and metal. The recycled wood brings warmth, texture, and natural beauty to our designs, while the repurposed metal adds an industrial edge and structural integrity</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec4.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Glass & Wood"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our design team, we create unique and stylish furniture pieces that incorporate both recycled glass and wood. The recycled glass adds elegance, transparency, and a touch of sophistication to our designs, while the repurposed wood brings warmth, texture, and natural beauty</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec6.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Marble & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled marble, such as remnants from construction projects or reclaimed materials, we divert these beautiful stones from ending up in landfills. Our skilled craftsmen carefully assess the quality and condition of the recycled marble, ensuring it meets our standards for durability and aesthetics</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec7.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Pu & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly integrate recycled PU and metal. 
              The recycled PU provides a leather-like appearance and durability to our designs, while the repurposed metal adds strength, structure, and an industrial touch.</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec2.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Glass & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create unique and captivating furniture pieces that incorporate both recycled glass and metal. The recycled glass brings transparency, elegance, and a touch of sophistication to our designs, while the repurposed metal adds strength, structure, and a modern industrial aesthetic</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec7.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Fabric & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly blend recycled fabric and metal. The recycled fabric brings texture, color, and a soft touch to our designs, while the repurposed metal adds strength, structure, and an industrial flair</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec1.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Velvet Fabric & Wood"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly integrate recycled velvet fabric and wood. The recycled velvet fabric adds a touch of elegance, texture, and luxurious comfort to our designs, while the repurposed wood brings warmth, natural beauty, and a sense of authenticity</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec1.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Fabric & Pu"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly incorporate recycled fabric and PU. The recycled fabric adds texture, color, and a soft touch to our designs, while the recycled PU provides a leather-like appearance and durability</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec2.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Pu & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly integrate recycled PU and metal. 
              The recycled PU provides a leather-like appearance and durability to our designs, while the repurposed metal adds strength, structure, and an industrial touch.</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec2.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Fabric & Plastic"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly combine recycled fabric and plastic. The recycled fabric adds texture, color, and a soft touch to our designs, while the repurposed plastic brings durability, versatility, and a modern aesthetic</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec3.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled metal, such as industrial scraps or discarded machinery, we divert these materials from ending up in landfills. Our team carefully inspects and selects the recycled metal, ensuring its quality and suitability for our designs</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec7.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Metal & PVC"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;'class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly integrate recycled metal and PVC. The recycled metal adds strength, structure, and an industrial touch to our designs, while the repurposed PVC provides flexibility, versatility, and a modern aesthetic</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec6.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Rattan & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By reusing recycled rattan and metal, we contribute to reducing waste and promoting a circular economy. Choosing our furniture means embracing sustainability while enjoying the exceptional craftsmanship and unique blend of materials</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec5.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Plastic & Metal"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our talented designers, we create furniture pieces that seamlessly integrate recycled plastic and metal. The recycled plastic brings versatility, color, and a modern aesthetic to our designs, while the repurposed metal adds strength, structure, and an industrial touch</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec6.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
          else if ($product_material == " Plastic"){
            echo"<div class='col-md'>
              <h1 style='font-size:3.5vw; background-color:#41452b; border-radius:10px;' class='text-wrap badge'>$product_material</h1>
              <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> By actively seeking out sources of recycled plastic, such as plastic bottles or discarded packaging, we give new life to these materials. Our team carefully sorts and prepares the recycled plastic, ensuring its quality and suitability for our designs</h1>
            </div>
            <div class='col-md'>
              <img src='images/rec3.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
            </div>";
            }
            else if ($product_material == " Rattan & Fabric"){
              echo"<div class='col-md'>
                <h1 style='font-size:3.5vw; background-color:#41452b;'class='text-wrap badge'>$product_material</h1>
                <h1 style='font-size:1.4vw; padding-top:40px; text-align: justify; letter-spacing: 0.8px;line-height: 40px;' class='text-wrap'> Working closely with our skilled designers, we create furniture pieces that harmoniously combine recycled rattan and metal. The recycled rattan brings a touch of natural beauty, intricate weaving patterns, and a warm texture to our designs, while the repurposed metal provides strength, structure, and an industrial edge</h1>
              </div>
              <div class='col-md'>
                <img src='images/rec1.jpg' class='img-fluid' alt=' style='border-radius:10px;'>
              </div>";
              }
          }
         
  }
?>
