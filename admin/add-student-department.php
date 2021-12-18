<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Superadmin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include 'includes/menubar.php'; ?>
        <div class="d-flex flex-column" id="content-wrapper" style="margin: 0px;">
            <div id="content">
                <?php include 'includes/navbar.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Add Student</h3>
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><span>" . $_SESSION['error'] . "</span></div>";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><span>" . $_SESSION['success'] . "</span></div>";
                        unset($_SESSION['success']);
                    }
                    ?>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4" style="text-align: left;">Add a Student</h4>
                                </div>
                                <form class="user" action="add_student_no_interview.php" method="POST">
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-10" aria-describedby="emailHelp"
                                            placeholder="Initials" name="initials" required=""></div>
                                    <div class="form-group"><input required="" class="form-control form-control-user"
                                            type="text" id="exampleFirstName-2" placeholder="Last Name"
                                            name="last_name"></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-10" aria-describedby="emailHelp"
                                            placeholder="Student Number" name="student_number" required=""></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="email"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email Address" name="email" required=""></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-1" aria-describedby="emailHelp"
                                            placeholder="Contact Number" name="contact" required=""></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-1" aria-describedby="emailHelp"
                                            placeholder="Subject Codes" name="subject_code" required=""></div>
                                    <div class="form-group"><textarea class="form-control"
                                            style="border-radius: 160px;padding-left: 22px;"
                                            placeholder="Reason for Exclusion" name="reason_exclusion"></textarea></div>
                                    <div class="form-group"><textarea class="form-control"
                                            style="border-radius: 160px;padding-left: 22px;"
                                            placeholder="Condition for Re-admission"
                                            name="condition_admission"></textarea></div><button name="register"
                                        class="btn btn-primary btn-block text-white btn-user" type="submit">Register
                                        Student</button>
                                    <hr>
                                </form>
                                <div class="text-center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                                                since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto"></div>
                <div class="text-center my-auto copyright"><span>Copyright © Super admin 2021</span></div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>