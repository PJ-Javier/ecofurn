<?php

include('connection/connect.php');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($con, md5($_POST['cpassword']));

   $select = mysqli_query($con, "SELECT * FROM `userid` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($con, "INSERT INTO `userid`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
<!-- Icon -->
<link rel="shortcut icon" href="images/eco_2.png" type="image/x-icon">
    <link rel="stylesheet" href="login.css?<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

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
            <img src="images/eco_2.png" alt="" srcset="">
            <form action="" method="post">
                <h3 class="text-center">Create your Account</h3>
                <h6 style="padding-top: 10px;">Name</h6>
                <input class="textinput" type="text" name="name" id="name" required autocomplete="name"
                    placeholder="Enter Full Name">
                <h6 style="padding-top: 10px;">Email</h6>
                <input class="textinput" type="email" name="email" required autocomplete="email"
                    placeholder="Enter email">
                <h6 style="padding-top: 10px;">Password</h6>
                <input class="textinput" type="password" name="password" autocomplete="new-password" required
                    placeholder="Enter password">
                <h6 style="padding-top: 10px;">Confirm Password</h6>
                <input class="textinput" type="password" name="cpassword" autocomplete="new-password" required
                    placeholder="Confirm Password">
                <input class="submit-button submit-button d-block text-center my-4 mx-auto" type="submit" name="submit"
                    value="Sign Up">
                <hr>
                <p>Already have an account? <a href="login.php">Sign In</a></p>
            </form>
        </div>
    </section>
</body>

</html>