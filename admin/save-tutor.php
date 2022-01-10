<?php
include 'includes/session.php';

if (isset($_POST['save'])) {


    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $studentNum = $_POST['student_number'];
    $campus = $_POST['campus'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $noModules = 0;
    $contact = $_POST['cellnumber'];
    $password = $_POST['password'];
    $passwordVerify = $_POST['passwordVerify'];
    $active = $_POST['active'];

    $conn = $pdo->open();



    try {
        $stmt = $conn->prepare("UPDATE student SET firstname=:firstname, lastname=:lastname, email=:email, campus=:campus, cellphone=:cellphone, department=:department, password=:password, active=:active, isCoreTeamMember=:isCoreTeamMember WHERE studentNum=:studentNum");
        $stmt->execute(['firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'campus' => $campus, 'cellphone' => $contact, 'department' => $department, 'password' => $password, 'active' => $active, 'isCoreTeamMember' => $isCoreTeamMember, 'studentNum' => $studentNum]);
        $_SESSION['success'] = 'Tutor updated successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }

    $pdo->close();
} else {
    $_SESSION['error'] = 'Fill up edit tutor form first';
}

header('location: tutors.php');