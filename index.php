<!-- Start Including Header -->
<?php
      include('./dbConnection.php');
      include('./mainInclude/header.php');
    ?>
<!-- End Including Header -->

   <!-- Start Video Background -->
   <div class=" customVideoBg remove-vid-marg">
    <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="video/banvid.mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h2 class="my-content">Welcome To E-learning For IT Graduate</h2>
      <br>
      <h4 class="my-content">learn and implement</h4> <br>  
      <?php
        if(!isset($_SESSION['is_login'])){
          echo '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Stated</a>';
        }else{
          echo '<a href="student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a>';
        }
      ?>
      
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
      <?php
          $sql = "SELECT * FROM course LIMIT 3";
          $result = $conn->query($sql);
          if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo '
              <a href="#" class="btn" style="text-align:left; padding:0px; margin:0px">
              <div class="card">
                <img src="'.str_replace('..','.',$row['course_img']).'" alt="'.str_replace('..','.',$row['course_img']).'"/>
                <div class="card-body">
                  <h5 class="card-title">'.$row['course_name'].'</h5>
                  <p class="card-text">'.$row['course_desc'].'</p>
                </div>
                <div class="card-footer">
                  <p class="card-text d-inline">Price : <small><del>'.$row['course_original_price'].'</del></small><span class="font-weight-bolder">'.$row['course_price'].' Taka</span></p>
                    <a href="coursedetails.php" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                </div>
              </div>
            </a>';
            }
          }
        ?>
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
   <?php
     include('./contact.php');
   ?>
   <!-- End Contact Us -->

   <!-- Start Students Testimonial -->
    
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

<!-- Start Including Footer -->
      <?php
        include ('./mainInclude/footer.php');
      ?>
 <!-- End Including Footer -->