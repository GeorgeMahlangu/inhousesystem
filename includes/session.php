<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}
	if(isset($_SESSION['tutor'])){
		header('location: tutor/home.php');
	}



	if(isset($_SESSION['student'])){
		$conn = $pdo->open();
		header('location: student/home.php');

		try{
			$stmt = $conn->prepare("SELECT * FROM student WHERE studentNum =:student");
			$stmt->execute(['student'=>$_SESSION['student']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
		header('location: student/home.php');

	}
?>