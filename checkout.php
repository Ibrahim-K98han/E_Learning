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
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout Page</h1>
</body>
</html>

<?php
    }
?>