<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['register'])){
		
		$initials = $_POST['initials'];
        $lastname = $_POST['last_name'];
        $studentNum = $_POST['student_number'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
        $subjectCode = $_POST['subject_code'];
        $reasonExclusion = $_POST['reason_exclusion'];
        $condition = $_POST['condition_admission'];
        $password = "12345678";
        $interviewed = 1;

		try
        {
				$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows1 FROM student WHERE studentNum = :studentNumber");
				$stmt->execute(['studentNumber'=>$studentNum]);
				$row = $stmt->fetch();

				if($row['numrows1'] > 0){
					$_SESSION['error'] = 'Student already Exists';
                    header('location: add-student-department.php');
                    exit();
					
				}
				else
				{
                    $stmt = $conn->prepare("INSERT INTO `student` (`studentNum`,`initials`, `lastname`, `email`,`contactNr`, `password`, `condition_reAdmission`, `reason`, `subjCode`, `interviewed`,`highSchool`, `Province`, `town` ) VALUES (:studentNum, :initials, :lastname, :email, :contact, :password, :condition, :reason, :subjCode, :interviewed, NULL, NULL, NULL)");
                    $stmt->execute(['studentNum'=>$studentNum, 'initials'=>$initials , 'lastname'=>$lastname, 'email'=>$email, 'contact'=>$contact, 'password'=>$password , 'condition'=>$condition, 'reason'=>$reasonExclusion, 'subjCode'=>$subjectCode, 'interviewed'=>$interviewed]);
                    $_SESSION['success'] = 'Student added successfully';	
					header('location: students.php');
					exit();

				}
				

			
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input Student form first';
		//$_SESSION['success'] = 'Input login credentails first';
	}

	$pdo->close();

	header('location: add-student-department.php');

?>