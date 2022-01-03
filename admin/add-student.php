<?php
include 'includes/session.php';

$conn = $pdo->open();

$studentNum = $_GET['studentNum'];
$stmt = $conn->prepare("SELECT * FROM student WHERE studentNum=:student");
$stmt->execute(['student' => $studentNum]);
$student = $stmt->fetch();

$pdo->close();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add - Student</title>
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
        <?php include 'includes/menubar.php' ?>
        <div class="d-flex flex-column" id="content-wrapper" style="margin: 0px;">
            <div id="content">
                <?php include 'includes/navbar.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Add Student</h3>
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4" style="text-align: left;">Register a Student</h4>
                                </div>
                                <form class="user">
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
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                type="text" id="exampleFirstName-1" placeholder="First Name"
                                                name="first_name"></div>
                                        <div class="col-sm-6"><input class="form-control form-control-user" type="text"
                                                id="exampleFirstName-2" value='<?php echo $student['lastname']; ?>'
                                                placeholder="Last Name" name="last_name"></div>
                                    </div>
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-10" aria-describedby="emailHelp"
                                            placeholder="Student Number" value='<?php echo $student['studentNum']; ?>'
                                            name="student_number"></div>
                                    <div class="form-group"><input class="form-control form-control-user" type="email"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Email Address" name="email"
                                            value='<?php echo $student['email']; ?>'></div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                type="password" id="examplePasswordInput"
                                                value='<?php echo $student['password']; ?>' placeholder="Password"
                                                name="password"></div>
                                        <div class="col-sm-6"><input class="form-control form-control-user"
                                                type="password" id="exampleRepeatPasswordInput"
                                                placeholder="Repeat Password"
                                                value='<?php echo $student['password']; ?>' name="password_repeat">
                                        </div>
                                    </div>
                                    <h6 style="padding-left: 20px;"><strong>Condition</strong></h6>
                                    <div class="form-check" style="margin-right: 0;"><input class="form-check-input"
                                            type="radio" id="formCheck-11" name="condition" value="Exclusion"><label
                                            class="form-check-label" for="formCheck-3">Exclusion</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-12" name="condition" value="Probation"><label
                                            class="form-check-label" for="formCheck-3">Probation</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-4" name="condition" value="Voluntary"><label
                                            class="form-check-label" for="formCheck-3">Voluntary Intervention</label>
                                    </div>
                                    <div class="form-group"><input class="form-control form-control-user" type="text"
                                            id="exampleInputEmail-9" aria-describedby="emailHelp"
                                            placeholder="Cellphone" name="cellphone"></div>
                                    <div class="form-group">
                                        <h6 style="padding-left: 20px;"><strong>Department</strong></h6>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-13" name="department" value="Computer Science"><label
                                            class="form-check-label" for="formCheck-5">Computer Science</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-8" name="department"
                                            value="Computer Systems Engineering"><label class="form-check-label"
                                            for="formCheck-5">Computer System Engineering</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-7" name="department" value="First Year Foundation Unit"><label
                                            class="form-check-label" for="formCheck-5">First Year Foundation
                                            Unit</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-6" name="department" value="Informatics"><label
                                            class="form-check-label" for="formCheck-5">Informatics</label></div>
                                    <div class="form-check"><input class="form-check-input" type="radio"
                                            id="formCheck-14" name="department" value="Information Technology"><label
                                            class="form-check-label" for="formCheck-5">Information Technology</label>
                                    </div>
                                    <div class="form-group" style="margin-top: 11px;">
                                        <h6 style="padding-left: 20px;"><strong>Select the modules you are on probation
                                                for</strong></h6>
                                    </div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-15"><label class="form-check-label"
                                            for="formCheck-1">CGS10BT</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-2"><label class="form-check-label"
                                            for="formCheck-1">TPG111T</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-16"><label class="form-check-label"
                                            for="formCheck-1">TPG201T</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-17"><label class="form-check-label"
                                            for="formCheck-1">IEE20BT</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox"
                                            id="formCheck-18"><label class="form-check-label"
                                            for="formCheck-1">DSO23BT</label></div>
                                    <div class="form-group"><textarea class="form-control"
                                            placeholder="Reason for Intervention (Reason for not performing well)"
                                            style="margin-top: 15px;border-radius: 160px;padding-left: 20px;"
                                            name="reason"></textarea><textarea class="form-control"
                                            placeholder="Condition for upliftment"
                                            style="margin-top: 15px;border-radius: 160px;padding-left: 20px;"
                                            name="condition"></textarea><input class="form-control" type="number"
                                            placeholder="Total Number of Modules registered this year."
                                            style="margin-top: 15px;border-radius: 160px;" min="0" max="10"
                                            name="no_modules"></div>
                                    <div class="form-group"><input class="form-control" type="text"
                                            style="border-radius: 160px;" placeholder="High School Attended"
                                            name="highschool"></div>
                                    <div class="form-group"><select class="form-control" style="border-radius: 160px;"
                                            name="province">
                                            <option value="None" selected="">Select Province</option>
                                            <option value="Gauteng">Gauteng</option>
                                            <option value="Freestate">Freestate</option>
                                            <option value="Limpopo">Limpopo</option>
                                            <option value="Kwazulu Natal">Kwazulu Natal</option>
                                            <option value="North West">North West</option>
                                            <option value="Mpumalanga">Mpumalanga</option>
                                            <option value="Western Cape">Western Cape</option>
                                            <option value="Eastern Cape">Eastern Cape</option>
                                            <option value="Northern Cape">Northern Cape</option>
                                        </select></div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <select id="interview" class="form-control"
                                                    style="border-radius: 160px;"
                                                    value='<?php echo $student['innterviewedStatus']; ?>'
                                                    class="form-control" name="active">
                                                    <option value="None" selected="">Select Interview Status</option>
                                                    <option value="1">Interviewed</option>
                                                    <option value="0">Not Interviewed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><label for="first_name"><strong>Interview
                                                        Date</strong><br></label><br><input class="form-control"
                                                    type="date" style="border-radius: 160px;" name="InterviewDate"
                                                    id="InterviewDate"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"><input
                                            class="form-control form-control-sm form-control-user" type="text"
                                            id="exampleInputEmail-5" aria-describedby="emailHelp" placeholder="Town"
                                            name="town" style="font-size: 16px;"></div>
                                    <div class="form-group" style="margin-top: 11px;">
                                        <h6 style="padding-left: 20px;"><strong>Acknowledgement</strong></h6>
                                        <div class="form-check"><input class="form-check-input" type="radio"
                                                id="formCheck-10"><label class="form-check-label" for="formCheck-10">I
                                                acknowledge that I am responsible for my academics and the faculty has
                                                tried it's best to provide support, therefore I fully understand that
                                                <br>the faculty will not be held liable for my performance.<br></label>
                                        </div>
                                    </div><button class="btn btn-primary btn-block text-white btn-user"
                                        type="submit">Save Student Information</button>
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