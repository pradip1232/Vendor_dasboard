<style>
  .nav-item {
    position: relative;
    /* display: inline-block; */
  }

  .tooltip {
    visibility: hidden;
    width: 200px;
    background-color: #b65172;
    color: #fff;
    text-align: center;
    border-radius: 8px;
    padding: 10px;
    position: fixed;
    top: 50%;
    left: 20%;
    transform: translate(-50%, -50%);
    z-index: 1;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .nav-item:hover .tooltip {
    visibility: visible;
    opacity: 1;
  }
</style>



<!-- Main Sidebar Container -->

<link rel="stylesheet" href="../assets/style.css">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="./dashbaord.php" class="brand-link">
    <!-- <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Dashboard</a>
        </div>
      </div> -->

    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="dashbaord.php" class="nav-link my-account" style="background-color:#b65172;">
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <!-- <a href="my-profile.php" class="nav-link nav-item-disabled"> -->
          <i class="nav-icon fas fa-user"></i>

          <button type="button" class="btn " style="color:white;" onclick="window.location.href='my-profile.php'">
            My Account

          </button>
          <!-- </a> -->
        </li>
        <li class="nav-item">
          <button type="button"  class="btn" style="color: white;" onclick="window.location.href='course.php'">
            My Course
          </button>
          <!-- <div class="tooltip">You are not approved for the Q/A Section. Once you receive approval from the admin, it will be unlocked</div>
          <img src="assets/img/security.png" alt="" style="width: 20px; height: 20px; cursor: pointer;"> -->
        </li>

        <li class="nav-item">
          <button type="button" disabled class="btn" style="color: white;" onclick="window.location.href='income.php'">
            My Income
          </button>
          <div class="tooltip">You are not approved for the Q/A Section. Once you receive approval from the admin, it will be unlocked</div>
          <img src="assets/img/security.png" alt="" style="width: 20px; height: 20px; cursor: pointer;">
        </li>

        <li class="nav-item">
          <button type="button" disabled class="btn" style="color: white;" onclick="window.location.href='QA-section.php'">
            Q/A Section
          </button>
          <div class="tooltip">You are not approved for the Q/A Section. Once you receive approval from the admin, it will be unlocked</div>
          <img src="assets/img/security.png" alt="" style="width: 20px; height: 20px; cursor: pointer;">
        </li>
        <li class="nav-item">

          <button type="button" class="btn " style="color:white;" onclick="window.location.href='suggestion&complaint.php'">

            Suggestion/Complaint

          </button>

        </li>
        <!-- <li class="nav-item">
           <a href="suggestion&complaint.php" class="btn pink-color " disabled>
             <button type="button" class="btn pink-color" id="confirmAddCourse" data-target="#collapseTwo" disabled style="border:none;">Accept</button>

           </a>
         </li> -->
      </ul>
    </nav>

    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>