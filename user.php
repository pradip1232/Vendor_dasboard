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
                                <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal"> Add Product +</a>
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
                                    <th>Sponsor</th>
                                    <th>User Name</th>
                                    <th>Reffernce Id(s)</th>
                                    <th>Reference 1</th>
                                    <!-- <th>Reference 2</th>
                                    <th>Reference 3</th>
                                    <th>Reference 4</th>
                                    <th>Reference 5</th>
                                    <th>Reference 6</th>
                                    <th>Reference 7</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    // user id related insert query 


                                    $query = "SELECT * FROM User";
                                    $query_run = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                            
                                            ?>
                                <tr>
                                    <td>sponsor</td>

                                   
                                    <td><?php echo $row['Name'] ?></td>

                                    <td><?php echo $row["referral_code"] ?> </td> 

                                    <td> - </td>
                                </tr>
                                <?php
                                        }
                                    }
                                ?>

                                <!-- //else consition  -->


                                
                                <!-- <td>- </td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td> -->
                                </tr>
                                <!-- // echo $row['First Name']; -->

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