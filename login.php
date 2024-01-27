<?php
include "includes/header.php";
// include "assets/JS/city.js";

?>

<div class="container">
    <div class="py-5 text-center">
        <!-- Logo and title -->
    </div>

    <div class="row">

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3 text-center">Vendor login Form</h4>
            <form class="needs-validation" action="config/vendor-login.php" method="post" id="registrationForm" novalidate>
                <div class="row">
                   
                  
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email.." required>
                        <div class="invalid-feedback">
                            Your email is required.
                        </div>
                  
                    <div class="col-md-12 mb-6">
                        <label for="firstName">Password</label>
                        <input type="text" class="form-control" id="firstName" name="password" placeholder="password" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                   


                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="login" id="openModalBtn">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>








<!-- Include the JavaScript file -->
<script src="assets/JS/city.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
<script src="script.js"></script>