<?php
include("includes/Header.php");
include("includes/Sidebar.php");
include("config/dbcon.php");
include("includes/Topbar.php");

?>
<!-- <link rel="stylesheet" href="assets/style.css"> -->

<div class="content-wrapper">




  <section class="content mt-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>New Course
                <!-- <a href="" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1"> Add Course +</a> -->
              </h4>
            </div>
            <div class="card-body">
              <div id="accordion">
                <!-- Accordion Item 2 -->
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-block pink-color collapsed mx-auto col-12" id="openPopupBtn" data-target="#collapseTwo" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                        Add Course +
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <!-- Content for Accordion Item 2 goes here -->
                      <form action="config/course_cate.php" method="post">
                        <div class="form-group mb-3 mt-3">
                          <label for="category">Course Category</label>
                          <select class="form-control" id="category" name="category" aria-placeholder="Name">
                            <option value="" disabled selected>Select a Course Category</option>
                            <?php
                            $query = "SELECT * FROM coming_soon";
                            $query_run = mysqli_query($conn, $query);

                            if ($query_run) {
                              while ($row = mysqli_fetch_assoc($query_run)) {
                                $email = $row['Email'];
                            ?>
                                <option value="<?php echo $email; ?>"><?php echo $email; ?></option>
                            <?php
                              }
                            } else {
                              echo "Error in query: " . mysqli_error($conn);
                            }
                            ?>
                          </select>
                        </div>

                        <div class="form-group mb-3">
                          <label for="categoryName">Course Name</label>
                          <input type="text" class="form-control" id="categoryName" name="name" placeholder="Name">
                        </div>

                        <div class="form-group mb-3">
                          <label for="productDescription">Course Description</label>
                          <input type="text" class="form-control" id="productDescription" name="P_D" placeholder="Description">
                        </div>

                        <div class="container container12">
                          <div class="form-group mb-3 highlight-container">
                            <label for="productSize">Course Highlight 1</label>
                            <input type="text" class="form-control" id="productSize" name="size" placeholder="">
                          </div>
                          <button type="button" class="btn btn-success float-right" id="addHighlightBtn">Add Highlight</button>
                        </div>

                        <button type="button" class="btn btn-success pink-color float-left my-4 d-block" id="addRowBtn">Add Video</button>

                        <div class="container mt-4" id="variantsContainer"> <!-- Removed d-none class to make it visible -->
                          <div class="form-group mb-3 card-body border">
                            <div class="row">
                              <div class="col-md-6">
                                <label for="videoFile">Choose Video:</label>
                                <input type="file" class="form-control-file" id="videoFile" name="videoFile" accept="video/*">
                              </div>
                              <div class="col-md-6">
                                <div class="mb-3">
                                  <label for="videoName">Video Name:</label>
                                  <input type="text" class="form-control" id="videoName" name="videoName">
                                </div>

                                <div class="mb-3">
                                  <label for="videoDescription">Description:</label>
                                  <textarea class="form-control" id="videoDescription" name="videoDescription"></textarea>
                                </div>

                                <div class="container container121">
                                  <div class="form-group highlight-container">
                                    <label for="videoHighlights">Video Highlights:</label>
                                    <input type="text" class="form-control" id="videoHighlights1" name="videoHighlights">
                                  </div>

                                  <button type="button" class="btn btn-success float-right" id="addHighlightBtn1">Add Highlight</button>
                                </div>
                              </div>
                              <button type="button" class="btn btn-success pink-color float-left my-4 d-block" id="addAnotherVideoBtn">Add Another Video</button>
                            </div>
                          </div>
                        </div>


                        <div class="card-footer">
                          <button type="submit" class="btn pink-color float-right" name="submit-cate">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Modal for popup messages -->
  <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog h-75" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="popupModalLabel">VENDOR AGREEMENT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="scollbar-text" style=" max-height: 300px; overflow-y: auto;">

            <h5 style="color:black;font-weight:500;"> <b>
               1. Services
              </b>
            </h5>
            <p>
              1.1 The Vendor shall provide the Courses to the Company on the terms and conditions set forth herein.
            </p>
            <p>
              1.2 The Vendor shall provide the Courses in a timely and professional manner.

            </p>
            <p>
              1.3 The Vendor shall maintain the Courses up-to-date and accurate.

            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;">2. <b>
                Compensation
              </b>
            </h5>
            <p>
              2.1 The Company shall pay the Vendor a royalty for each Course provided by the Vendor to the Company. The royalty rate shall be fixed at 5% of revenue generated by the Company from the sale of each Course.
            </p>
            <p>
              2.2 The Company shall pay the Vendor the royalty on weekly basis at the end of each week in which the Company generates revenue from the sale of each Course.
            </p>

            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                3. Term and Termination
              </b>
            </h5>
            <p>
              3.1 The term of this Agreement shall commence on the date the vendor accepts this agreement and shall continue for a period of 3 years ("Initial Term") unless earlier terminated as provided herein. Unless either party provides written notice of non-renewal at least 30 days prior to the expiration of the Initial Term, this Agreement shall automatically renew for successive one-year periods.
            </p>
            <p>
              3.2 Either party may terminate this Agreement for cause upon 30 days' {thirty days} written notice to the other party if the other party materially breaches any provision of this Agreement and fails to cure such breach within 15 days {fifteen days} after written notice thereof.

            </p>
            <p>
              3.3 Either party may terminate this Agreement immediately upon written notice to the other party if the other party becomes insolvent or files for bankruptcy protection.

            </p>
            <p>
              3.4 Either party may terminate this Agreement upon 30 days written notice to the other party if they wish to not continue the business.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                4. Confidentiality
              </b>
            </h5>
            <p>
              4.1 This Agreement shall be Unilateral, whereas, the company shall have sole ownership of the Software and every course/material/data uploaded onto the software with the vendor being prohibited from disclosing confidential and proprietary information that is to be released by the company to run a smooth business.
            </p>
            <p>
              4.2 The Vendor shall not disclose any Confidential Information of the Company to any third party without the prior written consent of the Company.


            </p>
            <p>
              4.3 The Vendor shall use the same degree of care to protect the Confidential Information of the Company as it uses to protect its own confidential information, but in no event less than a reasonable degree of care.

            </p>
            <p>
              4.4 The Vendor shall not use any Confidential Information of the Company for any purpose other than providing the Courses to the Company.
            </p>
            <p>
              4.5 For the purposes of this Agreement, the term “Confidential Information” shall include, but not be limited to, software products, software source code, or any related codes in all formats, business plans, financial statements, customers or users, analytical data, documentation, and correspondences that have not otherwise been made publicly available.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                However, Confidential Information does not include:

              </b>
            </h5>
            <p>
              (a) information generally available to the public; </p>
            <p>
              (b) widely used programming practices or algorithms;

            </p>
            <p>
              (c) information rightfully in the possession of the vendor prior to signing this Agreement; and

            </p>
            <p>
              (d) information independently developed without the use of any of the provided Confidential Information.
            </p>
            <p>

              4.6 The confidentiality obligations set forth herein shall survive the termination of this Agreement for a period of five years.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                5. Intellectual Property
              </b>
            </h5>
            <p>
              5.1 Vendor agrees that any intellectual property created in the course of providing the Courses shall be the exclusive property of Company.
            </p>

            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                6. MARKETING RESTRICTIONS </b>
            </h5>
            <p>
              6.1 Vendor agrees not to independently market the courses provided under this Agreement on any other platform, company, or through self-sales without prior written consent from Company
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                7. ACCESSIBILITY ON EXTERNAL PLATFORMS

              </b>
            </h5>
            <p>
              7.1 Vendor shall ensure that neither the marketing nor the course content of the courses provided under this Agreement is made available on any social media platform, such as YouTube, Instagram, or any other external websites without prior written consent from Company.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                8. CONTENT MODIFICATIONS
              </b>
            </h5>
            <p>
              8.1 Any additions or deletions to the content of the courses shall be discussed and approved by Company before implementation. The Vendor shall submit proposed modifications in writing, and Company shall respond within thirty days with either approval or specific feedback.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                9. OPPORTUNITY PARTICIPATION RESTRICTION
              </b>
            </h5>
            <p>
              9.1 Upon signing this Agreement, Vendor agrees not to join any opportunities related to the courses without prior discussion and approval from Company.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                10. CANCELLATION CLAUSE

              </b>
            </h5>
            <p>
              10.1 If the course fails to sell due to inadequate content or a lack of interest and understanding among students, Company reserves the right to cancel this Agreement.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                11. STUDENT SUPPORT
              </b>
            </h5>
            <p>
              11.1 For any problems or doubts students encounter in the course, Company shall provide doubt-clearing classes and a comments box. Vendor shall be required to conduct classes hence Vendor must allocate time for it. Classes will be conducted through the website, and there will be no additional payment or charges, as Vendor is also a part of the business and needs to contribute effort along with income.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                12. EXCLUSIVITY CLAUSE
              </b>
            </h5>
            <p>
              12.1 Vendor is exclusively affiliated with Company's platform as a royalty partner for courses; other options are not permissible within Company's platform. Violation of this exclusivity clause may result in termination of this Agreement and may subject the Vendor to legal remedies available to Company.
            </p>
            <p>
              12.2 If there are seminars or other options within Company's platform requiring Vendor participation, Company may notify the Vendor of any associated charges. The Vendor agrees to make timely payments as specified by Company in order to participate.

            </p>

            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                13. Taxes
              </b>
            </h5>
            <p>
              13.1 All statutory taxes/levies shall be borne and paid by the Vendor to the Company or as may be prescribed by law from time to time. At time of payment of the fees, the company shall deduct TDS as may be prescribed by law. Necessary TDS certificate will be issued and provided by Company to the Vendor. </p>

            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                14. Non-Solicitation
              </b>
            </h5>
            <p>
              14.1 The Vendor during the term of this agreement and for a period of five year following its termination or expiration, shall not, without the previous written consent of the company, employ or contract the services of any person who was employed by the company at any time during a period of 60 months preceding the date on which the offer for employment is made.

            </p>
            <p>
              14.2 During the term of this agreement and for a duration of five years following its termination or expiration, the Vendor agree that, without prior written consent from the company, directly or indirectly solicit, approach, or engage in any business transactions with any consumer who has had a commercial relationship with the company within the 60 months after the termination or expiration date of this agreement.
            </p>

            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                15. Indemnification
              </b>
            </h5>
            <p>
              15.1 The Vendor shall indemnify, defend, and hold harmless the Company, its officers, directors, employees, agents, and representatives from and against any and all losses, damages, liabilities, costs, and expenses (including reasonable attorneys' fees) arising out of or in connection with any claim, demand, or action arising out of or in connection with the Vendor's breach of this Agreement or the Vendor's negligence or wilful misconduct.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                16. Notices </b>
            </h5>
            <p>
              16.1 All notices and other communications hereunder shall be in writing and shall be deemed to have been duly given when delivered via electronic mails or in person, upon the first business day following deposit in the India mail, postage prepaid, certified, or registered, return receipt requested, addressed to the other party.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                17. Governing Law

              </b>
            </h5>
            <p>
              17.1 This Agreement shall be governed by and construed in accordance with the laws of the State of Delhi, INDIA. Any dispute, controversy, or claim arising out of or relating to this Agreement or the breach, termination, or invalidity thereof shall be settled by arbitration in accordance with the rules of arbitration of the Delhi International Arbitration Centre (DIAC). </p>
            <p>
              17.2 The arbitration shall be conducted in Delhi, and the language of the arbitration shall be English.

            </p>
            <p>
              17.3 The Company shall appoint a single arbitrator for the arbitration proceedings, and the decision of the arbitrator shall be final and binding on both parties.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                18. Entire Agreement </b>
            </h5>
            <p>
              18.1 This Agreement constitutes the entire agreement between the parties with respect to the subject matter hereof and supersedes all prior or contemporaneous communications, representations, or agreements, whether oral or written.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                19. Amendment
              </b>
            </h5>
            <p>
              19.1 This Agreement may be amended only by a written instrument executed by both parties.

            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                20. Waiver

              </b>
            </h5>
            <p>
              20.1 No waiver of any provision of this Agreement shall be effective unless in writing and signed by both parties </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                21. Severability
              </b>
            </h5>
            <p>
              21.1 If any provision of this Agreement is held to be invalid or unenforceable, such provision shall be struck from this Agreement and the remaining provisions shall remain in full force and effect. </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
                22. Counterparts

              </b>
            </h5>
            <p>
              22.1 This Agreement may be executed in one or more counterparts, each of which shall be deemed an original, but all of which together shall constitute one and the same instrument.
            </p>
            <br><br>
            <h5 style="color:black;font-weight:500;"> <b>
            23. FORCE MAJEURE

              </b>
            </h5>
            <p>
            23.1 Neither the Client, nor the Agency, shall be liable for any default, delay or lapse occurring due to events beyond their control including riot, strike, theft, war, or acts of God and/or nature.            </p>
            <br>



            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="enableSubmit">
              <label class="form-check-label" for="enableSubmit">I have read <a href="#">T&C</a> </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="confirmAddCourse" data-target="#collapseTwo" disabled>Accept</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
          <div class="card-header">
            <h2 class="text-center">Your Course</h2>

          </div>
          <div class="card-header">
            <div id="accordion">
              <?php
              $query = "SELECT * FROM `course_category`";
              $query_run = mysqli_query($conn, $query);

              if ($query_run && mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
              ?>
                  <!-- Accordion Item -->
                  <div class="card">
                    <div class="card-header" id="heading">
                      <h5 class="mb-0">
                        New Course
                        <button class="btn pink-color collapsed float-right" data-toggle="collapse" data-target="#collapse<?php echo $row['Name'] ?>" aria-expanded="false" aria-controls="collapse">
                          View Course
                        </button>
                      </h5>
                    </div>

                    <div id="collapse<?php echo $row['Name']; ?>" class="collapse" aria-labelledby="heading<?php echo $row['Name']; ?>" data-parent="#accordion">
                      <div class="card-body">
                        <!-- Content for Accordion Item goes here -->
                        <form action="config/vendor-login.php" method="post">
                          <div class="form-group mb-3">
                            <label for="categoryName">Course Name</label>
                            <input type="text" class="form-control" id="categoryName" placeholder="Name" name="name" value="<?php echo $row['Name']; ?>" disabled>
                          </div>
                          <div class="form-group mb-3">
                            <label for="productDescription">Course Description</label>
                            <input type="text" class="form-control" id="productDescription" placeholder="Description" value="<?php echo $row['C_des']; ?>" disabled>
                          </div>
                          <div class="form-group mb-3">
                            <label for="productSize">Course Highlight</label>
                            <input type="text" class="form-control" id="productSize" placeholder="Size" value="<?php echo $row['C_high']; ?>" disabled>
                          </div>

                          <!-- Video Section -->
                          <div class="container mt-4">
                            <h2>Videos</h2>
                            <div class="row">
                              <!-- First Column -->
                              <div class="col-md-4">
                                <div class="form-group mb-3 card-body border">
                                  <label for="videoFile1">Video1:</label>
                                  <button type="button" class="btn btn-success float-right playBtn"><b>Play</b></button>
                                  <!-- Rest of your video content -->
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

            <script>
              // Add event listener to play buttons
              var playButtons = document.querySelectorAll('.playBtn');
              playButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                  // Handle play button click, e.g., show video player
                });
              });
            </script>

            <div id="accordion">


              <!-- Accordion Item 2 -->
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0"> New Course
                    <button class="btn  pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                      View Course
                    </button>
                  </h5>
                </div>

                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <!-- Content for Accordion Item 2 goes here -->
                    <form action="config/testing.php" method="post" >
                      <!-- <div class="form-group mb-3 mt-3">
                          <label for="category">Course Category</label>
                          <select class="form-control" id="category" aria-placeholder="Name" name="category">
                            <option value="" disabled selected>Select a Course Category</option>
                            <?php
                            //  $query = "SELECT * FROM coming_soon";
                            // $query_run = mysqli_query($conn, $query);

                            // if ($query_run) {
                            //   while ($row = mysqli_fetch_assoc($query_run)) {
                            //     $email = $row['Email'];
                            // 
                            ?>
                            //     <option value="<?php echo $email; ?>"><?php echo $email; ?></option>
                            // <?php
                                //   }
                                // } else {
                                //   echo "Error in query: " . mysqli_error($conn);
                                // }
                                ?>
                          </select>
                        </div> -->

                      <div class="form-group mb-3">
                        <label for="categoryName">Course Name</label>
                        <input type="text" class="form-control" id="categoryName" placeholder=" Name" name="name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="productDescription">Product Description</label>
                        <input type="text" class="form-control" id="productDescription" placeholder="Description" name="P_D">
                      </div>
                      <!-- <div class="form-group mb-3">
          <label for="productVariants">Course Variants</label>
          <input type="text" class="form-control" id="productVariants" placeholder="Product variants" name="variants">
        </div> -->
                      <div class="form-group mb-3">
                        <label for="productSize">Product Size</label>
                        <input type="text" class="form-control" id="productSize" placeholder="Product size" name="size">
                      </div>
                      <!-- <div class="form-group mb-3">
                        <label for="productPrice">Product Price</label>
                        <input type="text" class="form-control" id="productPrice" placeholder="Price" name="price">
                      </div> -->
                      <div class="form-group mb-3 card-body border">
                        <label for="videoFile">Choose Video:</label>
                        <input type="file" class="form-control-file" id="videoFile" name="videoFile" accept="video/*" required>
                        <button type="button" class="btn btn-success float-right" id="addRowBtn"><b>+</b></button>
                      </div>


                      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                      <button type="submit" class="btn  float-right" name="submit">Save</button>
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
                  <h5 class="mb-0"> New Course
                    <button class="btn  pink-color collapsed float-right" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                      View Course
                    </button>
                  </h5>
                </div>

                <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <!-- Content for Accordion Item 2 goes here -->
                    <form action="ProductDB.php" method="post">
                      <!-- <div class="form-group mb-3 mt-3">
                          <label for="category">Course Category</label>
                          <select class="form-control" id="category" aria-placeholder="Name" name="category">
                            <option value="" disabled selected>Select a Course Category</option>
                            <?php
                            //  $query = "SELECT * FROM coming_soon";
                            // $query_run = mysqli_query($conn, $query);

                            // if ($query_run) {
                            //   while ($row = mysqli_fetch_assoc($query_run)) {
                            //     $email = $row['Email'];
                            // 
                            ?>
                            //     <option value="<?php echo $email; ?>"><?php echo $email; ?></option>
                            // <?php
                                //   }
                                // } else {
                                //   echo "Error in query: " . mysqli_error($conn);
                                // }
                                ?>
                          </select>
                        </div> -->

                      <div class="form-group mb-3">
                        <label for="categoryName">Course Name</label>
                        <input type="text" class="form-control" id="categoryName" placeholder=" Name" name="name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="productDescription">Product Description</label>
                        <input type="text" class="form-control" id="productDescription" placeholder="Description" name="P_D">
                      </div>
                      <!-- <div class="form-group mb-3">
          <label for="productVariants">Course Variants</label>
          <input type="text" class="form-control" id="productVariants" placeholder="Product variants" name="variants">
        </div> -->
                      <div class="form-group mb-3">
                        <label for="productSize">Product Size</label>
                        <input type="text" class="form-control" id="productSize" placeholder="Product size" name="size">
                      </div>
                      <div class="form-group mb-3">
                        <label for="productPrice">Product Price</label>
                        <input type="text" class="form-control" id="productPrice" placeholder="Price" name="price">
                      </div>
                      <div class="form-group mb-3 card-body border">
                        <label for="videoFile">Choose Video:</label>
                        <input type="file" class="form-control-file" id="videoFile" name="videoFile" accept="video/*" required>
                        <button type="button" class="btn btn-success float-right" id="addRowBtn"><b>+</b></button>
                      </div>


                      <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                      <button type="submit" class="btn  float-right" name="submit">Save</button>
                    </form>
                    <!-- <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolor officiis magnam placeat necessitatibus nemo, odit expedita vel commodi quidem minima blanditiis suscipit nisi, totam eius assumenda! Ut, a ad.</h1> -->
                  </div>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>








