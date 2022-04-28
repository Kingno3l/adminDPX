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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Settings </h4>
                    <!-- Card Layout -->
                    <!-- Basic Layout -->
                    <div class="row">

                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Account Settings</h5>
                                    <small class="text-muted float-end">Settings</small>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                <input type="text" id="basic-icon-default-email" class="form-control"
                                                    placeholder="john.doe" aria-label="john.doe"
                                                    aria-describedby="basic-icon-default-email2" />
                                                <span id="basic-icon-default-email2"
                                                    class="input-group-text">@example.com</span>
                                            </div>
                                            <div class="form-text">You can use letters, numbers & periods</div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                        class="bx bx-phone"></i></span>
                                                <input type="text" id="basic-icon-default-phone"
                                                    class="form-control phone-mask" placeholder="658 799 8941"
                                                    aria-label="658 799 8941"
                                                    aria-describedby="basic-icon-default-phone2" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-fullname">Full
                                                Name</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                        class="bx bx-user"></i></span>
                                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                                    placeholder="John Doe" aria-label="John Doe"
                                                    aria-describedby="basic-icon-default-fullname2" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-message">Address</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                                        class="bx bx-building-house" ></i></span>
                                                <textarea id="basic-icon-default-message" class="form-control" placeholder="Plot 244, Corner Shop, Garki 2, Abuja"
                                                    aria-label="Hi, Do you have a moment to talk Joe?"
                                                    aria-describedby="basic-icon-default-message2"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-phone">Birthday</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                        class="bx bx-calender"></i></span>
                                                <input type="date" id="basic-icon-default-phone"
                                                    class="form-control phone-mask" placeholder=""
                                                    aria-label="658 799 8941"
                                                    aria-describedby="basic-icon-default-phone2" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-icon-default-phone">Phone No 2</label>
                                            <div class="input-group input-group-merge">
                                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                        class="bx bx-phone"></i></span>
                                                <input type="text" id="basic-icon-default-phone"
                                                    class="form-control phone-mask" placeholder="658 799 8941"
                                                    aria-label="658 799 8941"
                                                    aria-describedby="basic-icon-default-phone2" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Change Password</h5>
                                    <small class="text-muted float-end">Password</small>
                                </div>
                                <div class="card-body">
                                    <form>
                                    <div class="form-password-toggle">
                                            <div class="input-group">
                                                <input type="password" class="form-control"
                                                    id="basic-default-password12" placeholder="Password"
                                                    aria-describedby="basic-default-password2" />
                                                <span id="basic-default-password2"
                                                    class="input-group-text cursor-pointer"><i
                                                        class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-password-toggle">
                                            <div class="input-group">
                                                <input type="password" class="form-control"
                                                    id="basic-default-password12" placeholder="Confirm Password"
                                                    aria-describedby="basic-default-password2" />
                                                <span id="basic-default-password2"
                                                    class="input-group-text cursor-pointer"><i
                                                        class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div>
                
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?php
            include ('../includes/footer.php');
        ?>