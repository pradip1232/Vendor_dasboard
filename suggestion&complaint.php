<?php
include("includes/Header.php");
include("includes/Sidebar.php");
include("config/dbcon.php");
include("includes/Topbar.php");
// include("includes/Edit_form.php");
?>

<div class="content-wrapper">
    <section class="content">
        <section class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>All Tickets</h2>
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <button class="btn btn-block pink-color float-right collapsed" id="openPopupBtn" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                            Add New Ticket +
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card card-primary">
                            <div class="card-body ">
                                <!-- <p>
                                    <a class="btn pink-color col-lg-12" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        View Tickets
                                    </a>

                                </p> -->
                                <div class="card-header" id="headingTwo">
                                    <div class="user-block" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="collapseTwo1">
                                        <!-- <img class="img-circle img-bordered-sm" src="" alt="user image"> -->
                                        <span class="username nam-color">
                                            <a href="#">Tickets Subjects</a>
                                            <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                        </span>
                                        <span class="description">days</span>
                                    </div>
                                    <!-- <h5 class="mb-0"> New Course
                                    <button class="btn btn-primary collapsed float-right" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        View Course
                                    </button>
                                </h5> -->
                                    <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseTwo1">
                                        View Message
                                    </button>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <!-- <div class="card card-body"> -->
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quaerat odio soluta quidem eaque similique? Beatae, non, blanditiis voluptatem saepe perspiciatis at possimus nulla eos atque veniam nobis iusto dolor.
                                    </p>
                                    <div class="container-fluid">



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <!-- <div class="card card-primary"> -->
                                                <!-- <div class="card-body "> -->
                                                <!-- Main content -->
                                                <section class="content">
                                                    <div class="container-fluid">

                                                        <!-- Timelime example  -->
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- The time line -->
                                                                <div class="timeline">
                                                                    <!-- timeline time label -->
                                                                    <div class="time-label">
                                                                        <span class="bg-red" style="background-color:#B65172!important;">Date</span>
                                                                    </div>
                                                                    <!-- /.timeline-label -->
                                                                    <!-- timeline item -->
                                                                    <div>
                                                                        <i class="fas fa-envelope bg-blue" style="background-color:#5fc3e4!important;"></i>
                                                                        <div class="timeline-item">
                                                                            <span class="time"><i class="fas fa-clock"></i>timing</span>
                                                                            <h3 class="timeline-header"><a href="#" style="color:black!important;">Support Team</a> sent you an email</h3>

                                                                            <div class="timeline-body">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas delectus voluptatem deleniti doloribus voluptatibus repellat necessitatibus esse laudantium iste fugiat reiciendis aliquam quasi modi, repudiandae facere nisi impedit sit iure?
                                                                            </div>
                                                                            <div class="timeline-footer">
                                                                                <a class="btn btn-primary btn-sm" style="background-color:#5fc3e4!important; border:none; ">Read more</a>
                                                                                <a class="btn btn-danger btn-sm" style="background-color:#B65172!important; border:none;  border:none;">Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END timeline item -->
                                                                    <!-- timeline item -->
                                                                    <div>
                                                                        <i class="fas fa-user bg-green" style="background-color:#B65172!important;"></i>
                                                                        <div class="timeline-item">
                                                                            <!-- <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span> -->
                                                                            <!-- <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- END timeline item -->
                                                                    <!-- timeline item -->
                                                                    <div>
                                                                        <i class="fas fa-comments bg-yellow" style="background-color:#5fc3e4!important;"></i>
                                                                        <div class="timeline-item">
                                                                            <span class="time"><i class="fas fa-clock"></i> timing</span>
                                                                            <h3 class="timeline-header"><a href="#" style="color:black!important;">Name</a> commented on your post</h3>
                                                                            <div class="timeline-body">
                                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rem, eaque odio aliquid, dolor illo possimus amet unde neque beatae voluptatem facere qui maiores praesentium nesciunt ullam debitis iusto. Nulla.
                                                                            </div>
                                                                            <div class="timeline-footer">
                                                                                <a class="btn btn-warning btn-sm" style="background-color:#5fc3e4!important;">View comment</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END timeline item -->
                                                                    <!-- timeline time label -->
                                                                    <div class="time-label">
                                                                        <span class="bg-green" style="background-color:#B65172!important;"></span>
                                                                    </div>
                                                                    <!-- /.timeline-label -->
                                                                    <!-- timeline item -->
                                                                    <div>
                                                                        <i class="fa fa-camera bg-purple" style="background-color:#B65172!important;"></i>
                                                                        <div class="timeline-item">
                                                                            <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                                                                            <h3 class="timeline-header"><a href="#" style="color:black!important;">Name</a> uploaded new photos</h3>
                                                                            <div class="timeline-body">
                                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                                <img src="https://placehold.it/150x100" alt="...">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END timeline item -->
                                                                    <!-- timeline item -->
                                                                    <div>
                                                                        <i class="fas fa-video bg-maroon" style="background-color:#B65172!important;"></i>

                                                                        <div class="timeline-item">
                                                                            <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                                                                            <h3 class="timeline-header"><a href="#" style="color:black!important;">nameeeeee</a> shared a video</h3>

                                                                            <div class="timeline-body">
                                                                                <div class="embed-responsive embed-responsive-16by9">
                                                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen></iframe>
                                                                                </div>
                                                                            </div>
                                                                            <div class="timeline-footer">
                                                                                <a href="#" class="btn btn-sm bg-maroon">See comments</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END timeline item -->
                                                                    <div>
                                                                        <i class="fas fa-clock bg-gray"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.col -->
                                                        </div>
                                                    </div>
                                                    <!-- /.timeline -->

                                                </section>
                                                <!-- /.content -->
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>

                                        <!-- <h1>suggestion and complaint </h1> -->
                                    </div>
                                    <!-- </div> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





    </section>
</div>

<?php
include("includes/Footer.php")
?>

<!-- Modal -->
<div class="modal fade" id="exampleModaltt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!--<h5 class="modal-title" id="exampleModalLabel">Login form</h5>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Subject</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="" required>
                        <div class="invalid-feedback">
                            Your email is required.
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Describe your concern here </label>
                        <textarea type="text" class="form-control" id="" name="" placeholder="describe your concern here" required></textarea>

                    </div>

                    <button class="btn pink-color btn-lg btn-block" type="submit" style="color:white;" name="login">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>