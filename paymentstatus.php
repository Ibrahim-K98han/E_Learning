<!-- Start Including Header -->
<?php
      include('./mainInclude/header.php');
    ?>
<!-- End Including Header -->

<!-- Start Course Page Banner -->
   <div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/coursebanner.jpg" alt="course" 
        style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">
    </div>
   </div>

<!-- End Course Page Banner -->

<!-- Start Main Content -->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label for="" class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3">
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="view">
            </div>
        </div>
    </form>
</div>
<!-- End Main Content -->

<!-- Start Contact US -->
    <?php
        include('./contact.php');
    ?>
<!-- End Contact US -->







<!-- Start Including Footer -->
    <?php
        include ('./mainInclude/footer.php');
      ?>
 <!-- End Including Footer -->