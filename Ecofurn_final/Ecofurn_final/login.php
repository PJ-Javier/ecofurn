<?php

include('connection/connect.php');
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `userid` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect password or email!';
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- Icon -->
<link rel="shortcut icon" href="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>

<body>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
    <section class="signup-section d-flex justify-content-center align-items-center">
        <div class="left-cta container-fluid d-none d-sm-none d-md-flex"></div>
        <div class="signup-area container-fluid">
            <img src="https://res.cloudinary.com/dxib7u6wq/image/upload/v1684919118/ecofurn/products/eco_2_rlwn5v.png" alt="" srcset="">
            <form action="" method="post">
                <h3 class="text-center">Welcome Back</h3>
                <h6 style="padding-top: 10px;">Email</h6>
                <input class="textinput" type="email" name="email" required autocomplete="email"
                    placeholder="Enter Email">
                <h6 style="padding-top: 10px;">Password</h6>
                <input class="textinput" type="password" name="password" autocomplete="current-password" required
                    placeholder="Enter Password">
                <input class="submit-button d-block text-center my-4 mx-auto" type="submit" name="submit" value="Login">
                <hr>
                <p>Already have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </section>
</body>

</html>