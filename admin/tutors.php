<?php
include 'includes/session.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Superadmin</title>
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

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'includes/navbar.php'; ?>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Tutors</h3><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                            role="button" href="add-tutor.php" style="background: #023e8a;"><i
                                class="fas fa-user-plus fa-sm text-white-50"></i>&nbsp;Add Tutor</a>
                    </div>
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
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold">Tutor Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label>Show&nbsp;<select
                                                class="form-control form-control-sm custom-select custom-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input
                                                type="search" class="form-control form-control-sm"
                                                aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Student No.</th>
                                            <th>Campus</th>
                                            <th>No. Modules Assigned</th>
                                            <th>Total Sessions conducted</th>
                                            <th>Cellphone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar3.jpeg">George Mahlangu</td>
                                            <td>215266397</td>
                                            <td>Soshanguve</td>
                                            <td>2</td>
                                            <td>26</td>
                                            <td>0823207253</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar2.jpeg">Mzobanzi Majola</td>
                                            <td>218573819</td>
                                            <td>Soshanguve</td>
                                            <td>3</td>
                                            <td>32</td>
                                            <td>0633892472</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar3.jpeg">Mpho Thobejane</td>
                                            <td>214789300</td>
                                            <td>Emalahleni</td>
                                            <td>3</td>
                                            <td>27<br></td>
                                            <td>0829956321</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar4.jpeg">Mandisa Hlophe</td>
                                            <td>216153000</td>
                                            <td>Polokwane</td>
                                            <td>2</td>
                                            <td>16<br></td>
                                            <td>0839658820</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar5.jpeg">Fabrice Khonde</td>
                                            <td>213548662</td>
                                            <td>Soshanguve</td>
                                            <td>3</td>
                                            <td>25<br></td>
                                            <td>0724869000</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle mr-2" width="30" height="30"
                                                    src="assets/img/avatars/avatar1.jpeg">Sebenzile Maluleke</td>
                                            <td>216235541</td>
                                            <td>Polokwane</td>
                                            <td>2</td>
                                            <td>15</td>
                                            <td>0829912366</td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Student No.</strong></td>
                                            <td><strong>Campus</strong></td>
                                            <td><strong>No. Modules Assigned</strong></td>
                                            <td><strong>Total Sessions conducted</strong></td>
                                            <td><strong>Cellphone</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 6 of 30</p>
                                </div>
                                <div class="col-md-6">
                                    <nav
                                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                        aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Super admin 2021</span></div>
                </div>
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