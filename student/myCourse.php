<?php
    include('./stuInclude/header.php');
    include_once('../dbConnection.php');
?>

<div class="col-sm-6 mt-5">
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId"
             value="<?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stuEmail">Email</label>
            <input type="email" class="form-control" id="stuEmail" name="stuEmail"
             value="<?php echo $stuEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stuName">Name</label>
            <input type="text" class="form-control" id="stuName" name="stuName"
             value="<?php if(isset($stuName)) {echo $stuName;} ?>" >
        </div>
        <div class="form-group">
            <!-- Student doesnt meand school student it also means learner -->
            <label for="stuOcc">Occupation</label>
            <input type="text" class="form-control" id="stuOcc" name="stuOcc"
             value="<?php if(isset($stuOcc)) {echo $stuOcc;} ?>" >
        </div>
        <div class="form-group">
            <label for="stuImg">Upload Image</label>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg">
        </div>
        <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
        <?php if(isset($passmsg)) {echo $passmsg;}?>
    </form>
</div>
</div> 


<?php
    include('./stuInclude/footer.php');
?>