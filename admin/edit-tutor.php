<?php
include 'includes/session.php';

$conn = $pdo->open();

$studentNum = $_GET['studentNum'];
$stmt = $conn->prepare("SELECT * FROM tutor WHERE studentNum=:student");
$stmt->execute(['student' => $studentNum]);
$student = $stmt->fetch();

$pdo->close();

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
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'includes/navbar.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Edit Tutor</h3>
                    <div class="row mb-3">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col">
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
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold"></p>
                                        </div>
                                        <div class="card-body">
                                            <form action="register-tutor.php" method="POST">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username"><strong>First
                                                                    Name</strong></label><input
                                                                value='<?php echo $student['firstname']; ?>' required=""
                                                                class="form-control" type="text" id="username"
                                                                placeholder="First Name" name="firstname"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="email"><strong>Last
                                                                    Name</strong><br></label><input
                                                                value='<?php echo $student['lastname']; ?>' required=""
                                                                class="form-control" type="text" id="email"
                                                                placeholder="Last Name" name="lastname"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="username"><strong>Student
                                                                    Number</strong><br></label><input required=""
                                                                class="form-control" type="text" id="username"
                                                                placeholder="Student Number"
                                                                value='<?php echo $student['studentNum']; ?>'
                                                                name="student-number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="username"><strong>Campus</strong><br></label><select
                                                                class="form-control" id="campus" name="campus"
                                                                value='<?php echo $student['campus']; ?>'>
                                                                <option value="undefined" selected="">Select Campus
                                                                </option>
                                                                <option value="Soshanguve">Soshanguve</option>
                                                                <option value="Emalahleni">Emalahleni</option>
                                                                <option value="Polokwane">Polokwane</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="username"><strong>Department</strong><br></label><select
                                                                class="form-control" id="department" name="department"
                                                                value='<?php echo $student['department']; ?>'>
                                                                <option value="undefined" selected="">Select Department
                                                                </option>
                                                                <option value="Computer Science">Computer Science
                                                                </option>
                                                                <option value="Computer Systems Engineering">Computer
                                                                    Systems Engineering</option>
                                                                <option value="First Year Foundation Unit">First Year
                                                                    Foundation Unit</option>
                                                                <option value="Informatics">Informatics</option>
                                                                <option value="Information Technology">Information
                                                                    Technology</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="first_name"><strong>Email</strong><br></label><input
                                                                required="" value='<?php echo $student['email']; ?>'
                                                                class="form-control" type="text" id="email"
                                                                placeholder="someone@xzy.co.za" name="email"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="last_name"><strong>Cellphone</strong><br></label><input
                                                                required="" value='<?php echo $student['cellphone']; ?>'
                                                                class="form-control" type="text" id="last_name"
                                                                placeholder="Cellphone Number" name="cellnumber"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="password"><strong>Password</strong><br></label><input
                                                                required="" value='<?php echo $student['password']; ?>'
                                                                class="form-control" type="password" id="password"
                                                                placeholder="Password" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="passwordVerify"><strong>Verify
                                                                    Password</strong><br></label><input required=""
                                                                class="form-control"
                                                                value='<?php echo $student['password']; ?>'
                                                                type="password" id="passwordVerify"
                                                                placeholder="Verify Password" name="passwordVerify">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label
                                                                for="first_name"><strong>Active</strong><br></label><select
                                                                value='<?php echo $student['active']; ?>'
                                                                class="form-control" name="active">
                                                                <option value="1" selected="">Active</option>
                                                                <option value="0">Inactive</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="form-group"><button name="register"
                                                        class="btn btn-success btn-sm edit btn-flat" type="submit">Save
                                                        Tutor</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow"></div>
                                </div>
                            </div>
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
    <script>
    //Set default selected values from the Databases
    $('#campus option[value="<?php echo $student['campus']; ?>"]').attr('selected', 'selected');
    $('#department option[value="<?php echo $student['department']; ?>"]').attr('selected', 'selected');
    </script>
</body>

</html>