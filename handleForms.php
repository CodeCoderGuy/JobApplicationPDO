<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewApplicant'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $gender = trim($_POST['gender']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $college_name = trim($_POST['college_name']);
    $graduation_year = trim($_POST['graduation_year']);
    $position_applied_for = trim($_POST['position_applied_for']);

    if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($email) && !empty($phone_number) && !empty($college_name) && !empty($graduation_year) && !empty($position_applied_for)) {
    $query = insertNewApplicant($firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for);
    
        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Error inserting applicant.";
        }
    } else {
        echo "Please fill in all required fields.";
    }    

}
if (isset($_POST['deleteApplicantBtn'])) {
    $query = deleteApplicant($pdo, $_GET['applicant_id']);
    
    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Error deleting applicant.";
    }
}

if (isset($_POST['editApplicantBtn'])) {
    $applicant_id = $_POST['applicant_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$email = trim($_POST['email']);
	$phone_number = trim($_POST['phone_number']);
	$college_name = trim($_POST['college_name']);
	$graduation_year = trim($_POST['graduation_year']);
	$position_applied_for = trim($_POST['position_applied_for']);

	if (!empty($applicant_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($email) && !empty($phone_number) && !empty($college_name) && !empty($graduation_year) && !empty($position_applied_for)) {

		$query = updateApplicant($pdo, $applicant_id, $firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}

?>