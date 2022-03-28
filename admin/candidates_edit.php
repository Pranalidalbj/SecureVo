<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['cname'];
		
		$position = $_POST['position'];
		$platform = $_POST['info'];

		$sql = "UPDATE candidates SET cname = '$cname', position_id = '$position', info = '$info' WHERE id = '$id'";
		if($con->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $con->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>