<?php
include 'includes/session.php';

if (isset($_POST['edit'])) {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $studentNum = $_POST['student-number'];
    $campus = $_POST['campus'];
    $department = $_POST['department'];
    $email = $_POST['email'];
    $noModules = 0;
    $contact = $_POST['cellnumber'];
    $password = $_POST['password'];
    $passwordVerify = $_POST['passwordVerify'];
    $active = $_POST['active'];
    $isCoreTeamMember = $_POST['isCoreTeamMember'];

    $conn = $pdo->open();



    try {
        $stmt = $conn->prepare("UPDATE tutor SET firstname=:firstname, lastname=:lastname, email=:email, campus=:campus, cellphone=:cellphone, department=:department, password=:password, active=:active, isCoreTeamMember=:isCoreTeamMember WHERE studentNum=:studentNum");
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