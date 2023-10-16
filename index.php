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
    <title>E-Learning</title>
</head>
<body>
   <!--Start Navigation-->
   <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">E-Learning</a>
  <span class="navbar-text">Learn and Implement</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
     <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Courses</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Logout</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Login</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Signup</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>
   <!--End Navigation-->

   <!-- Start Video Background -->
   <div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="video/banvid.mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content">Welcome to E-Learning</h1>
      <small class="my-content">learn and implement</small> <br>
      <a href="#" class="btn btn-danger">Get Stated</a>
    </div>
   </div>
   <!-- End Video Background -->

   <!-- Start Text Banner -->
   <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i>Expert Instructor</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i>Life Time Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-money mr-3"></i>Money Back Guarantee*</h5>
        </div>
      </div>
   </div>
   <!-- End Text Banner -->

  
   <!-- Start most popular course -->
    <div class="container mt-5">
      <h1 class="text-center">Popular Course</h1>
      <!-- Start Most Popular Course 1st card deck -->
      <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
          <div class="card">
            <img src="images/java.png" alt="Guitar" />
            <div class="card-body">
              <h5 class="card-title">Learn JAVA Easy Way</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
          <div class="card">
            <img src="images/java.png" alt="Guitar" />
            <div class="card-body">
              <h5 class="card-title">Learn JAVA Easy Way</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
          <div class="card">
            <img src="images/java.png" alt="Guitar" />
            <div class="card-body">
              <h5 class="card-title">Learn JAVA Easy Way</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
      </div>
       <!-- End Most Popular Course 1st card deck -->
       <!-- Start Most Popular Course 2nd card deck -->
       <div class="card-deck mt-4">
        <a href="#" class="btn" style="text-align:left; padding:0px;">
          <div class="card">
            <img src="images/python.png" class="card-img-top" alt="Python" />
            <div class="card-body">
              <h5 class="card-title">Learn Python</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px;">
          <div class="card">
            <img src="images/python.png" class="card-img-top" alt="Python" />
            <div class="card-body">
              <h5 class="card-title">Learn Python</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
        <a href="#" class="btn" style="text-align:left; padding:0px;">
          <div class="card">
            <img src="images/python.png" class="card-img-top" alt="Python" />
            <div class="card-body">
              <h5 class="card-title">Learn Python</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero recusandae nesciunt dicta debitis ullam exercitationem voluptates provident fugit, sed ratione!</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>TK 2000</del></small><span class="font-weight-bolder">Tk 200</span></p>
                <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
      </div>
       <!-- End Most Popular Course 2nd card deck -->
       <div class="text-center m-2">
        <a href="#" class="btn btn-danger btn-sm">View All Course</a>
       </div>
    </div>
   <!-- End most popular course -->

   <!-- Start Contact Us -->
  <div class="container mt-4" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <div class="col-md-8">
        <form action="" method="post">
          <input type="text" class="form-control" name="name" placeholder="Name"><br>
          <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
          <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
          <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
          <input type="submit" class="btn btn-primary" value="Send" name="submit"><br><br>
        </form>
      </div>
      <div class="col-md-4 stripe text-orange text-center">
        <h4>E-Learning</h4>
        <p>E-Learning,
         Demra Jatrabari,
         Phone:017518000 <br> 
         www.e-learning.com
        </p>
      </div>
    </div>
  </div>
   <!-- End Contact Us -->

   <!-- Start Students Testimonial -->
    <div class="container-fluid mt-5" style="background-color: #4B7289" id="feedback">
        <h1 class="text-center testyheading p-4">Student's Feedback</h1>
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
              <div class="testimonial">
                <p class="description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda recusandae voluptas voluptatibus sequi temporibus? Illo aliquam vel ipsam consequuntur laborum?
                </p>
                <div class="pic">
                  <img src="images/placeholder.jpg" alt="">
                </div>
                <div class="testimonial-prof">
                  <h4>Sonam</h4>
                  <small>Web Developer</small>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
   <!-- End Students Testimonial -->



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>