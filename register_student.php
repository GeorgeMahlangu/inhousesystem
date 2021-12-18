<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	
	if(isset($_POST['register'])){


		echo "Button pressed";

		$nameValidation = "/^[a-zA-Z ]+$/";
		$emailValidation = "/^[_a-zA-Z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
		$numberValidation = "/^[0-9]+$/";
		$addressValidation = "/^[A-Za-z0-9'\.\-\s\,]+$/";
		
		$firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
		$studentNumber = $_POST['student_number'];
        $password = $_POST['password'];
        $verifyPassword = $_POST['password_repeat'];
		$condition = $_POST['condition'];
		$department = $_POST['department'];
		$module = $_POST['module'];
		$reason = $_POST['reason'];
		$upliftmentCondition = $_POST['upliftment-condition'];
		$province = $_POST['province'];
		$town =$_POST['town'];
		$no_modules = $_POST['no_modules'];
		$highschool = $_POST['highschool'];


		echo  $firstname;
        echo  $lastname;
        echo  $email;
		echo  $studentNumber;
        echo  $password;
        echo  $verifyPassword;
		echo  $condition;
		echo  $department;
		echo  $module;
		echo  $reason;
		echo  $upliftmentCondition;
		echo  $province;
		echo  $town;
		echo  $no_modules;
		echo  $highschool;

		try{


			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM student WHERE studentNum=:studentNumber");
			$stmt->execute(['studentNumber'=>$studentNumber]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Student Already Exist Please register another student';
			}
			else
			{
				$stmt = $conn->prepare("INSERT INTO `student` (`studentNum`,`firstname`, `lastname`, `email`, `password`, `condition`, `reason`, `numberOfModulesRegistered`, `highSchool`, `Province`, `town`  ) VALUES (:studentNum, :firstname, :lastname, :email, :password, :condition, :reason, :numberOfModulesRegistered, :highSchool, :province, :town)");
				$stmt->execute(['studentNum'=>$studentNumber, 'firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'password'=>$password , 'condition'=>$condition, 'reason'=>$reason, 'numberOfModulesRegistered'=>$no_modules, 'highSchool'=>$highschool, 'province'=>$province, 'town'=>$town]);
				$_SESSION['success'] = 'Student added successfully proceed to login';
				echo 'Student added successfully proceed to login';

			}
			
		

			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Fill registration form first';
		echo 'Fill registration form first';
	}

	$pdo->close();

	//header('location: register.php');

?>