<?php
include 'includes/session.php';
$conn = $pdo->open();

if (isset($_POST['register'])) {

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

    try {
        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows1 FROM tutor WHERE studentNum = :studentNumber");
        $stmt->execute(['studentNumber' => $studentNum]);
        $row = $stmt->fetch();

        if ($row['numrows1'] > 0) {
            $_SESSION['error'] = 'Tutor already Exists';
            header('location: add-tutor.php');
            exit();
        } else {


            $stmt = $conn->prepare("INSERT INTO `tutor` (`studentNum`,`firstname`, `lastname`, `email`,`noAssignedModules`, `campus`, `cellphone`, `department`, `password`, `active`) VALUES (:studentNum, :firstname, :lastname, :email, :noAssignedModules, :campus,   :cellphone, :department, :password, :active)");
            $stmt->execute(['studentNum' => $studentNum, 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'noAssignedModules' => $noModules, 'campus' => $campus, 'cellphone' => $contact, 'department' => $department, 'password' => $password, 'active' => $active]);
            $_SESSION['success'] = 'Tutor added successfully';
            header('location: tutors.php');
            exit();
        }
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = 'Input Tutor form first';
    //$_SESSION['success'] = 'Input login credentails first';
}

$pdo->close();

header('location: tutors.php');