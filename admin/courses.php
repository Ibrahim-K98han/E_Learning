<?php
    include 'admininclude/header.php';
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Course</p>
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
            <tr>
                <th scope="row">22</th>
                <td>Learn Java</td>
                <td>Ibrahim Khan</td>
                <td>
                    <button class="btn btn-info mr-3" type="submit" name="view" value="view">
                        Edit
                        <!-- <i class="far fa-open"></i> -->
                    </button>
                    <button class="btn btn-secondary" type="submit" name="delete" value="Delete">
                        <!-- <i class="far fa-trash-alt"></i> -->
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
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