<?php
    include 'admininclude/header.php';
    include '../dbConnection.php';

?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Course</p>
    <?php
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
    ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           <?php 
             while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<th scope="row">'.$row['course_id'].'</th>';
            echo '<td>'.$row['course_name'].'</td>';
            echo '<td>'.$row['course_author'].'</td>';
            echo '<td>';
                    echo '<button class="btn btn-info mr-3" type="submit" name="view" value="view">
                        Edit
                        <!-- <i class="far fa-open"></i> -->
                    </button>
                    <form action="" method="POST" class="d-inline">
                        <input type="hidden" name="id" value='.$row["course_id"].'>
                        <button class="btn btn-secondary" type="submit" name="delete" value="Delete">
                        <!-- <i class="far fa-trash-alt"></i> -->
                            Delete
                        </button>
                    </form>
                </td>
            </tr>';
           } ?>
        </tbody>
    </table>
    <?php } else{
        echo "0 Result";
    } 
    
    if(isset($_REQUEST['delete'])){
        $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
        if($conn->query($sql) == TRUE){
            echo '<meta http-equiv="refresh" content="0; URL=?deleted"/>';
        }else{
            echo "Unable to Delete Data";
        }
    }
    
?>
</div>
</div>
<!-- div row close from header -->
<div>
    <a href="./addCourse.php" class="btn btn-danger box"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php
    include 'admininclude/footer.php';
?>