</div>





<!-- Button trigger modal -->
<!-- <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->






<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="ProductDB.php" method="post">
          <div class="form-group mb-3 mt-3">
            <label for="category">Product Category</label>
            <select class="form-control" id="category" aria-placeholder="Name" name="category">
              <option value="" disabled selected>Select a Product Category</option>
              <?php
              // $query = "SELECT * FROM coming_soon";
              // $query_run = mysqli_query($conn, $query);

              // if ($query_run) {
              // while ($row = mysqli_fetch_assoc($query_run)) {
              // $email = $row['Email'];
              ?>
                  <option value="<?php echo $email; ?>"><?php echo $email; ?></option>
              <?php
              // }
              // } else {
              // echo "Error in query: " . mysqli_error($conn);
              // }
              ?>
            </select>
          </div>

          <div class="form-group mb-3">
            <label for="categoryName">Product Name</label>
            <input type="text" class="form-control" id="categoryName" placeholder=" Name" name="name">
          </div>
          <div class="form-group mb-3">
            <label for="productDescription">Product Description</label>
            <input type="text" class="form-control" id="productDescription" placeholder="P_D" name="P_D">
          </div>
          <div class="form-group mb-3">
            <label for="productVariants">Product Variants</label>
            <input type="text" class="form-control" id="productVariants" placeholder="Product variants" name="variants">
          </div>
          <div class="form-group mb-3">
            <label for="productSize">Product Size</label>
            <input type="text" class="form-control" id="productSize" placeholder="Product size" name="size">
          </div>
          <div class="form-group mb-3">
            <label for="productPrice">Product Price</label>
            <input type="text" class="form-control" id="productPrice" placeholder="Price" name="price">
          </div>
          <div class="form-group mb-3">
            <label for="productImages">Product Images</label>
            <input type="file" class="form-control-file" id="productImages" name="images[]" multiple>
          </div>

          <button type="submit" class="btn  float-right" name="submit">Save</button>
        </form>
      </div>


    </div>
  </div>
</div> -->






<script>
  document.getElementById('openPopupBtn').addEventListener('click', function() {
    $('#popupModal').modal('show');
  });

  document.getElementById('confirmAddCourse').addEventListener('click', function() {
    $('#popupModal').modal('hide');
    // Open the accordion
    $('#collapseTwo').collapse('show');
  });


  document.getElementById('enableSubmit').addEventListener('change', function() {
    var submitButton = document.getElementById('confirmAddCourse');
    submitButton.disabled = !this.checked;
  });
</script>



<?php
include("includes/Footer.php")
?>

















