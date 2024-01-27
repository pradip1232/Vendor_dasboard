<?php
include "includes/header.php";
// include "assets/JS/city.js";
session_start();
?>

<div class="container">
    <div class="py-5 text-center">
        <!-- Logo and title -->
    </div>

    <div class="row">

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3 text-center">Vendor Registration Form</h4>
            <form class="needs-validation" action="dbconfig/vendor-data.php" method="post" id="registrationForm" novalidate>
                <div class="row">
                        <?php
                        if (isset($_SESSION['msgs'])) {
                        ?>

                            <div class="alert alert-warming alert-dismissible fade show">
                                <strong>
                                    hello<?= $_SESSION['msgs'] ?>
                                </strong>
                            </div>



                        <?php

                            unset($_SESSION['msgs']);
                        }
                        ?>
                    <div class="col-md-12 mb-6">




                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" name="username" placeholder="First Name" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>


                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="custom-select form-control" id="gender" name="gender" required>
                            <option value="">Choose...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a gender.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phonenumber">Mobile Number</label>
                        <input type="text" class="form-control" id="phonenumber" placeholder="Mobile Number " name="phone" value="" required>
                        <div class="invalid-feedback">
                            Valid mobile number is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email.." required>
                        <div class="invalid-feedback">
                            Your email is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" name="state" required>
                            <option value="">Choose...</option>
                            <?php
                            // Array of Indian states
                            $indianStates = [
                                "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh",
                                "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand",
                                "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur",
                                "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab",
                                "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura",
                                "Uttar Pradesh", "Uttarakhand", "West Bengal"
                            ];

                            // Loop through the states to generate options
                            foreach ($indianStates as $state) {
                                echo "<option value=\"$state\">$state</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select a state.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pinCode">Enter Pin Code:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pinCode" name="pincode" placeholder="Enter Pin Code" required>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary" onclick="checkPinCode()">Check Pin Code</button>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            Valid pin code is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                        <div class="invalid-feedback" id="error-msgs">
                            <!-- Error messages will be displayed here -->
                        </div>
                    </div>
                    <div class="col-md-12 mb-6">
                        <label for="firstName">Password</label>
                        <input type="text" class="form-control" id="firstName" name="password" placeholder="password" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>



                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" id="openModalBtn">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>



<!-- Include the JavaScript file -->
<script src="assets/JS/city.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
<script src="script.js"></script>

<script>
    function checkPinCode() {
        // Get the entered pin code from the form
        const pincode = document.getElementById('pinCode').value;

        // Call the fetchData function with the entered pin code
        fetchData(pincode);
    }

    async function fetchData(pincode) {
        try {
            const response = await fetch(`https://api.postalpincode.in/pincode/${pincode}`);

            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            const data = await response.json();

            if (data[0].Status === "Success") {

                const district = data[0].PostOffice[0].District;
                console.log(`District: ${district}`);
                document.getElementById('city').value = district;

                document.getElementById('error-msgs').textContent = '';
            } else {

                document.getElementById('error-msgs').textContent = 'Invalid Pin Code. Please try again.';
                alert('Wrong Pin Code');
                console.log("khfguk")
                // document.getElementById('error-msgs').textContent = 'Invalid Pin Code. Please try again.';
                // document.getElementById('error-msgs').value = "error";
                // Handle the error, show a message to the user, etc.
            }
        } catch (error) {
            console.error(`Error: ${error.message}`);
        }
    }
</script>