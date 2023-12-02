
<?php
      include('./dbConnection.php');
      include('./mainInclude/header.php');
?>

<!-- Start Course Page Banner -->
  <div class="vid-parent">
      <video playsinline autoplay muted loop>
        <source src="video/banvid.mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h2 class="my-content">E-learning For IT Graduate</h2>
      <br>
      <h4 class="my-content">learn and implement</h4> <br>    
    </div>

<!-- End Course Page Banner -->


<!-- Start All course -->
<div class="container mt-5">
  <h1 class="text-center">All Course</h1>
  <div class="row mt-4">
    <?php
      $sql = "SELECT * FROM course";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo 
          '<div class="col-sm-4 mb-4">
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align:left; padding:0px;">
          <div class="card">
            <img src="'.str_replace('..','.',$row['course_img']).'" alt="'.str_replace('..','.',$row['course_img']).'" class="card-img-top"/>
            <div class="card-body">
              <h5 class="card-title">'.$row['course_name'].'</h5>
              <p class="card-text">'.$row['course_desc'].'</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price : <small><del>'.$row['course_original_price'].'</del></small><span class="font-weight-bolder">'.$row['course_price'].' Taka</span></p>
                <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
            </div>
          </div>
        </a>
          </div>';
        }
      }
    ?>
  </div>
</div>
<!-- End All course -->



<!-- Start Including Footer -->
<?php
    include ('./mainInclude/footer.php');
  ?>
 <!-- End Including Footer -->