<?php
include("includes/Header.php");
include("includes/Sidebar.php");
include("config/dbcon.php");
include("includes/Topbar.php");
// include("includes/Edit_form.php");
?>

<link rel="stylesheet" href="assets/style.css">

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div id="accordion">


                        <!-- Accordion Item 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="user-block" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo1">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username nam-color">
                                        <a href="#">Name</a>
                                        <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                    </span>
                                    <span class="description">days</span>
                                </div>
                                <!-- <h5 class="mb-0"> New Course
                                    <button class="btn btn-primary collapsed float-right" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        View Course
                                    </button>
                                </h5> -->
                                <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo1">
                                    View Message
                                </button>
                            </div>

                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Content for Accordion Item 2 goes here -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <!-- <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a> -->
                                        <!-- <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span> -->
                                    </p>

                                    <div class="d-flex justify-content-center">
                                        <form class="form-horizontal">
                                            <div class="input-group input-group-sm mb-0">
                                                <!-- <input class="form-control form-control-sm" placeholder="Response"> -->
                                                <div class="input-group-append">
                                                    <button type="button" class="btn pink-color" data-target="#chain-msgs" aria-expanded="false" aria-controls="collapseTwo1" data-toggle="collapse">Reply11</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor officiis magnam placeat necessitatibus nemo, odit expedita vel commodi quidem minima blanditiis suscipit nisi, totam eius assumenda! Ut, a ad.</h1> -->
                                </div>
                            </div>
                        </div>

                        <div id="chain-msgs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Content for Accordion Item 2 goes here -->
                                    <p>
                                      111111111111111111111111111111111  Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>
                                    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <div class="card-body ">
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
                                                    <span class="bg-red">Date</span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-envelope bg-blue"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i>timing</span>
                                                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                                        <div class="timeline-body">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas delectus voluptatem deleniti doloribus voluptatibus repellat necessitatibus esse laudantium iste fugiat reiciendis aliquam quasi modi, repudiandae facere nisi impedit sit iure?
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-primary btn-sm">Read more</a>
                                                            <a class="btn btn-danger btn-sm">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user bg-green"></i>
                                                    <div class="timeline-item">
                                                        <!-- <span class="time"><i class="fas fa-clock"></i> 5 mins ago</span> -->
                                                        <!-- <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3> -->
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-comments bg-yellow"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i> timing</span>
                                                        <h3 class="timeline-header"><a href="#">Name</a> commented on your post</h3>
                                                        <div class="timeline-body">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem rem, eaque odio aliquid, dolor illo possimus amet unde neque beatae voluptatem facere qui maiores praesentium nesciunt ullam debitis iusto. Nulla.
                                                        </div>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-warning btn-sm">View comment</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-green"></span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fa fa-camera bg-purple"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i> 2 days ago</span>
                                                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
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
                                                    <i class="fas fa-video bg-maroon"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i> 5 days ago</span>

                                                        <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

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
                        </div>
                    </div>
                </div>
            </div>

            <h1>suggestion and complaint </h1>
        </div>
                                </div>
                        </div>
                        <!-- Add more accordion items as needed -->

                    </div>
                    <div id="accordion">


                        <!-- Accordion Item 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="user-block" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo1">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username  nam-color">
                                        <a href="#">Name</a>
                                        <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                    </span>
                                    <span class="description">days</span>
                                </div>
                                <!-- <h5 class="mb-0"> New Course
                                    <button class="btn btn-primary collapsed float-right" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        View Course
                                    </button>
                                </h5> -->
                                <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo1">
                                    View Message
                                </button>
                            </div>

                            <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Content for Accordion Item 2 goes here -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <!-- <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a> -->
                                        <!-- <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span> -->
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <!-- <input class="form-control form-control-sm" placeholder="Response"> -->
                                            <div class="input-group-append">
                                                <button type="submit" class="btn pink-color">reply</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor officiis magnam placeat necessitatibus nemo, odit expedita vel commodi quidem minima blanditiis suscipit nisi, totam eius assumenda! Ut, a ad.</h1> -->
                                </div>
                            </div>
                        </div>

                        <!-- Add more accordion items as needed -->

                    </div>
                    <div id="accordion">


                        <!-- Accordion Item 2 -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="user-block" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                    <span class="username nam-color">
                                        <a href="#">Name</a>
                                        <!-- <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a> -->
                                    </span>
                                    <span class="description">days</span>
                                </div>
                                <!-- <h5 class="mb-0"> New Course
                                    <button class="btn btn-primary collapsed float-right" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                        View Course
                                    </button>
                                </h5> -->
                                <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                                    View Message
                                </button>
                            </div>

                            <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <!-- Content for Accordion Item 2 goes here -->
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <!-- <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a> -->
                                        <!-- <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span> -->
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn pink-color">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor officiis magnam placeat necessitatibus nemo, odit expedita vel commodi quidem minima blanditiis suscipit nisi, totam eius assumenda! Ut, a ad.</h1> -->
                                </div>
                            </div>
                        </div>

                        <!-- Add more accordion items as needed -->

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                               
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                        <span class="username">
                                            <a href="#">Name</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">days</span>
                                    </div>
                                   
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <p>
                                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a> 
                                        <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn pink-color">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               

                              
                                <div class="post clearfix">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                        <span class="username">
                                            <a href="#">Name</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">days ago</span>
                                    </div>
                                   
                                    <p>
                                        Lorem ipsum represents a long-held tradition for designers,
                                        typographers and the like. Some people hate it and argue for
                                        its demise, but others ignore the hate as they create awesome
                                        tools to help create filler text for everyone from bacon lovers
                                        to Charlie Sheen fans.
                                    </p>

                                    <form class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            <input class="form-control form-control-sm" placeholder="Response">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn pink-color">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                                        <span class="username">
                                            <a href="#">Name</a>
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                        </span>
                                        <span class="description">days ago</span>
                                    </div>
                                  
                                    <div class="row mb-3">
                                        <div class="col-sm-6">
                                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                        </div>
                                      
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                                                    <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                                                    <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                                                </div>
                                                
                                            </div>
                                         
                                        </div>
                                       
                                    </div>
                               

                                    <p>
                                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                                       <span class="float-right">
                                            <a href="#" class="link-black text-sm">
                                                <i class="far fa-comments mr-1"></i> Comments (5)
                                            </a>
                                        </span>
                                    </p>

                                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                                </div>
                                
                            </div>
                           
                            <div class="tab-pane" id="timeline">
                              
                                <div class="timeline timeline-inverse">
                                    <div class="time-label">
                                        <span class="bg-danger">
                                            10 Feb. 2014
                                        </span>
                                    </div>
                                    
                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, asperiores eligendi vel impedit voluptate voluptatum sapiente temporibus nam dolorum ipsum cumque necessitatibus beatae? Magnam laudantium esse ipsa nisi dolorem consectetur.
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                <a href="#" class="btn pink-color btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <i class="fas fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i>days</span>

                                            <h3 class="timeline-header border-0"><a href="#">Name</a>
                                            </h3>
                                        </div>
                                    </div>
                                  
                                    <div>
                                        <i class="fas fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque laborum sunt tenetur deserunt optio at dolor alias est quidem nobis amet obcaecati aut nam maiores, odit temporibus corporis numquam consequuntur.
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="time-label">
                                        <span class="bg-success">
                                            days
                                        </span>
                                    </div>
                                
                                    <div>
                                        <i class="fas fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Name</a> uploaded new photos</h3>


                                        </div>
                                    </div>
                       
                                    <div>
                                        <i class="far fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div>
                           

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn pink-color">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div> -->
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
</div>



<?php
include("includes/Footer.php")
?>