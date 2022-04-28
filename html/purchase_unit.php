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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Purchase Unit(s) </h4>
                        <div class="row">
                            <!-- Basic -->

                            <!-- Basic with Icons -->
                            <div class="col-xxl">
                                <div class="card mb-4 ">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0 mx-auto">Purchase Unit(s)</h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-icon-default-company">Payment Amount</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-company2"
                                                            class="input-group-text"><i class="bx bx-money"></i></span>
                                                        <input type="number" id="basic-icon-default-company"
                                                            class="form-control" placeholder="12345"
                                                            aria-label="ACME Inc."
                                                            aria-describedby="basic-icon-default-company2" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label"
                                                    for="basic-icon-default-email">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i
                                                                class="bx bx-envelope"></i></span>
                                                        <input type="text" id="basic-icon-default-email"
                                                            class="form-control" placeholder="john.doe"
                                                            aria-label="john.doe"
                                                            aria-describedby="basic-icon-default-email2" />
                                                        <span id="basic-icon-default-email2"
                                                            class="input-group-text">@example.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 form-label"
                                                    for="basic-icon-default-phone">Customer
                                                    ID</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                                class="bx bx-id-card"></i></span>
                                                        <input type="text" id="basic-icon-default-phone"
                                                            class="form-control phone-mask"
                                                            placeholder="a354af709f44a94f4bcd22fc2b2dd478"
                                                            aria-label="658 799 8941"
                                                            aria-describedby="basic-icon-default-phone2" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3 justify-content-end">
                                                <div class="d-grid gap-2 col-lg-10">
                                                    <button type="submit" class="btn btn-primary bx bx-lock-alt btn-lg">Pay #</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <!-- Checkbox and radio addons -->
                        </div>



                        <!-- Button with dropdowns & addons -->


                        <!-- Custom file input -->

                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
        <?php
            include ('../includes/footer.php');
        ?>