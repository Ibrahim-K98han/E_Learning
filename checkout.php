<?php
    include('./dbConnection.php');
    session_start();
    if(!isset($_SESSION['stuLogEmail'])){
        echo "<script>location.href='loginorsignup.php'</script>";
    }else{
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Checkout</title>
</head>
<body>
     <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <img src="images/checkout.png" alt="Centered Image">
    </div>
    <a href="courses"></a>
</body>
</html>

<?php
    }
?>