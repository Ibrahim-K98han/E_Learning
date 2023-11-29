<?php
    include_once('../dbConnection.php');
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['is_login'])){
        $stuLogEmail = $_SESSION['stuLogEmail'];
    }
    if(isset($stuLogEmail)){
        $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $stu_img = $row['stu_img'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
        <a href="studentProfile.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-learning For IT Graduate</a>
    </nav>
    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                          <img src="<?php echo $stu_img?>" alt="studentimage"
                          class="img-thumbnail rounded-circle">
                        </li>
                        <li class="nav-item">
                            <a href="courses.php" class="nav-link">
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="lesson.php" class="nav-link">
                               Lessons
                            </a>
                        </li>  
                        <li class="nav-item">
                            <a href="students.php" class="nav-link">Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                               Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="adminChangePass.php" class="nav-link">
                              Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                               Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>