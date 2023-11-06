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
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>
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
      <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Stated</a>
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

   <!-- Start social section -->
   <div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
      </div>
      <div class="col-sm">
        <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
      </div>
      <div class="col-sm">
        <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
      </div>
      <div class="col-sm">
        <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
      </div>
    </div>
   </div>
    <!-- Start social section -->

    <!-- Start About section -->
    <div class="container-fluid p-4" style="background-color:#E9ECEF">
      <div class="container" style="background-color:#E9ECEF">
        <div class="row text-center">
          <div class="col-sm">
            <h5>About Us</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, veritatis quos. Accusamus ratione quod rerum perferendis! Earum odit corporis ullam dicta amet at, non, nobis quisquam, aperiam saepe excepturi maxime.</p>
          </div>
          <div class="col-sm">
            <h5>Category</h5>
            <a href="#" class="text-dark">Web Development</a><br>
            <a href="#" class="text-dark">Web Design</a><br>
            <a href="#" class="text-dark">Web App Dev</a><br>
            <a href="#" class="text-dark">iOS Development</a><br>
            <a href="#" class="text-dark">Data Analysis</a><br>
          </div>
          <div class="col-sm">
            <h5>Contact Us</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio commodi nesciunt ipsa rem debitis nostrum aperiam sit atque nihil fugiat!</p>
          </div>

        </div>
      </div>
    </div>
    <!-- End About section -->

    <!-- Start Footer section -->
    <footer class="container-fluid bg-dark text-center p-2">
      <small class="text-white">Copyright &copy; 2023 || E-Learning || Admin Login</small>
    </footer>
    <!-- End Footer section -->

    <!-- start student registration modal -->
    <!-- Modal -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- start student registration form -->
              <form>
                  <div class="form-group">
                  <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
                  <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                  </div>
                  <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                  <small class="form-text">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                  </div>
              </form>
              <!-- end student registration form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <!-- end student registration modal -->

    <!-- start student login modal -->
    <!-- Modal -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- start student login form -->
              <form>
                  <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                  <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                  </div>
                  <div class="form-group">
                    <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                  </div>
              </form>
              <!-- end student login form -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
    <!-- end student login modal -->



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>