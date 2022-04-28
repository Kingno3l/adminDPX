<?php
    include ('../includes/header.php');
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php
            include ('../includes/sidebar.php');
        ?>

            <!-- Navbar -->
            <?php
             include ('../includes/navbar.php');
          ?>
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> History </h4>
                    <!-- Icon Dropdown -->
                    <!-- Icon Dropdown -->


                    <!-- Dropdown with icon -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <small class="text-light fw-semibold">Per Page</small>
                        <div class="demo-inline-spacing">
                            <div class="btn-group" id="dropdown-icon-demo">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bx bx-menu"></i> 10
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i
                                                class="bx bx-chevron-right scaleX-n1-rtl"></i>10</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i
                                                class="bx bx-chevron-right scaleX-n1-rtl"></i>50</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i
                                                class="bx bx-chevron-right scaleX-n1-rtl"></i>100</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center"><i
                                                class="bx bx-chevron-right scaleX-n1-rtl"></i>All</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>


                    <!-- Basic Bootstrap Table -->
                    <div class="card">
                        <h5 class="card-header">Table Basic</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Caller ID</th>
                                        <th>Calls</th>
                                        <th>Unit Used</th>
                                        <th>Phone Groups</th>
                                        <th>No. Recepients</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">


                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs
                                                Project</strong></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="">2</td>
                                        <td class="">Valour Cell</td>
                                        <td class="">250</td>
                                        <td><span class="badge bg-label-info me-1 bx bx-info-circle">info</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Pagination-->
                            <div class=" mb-4">
                                <!-- Basic Pagination -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-light fw-semibold">Showing 1 to 1 of 1 entries</small>
                                            <div class="demo-inline-spacing">
                                                <!-- Basic Pagination -->
                                                <nav aria-label="Page navigation">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item first">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevrons-left"></i></a>
                                                        </li>
                                                        <li class="page-item prev">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevron-left"></i></a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript:void(0);">1</a>
                                                        </li>
                                                        <li class="page-item next">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevron-right"></i></a>
                                                        </li>
                                                        <li class="page-item last">
                                                            <a class="page-link" href="javascript:void(0);"><i
                                                                    class="tf-icon bx bx-chevrons-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!--/ Basic Pagination -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination Sizes -->

                        </div>
                    </div>
                    <!--/ Basic Bootstrap Table -->

                </div>
                <!-- / Content -->

                <!-- Footer -->
            
                <?php
            include ('../includes/footer.php');
        ?>