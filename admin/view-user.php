<?php

// include('../config/connect.php');
// include('../config/function.php');

session_start();
include('include/header.php');
include_once('../includes/config.php');
if (strlen($_SESSION['adminid'] == 0)) {
    header('location:logout.php');
} else {
    // for deleting user
    if (isset($_GET['id'])) {
        $adminid = $_GET['id'];
        $msg = mysqli_query($con, "delete from users where id='$adminid'");
        if ($msg) {
            echo "<script>alert('Data deleted');</script>";
        }
    }
    ?>

    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="./dashboard.php" target="_blank">
                <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Dashboard</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Services</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="service.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Gig</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white " href="view-collection.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Collection's</span>
                    </a>
                </li>
                <!-- Useres -->
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Users</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="user.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">View User's</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="user.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Edit User</span>
                    </a>
                </li> -->
                <!-- Users End -->
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Payment</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/billing.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Billing</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100"
                    href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade
                    to pro</a>
            </div>
        </div> -->
    </aside>
    <!-- Side Bar End -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Page</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">User</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Mannage Users</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control" id="datatablesSimple">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                                href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard">Online Builder</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="logout.php" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign Out</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                            fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">

            </div>

            <div class="row mb-4">
                <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                    <div class="card">

                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <div class="row">
                                    <!-- <div class="col-md-12"> -->
                                    <!-- <div class="card"> -->

                                    <div class="card-body">
                                        <div class="card my-4">
                                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                                    <h6 class="text-white text-capitalize ps-3">Mannage Users</h6>
                                                </div>
                                            </div>
                                            <div class="card-body px-0 pb-2">
                                                <div class="table-responsive p-0">
                                                    <table class="table align-items-center justify-content-center mb-0" >
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                                    Sr. No</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    First Name</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                </th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Last Name</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                                    Email</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Contact</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Reg.Date</th>
                                                                <th
                                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                                    Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $ret = mysqli_query($con, "select * from users");
                                                            $cnt = 1;
                                                            while ($row = mysqli_fetch_array($ret)) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                            <div class="my-auto">
                                                                                <h6 class="mb-0 text-sm">
                                                                                    <?php echo $cnt; ?>
                                                                                </h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">
                                                                            <?php echo $row['fname']; ?>
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex px-2">
                                                                    <td>
                                                                        <p class="text-sm font-weight-bold mb-0">
                                                                            <?php echo $row['lname']; ?>
                                                                        </p>
                                                                    </td>
                                                    </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?php echo $row['email']; ?>
                                                        </p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?php echo $row['contactno']; ?>
                                                        </p>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <p class="text-sm font-weight-bold mb-0">
                                                            <?php echo $row['posting_date']; ?>
                                                        </p>
                                                    </td>
                                                    <!--  -->
                                                    <!-- <td class="align-middle">
                                                                        <button class="btn btn-link text-secondary mb-0" href="#    ">
                                                                            <i class="fa fa-ellipsis-v text-xs"></i>
                                                                        </button>
                                                                    </td> -->
                                                    <td>

                                                        <a href="user-profile.php?uid=<?php echo $row['id']; ?>">
                                                            <i class="fas fa-edit"></i></a>
                                                        <a href="manage-users.php?id=<?php echo $row['id']; ?>"
                                                            onClick="return confirm('Do you really want to delete');"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                    </tr>
                                                    <?php $cnt = $cnt + 1;
                                                            } ?>
                                                <!-- <tr>
                                                            <td>
                                                                <div class="d-flex px-2">
                                                                    <div class="my-auto">
                                                                        <h6 class="mb-0 text-sm">Asana</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-sm font-weight-bold mb-0">$2,500</p>
                                                            </td>
                                                            <td>
                                                            <div class="d-flex px-2">
                                                                    <div>
                                                                        <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle text-center">
                                                            <p class="text-sm font-weight-bold mb-0">Visible</p>
                                                            </td>
                                                            <td class="align-middle">
                                                                <button class="btn btn-link text-secondary mb-0">
                                                                    <i class="fa fa-ellipsis-v text-xs"></i>
                                                                </button>
                                                            </td>
                                                        </tr> -->
                                                <!-- list 1 End -->

                                                </tbody>
                                                </table>
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
        
        </div>
    </main>


        

    <?php

    include('include/footer.php');
}
?>
