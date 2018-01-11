<?php 
    $con = mysqli_connect("localhost", "root", "root", "netpal"); // Connection variable

    if(mysqli_connect_errno()) {
        echo "Failed to connect: " . mysqli_connect_errno();
    }

    $query = mysqli_query($con, "INSERT INTO test VALUES ('2', 'bob')"); // Inserts data into DB
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NetPal</title>
</head>
<body>
    Hello Keith!
</body>
</html>