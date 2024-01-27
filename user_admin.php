<?php
include("includes/Header.php");
include("includes/Sidebar.php");
include("config/user_store.php");
include("includes/Topbar.php");
?>

<div class="content-wrapper">
    <section class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <!-- <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Product +</a> -->
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="config/user_store.php" method="post">
                        <!-- <div class="form-group mb-3 mt-3">
                            <label for="category">Product Category</label>
                            <select class="form-control" id="category" name="category">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div> -->
                        <div class="form-group mb-3">
                            <label for="categoryName"> Name</label>
                            <input type="text" class="form-control" id="categoryName" placeholder=" Name" name="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="productDescription">refferal</label>
                            <input type="text" class="form-control" id="productDescription" placeholder="id" name="id">
                        </div>


                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary float-right" name="submit">Save</button>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">



                <div class="card">
                    <!-- <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div> -->
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>Sponsor</th> -->
                                    <th>User Name</th>
                                    <th>User Id(s)</th>
                                    <th></th>
                                    <!-- <th></th> -->
                                    <!-- <th>Reference 3</th>
                                    <th>Reference 4</th>
                                    <th>Reference 5</th>
                                    <th>Reference 6</th>
                                    <th>Reference 7</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $query = "SELECT * FROM coming_soon";
                                // $query_run = mysqli_query($conn, $query);
                                // if (mysqli_num_rows($query_run) > 0) {
                                //     foreach ($query_run as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row['First Name']; ?></td>
                                    <td><?php echo $row['Email']; ?> </td>


                                </tr>
                                <!-- // echo $row['First Name']; -->
                                <?php
                                //     }
                                // } else {
                                //     // echo "not found";
                                ?>
                                <tr>
                                    <td>No record Found</td>
                                </tr>
                                <?php
                                // }
                                ?>

                            </tbody>


                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>












</div>
<?php
include("includes/Footer.php")
?>


<?php
if (isset($_SESSION['auth'])) {
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h2 class="text-center">Your Course</h2>

                    </div>

                    <?php
                    $auth_email = $_SESSION['user-auth']['email'];

                    // Use prepared statement to prevent SQL injection
                    $auth_email_data = $conn->prepare("SELECT * FROM `Add_course` WHERE Email = ?");
                    $auth_email_data->bind_param("s", $auth_email);
                    $auth_email_data->execute();
                    $result2 = $auth_email_data->get_result();

                    if ($result2->num_rows > 0) {
                    ?>
                        <div id="accordion">
                            <?php
                            // Fetch data using prepared statement
                            if (mysqli_num_rows($result2) > 0) {
                                foreach ($result2 as $row) {
                            ?>
                                    <!-- Accordion Item -->
                                    <div class="card">
                                        <div class="card-header" id="heading">
                                            <h5 class="mb-0">
                                                <?php echo $row['C_Name']; ?>
                                                <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapse<?php echo $row['C_Name'] ?>" aria-expanded="false" aria-controls="collapse">
                                                    View Course
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapse<?php echo $row['C_Name']; ?>" class="collapse" aria-labelledby="heading<?php echo $row['C_cate']; ?>" data-parent="#accordion">
                                            <div class="card-body">
                                                <!-- Content for Accordion Item goes here -->
                                                <form action="config/vendor-login.php" method="post">
                                                    <div class="form-group mb-3">
                                                        <label for="categoryName">Course Name</label>
                                                        <input type="text" class="form-control" id="categoryName" placeholder="Name" name="name" value="<?php echo $row['C_Name']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="productDescription">Course Description</label>
                                                        <input type="text" class="form-control" id="productDescription" placeholder="Description" value="<?php echo $row['C_des']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label for="productSize">Course Highlight</label>
                                                        <input type="text" class="form-control" id="productSize" placeholder="Size" value="<?php echo $row['C_highlights']; ?>" disabled>
                                                    </div>

                                                    <!-- Video Section -->
                                                    <div class="container mt-4">
                                                        <h2>Videos</h2>
                                                        <div class="row">
                                                            <!-- First Column -->
                                                            <div class="col-md-4">
                                                                <div class="form-group mb-3 card-body border">
                                                                    <label for="videoFile1">Video1:</label>
                                                                    <?php echo $row['video1']; ?>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="videoName">Video Name:</label>
                                                                        <?php echo $row['vdo_name']; ?>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="videoDescription">Description:</label>
                                                                        <?php echo $row['vdo_des']; ?>
                                                                    </div>

                                                                    <div class="container container121">
                                                                        <div class="form-group highlight-container">
                                                                            <label for="videoHighlights">Video Highlights:</label>
                                                                            <?php echo $row['vdo_highlights']; ?>
                                                                        </div>

                                                                        <button type="button" class="btn btn-success float-right" id="addHighlightBtn1">Add Highlight</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Add more video columns as needed -->
                                                        </div>
                                                    </div>

                                                    <!-- Save Button -->
                                                    <button type="submit" class="btn float-right" name="submit" disabled>Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            } else {
                                ?>
                                <tr>
                                    <td>No record Found</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>


<?php
}
?>