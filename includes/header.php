<?php 
    require 'config/config.php';

    if(isset($_SESSION['username'])) {
        $userLoggedIn = $_SESSION['username'];
        $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
        $user = mysqli_fetch_array($user_details_query);
    } else {
        header("Location: register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Splash</title>
    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"></link>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"></link>    
</head>
<body>

<div class="top-bar">
    <div class="logo">
        <a href="index.php">Social Splash</a>
    </div>

    <nav>
        <a href="<?php echo $userLoggedIn; ?>"><?php echo $user['first_name']; ?></a>
        <a href=""><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-bell fa-lg" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-users fa-lg" aria-hidden="true"></i></a>   
        <a href=""><i class="fa fa-cog fa-lg" aria-hidden="true"></i></a>                      
    </nav>
</div>

<div class="wrapper">