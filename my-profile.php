<?php

session_start();

include("includes/Header.php");
include("includes/Sidebar.php");
include("config/dbcon.php");
include("includes/Topbar.php");
?>


<div class="content-wrapper">


    <!-- Main content -->
    <section class="content mt-2">
        <div class="container-fluid ">
            <!-- Small boxes (Stat box) -->
            <!-- <div class="row"> -->
            <!-- /.tab-pane -->
            <div class="row">
                <div class="col-12">
                    <div class="card p-1">
                        <div class="card-header d-flex">
                            <h3 class="mb-0">My Account</h3>
                            <a href="#" class="btn btn-primary pink-color border-none ml-auto border-0" data-toggle="modal" data-target="#editModal">Edit</a>

                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Your Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="email" value="<?php echo isset($_SESSION['user-auth']['email']) ? $_SESSION['user-auth']['email'] : ''; ?>">


                                        <form action="config/vendor-update.php" method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="firstName">Full Name</label>
                                                    <input type="text" class="form-control" id="editFirstName" name="username" placeholder="Full Name" required>
                                                    <div class="invalid-feedback">
                                                        Full name is required.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
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

                                                <div class="form-group col-md-6">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                                    <div class="invalid-feedback">
                                                        Valid date of birth is required.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="phonenumber">Mobile Number</label>
                                                    <input type="text" class="form-control" id="phonenumber" name="phone" placeholder="Mobile Number" required>

                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="email" value="<?php echo isset($_SESSION['user-auth']['email']) ? $_SESSION['user-auth']['email'] : ''; ?>" disabled>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="email" value="<?php echo isset($_SESSION['user-auth']['email']) ? $_SESSION['user-auth']['email'] : ''; ?>">

                                                <div class="form-group col-md-6">
                                                    <label for="state">State</label>
                                                    <select class="custom-select form-control" id="state" name="state">
                                                        <option value="">Choose...</option>
                                                        <?php
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

                                                <div class="form-group col-md-6">
                                                    <label for="city">City</label>
                                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                                                    <div class="invalid-feedback">
                                                        City is required.
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="pinCode">Pin Code</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="pinCode" name="pincode" placeholder="Enter Pin Code" required>
                                                        <div class="input-group-append">
                                                            <button type="button" class="btn btn-primary" onclick="checkPinCode()">Check Pin Code</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- </div> -->


                        <?php
                        if (isset($_SESSION['auth'])) {
                        ?>
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal p-2">
                                    <div class="form-group row">
                                        <label for="inputFirstName" class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" value="<?php echo $_SESSION['user-auth']['name']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" value="<?php echo $_SESSION['user-auth']['email']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputContact" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputContact" value="<?php echo $_SESSION['user-auth']['phone']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputDOB" class="col-sm-2 col-form-label">DOB</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="inputDOB" placeholder="Date of Birth" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputState" class="col-sm-2 col-form-label">State</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputState" value="<?php echo $_SESSION['user-auth']['state']; ?>" disabled>
                                        </div>
                                        <label for="inputCity" class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputCity" placeholder="City" disabled>
                                        </div>
                                    </div>

                                    <!-- New Numeric Fields -->
                                    <div class="form-group row">
                                        <label for="inputNumber1" class="col-sm-2 col-form-label">Pan Card</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputNumber1" placeholder="Pan Card" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputNumber2" class="col-sm-2 col-form-label">Adhaar Card</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control" id="inputNumber2" placeholder="Adhar card" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputNumber3" class="col-sm-2 col-form-label">Brief ABout yourself</label>
                                        <div class="col-sm-10">
                                            <textarea type="number" class="form-control" id="inputNumber3" placeholder="" disabled>
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="card 1custom-card" id="courseContainer">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label for="courseSelect" class="col-sm-2 col-form-label">Course</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="courseSelect[]">
                                                        <!-- Add your course options here -->
                                                         <option value="option1">Option 1</option>
                                                        <option value="option2">Option 2</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>

                                                <label for="experienceSelect" class="col-sm-2 col-form-label">Your Experience</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control" name="experienceSelect[]">
                                                        <!-- Add your experience options here -->
                                                        <option value="beginner">Beginner</option>
                                                        <option value="intermediate">Intermediate</option>
                                                        <option value="advanced">Advanced</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-success ml-auto float-right" onclick="addCourseSection()"><b>+</b></button>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
            <!-- </div> -->
        </div>
    </section>

    <!-- <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <h3 class="ml-2 mt-2">Your Course Details</h3>
                        <div class="card-body">
                            
                            <form action="ProductDB.php" method="post">


                                <div class="form-group mb-3">
                                    <label for="categoryName">Course Name</label>
                                    <input type="text" class="form-control" id="categoryName" placeholder=" Name" name="name" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="productDescription">Course Description</label>
                                    <input type="text" class="form-control" id="productDescription" placeholder="Description" name="P_D" disabled>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="productSize">Course Highlight</label>
                                    <input type="text" class="form-control" id="productSize" placeholder=" size" name="size" disabled>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="productPrice">Course Price</label>
                                    <input type="text" class="form-control" id="productPrice" placeholder="Price" name="price" disabled>
                                </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- <div class="container mt-5">
        <form action="">
            <div class="row">

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="name1" class="flex-shrink-0">Name</label>
                        <input class="form-control flex-grow-1" type="text" id="name1" placeholder="Enter your name">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="phone1" class="flex-shrink-0">Phone</label>
                        <input class="form-control flex-grow-1" type="number" id="phone1" placeholder="Enter your phone number">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="email1" class="flex-shrink-0">Email</label>
                        <input class="form-control flex-grow-1" type="email" id="email1" placeholder="Enter your email">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group d-flex">
                        <label for="state1" class="flex-shrink-0">State</label>
                        <select class="form-control flex-grow-1" id="state1">
                            <option value=""></option>
                            <option value="">Option 1</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group d-flex">
                        <label for="city1" class="flex-shrink-0">City</label>
                        <select class="form-control flex-grow-1" id="city1">
                            <option value=""></option>
                            <option value="">Option 1</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group d-flex">
                        <label for="pin" class="flex-shrink-0">Pincode</label>
                        <input class="form-control flex-grow-1" type="number" id="pin" placeholder="Enter pin code">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group d-flex">
                        <label for="gender" class="flex-shrink-0">Gender</label>
                        <select class="form-control flex-grow-1" id="gender">
                            <option value=""></option>
                            <option value="">Option 1</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group d-flex">
                        <label for="date" class="flex-shrink-0">DOB</label>
                        <input class="form-control flex-grow-1" type="date" id="date">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="card1" class="flex-shrink-0">Pan Card</label>
                        <input class="form-control flex-grow-1" type="text" id="card1" placeholder="Enter your card number">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="card2" class="flex-shrink-0">Adhaar Card</label>
                        <input class="form-control flex-grow-1" type="number" id="card2" placeholder="Enter your A card number">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="Course1" class="flex-shrink-0">Course</label>
                        <select class="form-control flex-grow-1" id="Course1">
                            <option value=""></option>
                            <option value="">Option 1</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="Course2" class="flex-shrink-0">Year Of Experience</label>
                        <select class="form-control flex-grow-1" id="Course2">
                            <option value=""></option>
                            <option value="">Option 1</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group d-flex">
                        <label for="Add" class="flex-shrink-0">Brief about Yourself</label>
                        <textarea class="form-control flex-grow-1" id="Add" cols="30" rows="5"></textarea>
                    </div>
                </div>

            </div>

        </form>
    </div> -->
</div>
<?php
include("includes/Footer.php")
?>



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
<script>
    function addCourseSection() {
        // Clone the existing course section
        var courseSection = document.getElementById('courseContainer').cloneNode(true);

        // Clear values in the cloned section
        var selects = courseSection.getElementsByTagName('select');
        for (var i = 0; i < selects.length; i++) {
            selects[i].selectedIndex = 0;
        }

        // Append the cloned section to the container
        document.getElementById('courseContainer').appendChild(courseSection);
    }
</script>