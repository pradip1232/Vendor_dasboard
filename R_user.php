<?php
include("includes/Header.php");
include("includes/Sidebar.php");
include("includes/Topbar.php");
include("config/dbcon.php");
?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Registered User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <div class="container">
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number(s)</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM coming_soon";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['First Name']; ?></td>
                                            <td><?php echo $row['Email']; ?>        </td>
                                            <td><?php echo $row['phone Number']; ?></td>
                                            <td> <?php echo $row['State']; ?></td>
                                            <td> <?php echo $row['city']; ?></td>
                                            <td>X</td>
                                        </tr>
                                        <!-- // echo $row['First Name']; -->
                                    <?php
                                    }
                                } else {
                                    // echo "not found";
                                    ?>
                                    <tr>
                                        <td>No record Found</td>
                                    </tr>
                                <?php
                                }
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