<?php
ob_start();
session_start();
include("includes/Header.php");
include("includes/Sidebar.php");
include("config/dbcon.php");
include("includes/Topbar.php");
?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registration form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="config/vendor-data.php" method="post">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
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
                                        <label for="email">Email</label>
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
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="" required>
                                        <div class="invalid-feedback">
                                            Valid password is required.
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

                    <!-- 
                    </form> -->
                </div>
            </div>
            <!-- </div> -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModallogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="config/vendor-login.php" method="post">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email.." required>
                                    <div class="invalid-feedback">
                                        Your email is required.
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Valid password is required.
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- </div> -->

            <div class="container-fluid">

                <div class="card-body">

                    <?php
                    if (isset($_SESSION['auth'])) {
                    ?>

                        <h2 class="float-left">Hello <?php echo $_SESSION['user-auth']['name']; ?>,</h2>
                    <?php
                    }
                    ?>
                    <h6 class="float-right">Processing</h6>
                </div>
            </div>
            <?php
            // session_start();

          
            if (isset($_SESSION['Msgs'])) {
                ?>
            
                <div id="alertMsg" class="alert alert-warning alert-dismissible fade show">
                    <strong>
                        You successfully logged in<?= $_SESSION['Msgs'] ?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <script>
                    // Automatically close the alert after 5 seconds
                    setTimeout(function () {
                        document.getElementById('alertMsg').style.display = 'none';
                    }, 5000);
                </script>
            
            <?php
                unset($_SESSION['Msgs']);
            }
            ?>
            



            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>00</h3>

                            <p>Total order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer" onclick="disableField()" id="disabledLink">More info <i class="fas fa-arrow-circle-right"></i></a>
                        <script>
                            function disableField() {
                                document.getElementById("disabledLink").disabled = true;
                            }
                        </script>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>00<sup style="font-size: 20px">%</sup></h3>

                            <p>Total Income </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">



                            <?php
                            $a = "SELECT * FROM coming_soon";
                            $a_run = mysqli_query($conn, $a);
                            if ($total = mysqli_num_rows($a_run)) {
                                echo "<h3>$total</h3>";
                            }
                            ?>
                            <p>New Queries</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href=".php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>00</h3>
                            <p>Tickets</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
</div>

<?php
include("includes/Footer.php")
?>


<?php ob_end_flush(); ?>


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