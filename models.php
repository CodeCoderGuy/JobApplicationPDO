<?php
require_once 'dbConfig.php';

function insertNewApplicant($firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for) {
    global $pdo;
    $sql = "INSERT INTO job_applicants (first_Name, last_Name, gender, email, phone_number, college_name, graduation_year, position_applied_for) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executequery = $stmt->execute([$firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for]);

    if($executequery) {
        return true;
    }
}

function seeApplicants($pdo) {
    $sql = "SELECT * FROM job_applicants";
    $stmt = $pdo->prepare($sql);
    $executequery = $stmt->execute();   
    if($executequery) {
        return $stmt->fetchAll();
    }
}

function getApplicant($pdo, $applicant_id) {
    $sql = "SELECT * FROM job_applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute([$applicant_id])) {
        return $stmt->fetch();
    }
}
function updateApplicant($pdo, $applicant_id, $firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for) {
    $sql = "UPDATE job_applicants 
				SET first_name = ?, 
					last_name = ?, 
					gender = ?, 
					email = ?, 
					phone_number = ?, 
					college_name = ?, 
					graduation_year = ?, 
					position_applied_for = ? 
			WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $gender, $email, $phone_number, $college_name, $graduation_year, $position_applied_for, $applicant_id]);

	if ($executeQuery) {
		return true;
	}
	
}

function deleteApplicant($pdo, $applicant_id) {
    $sql = "DELETE FROM job_applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);

    $executequery = $stmt->execute([$applicant_id]);
    if($executequery) {
        return true;
    }
}
?>