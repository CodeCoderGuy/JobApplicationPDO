<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editing</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getApplicantbyId = getApplicant($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getApplicantbyId['first_name']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getApplicantbyId['last_name']; ?>">
		</p>
		<p>
			<label for="gender">Gender</label>
			<input type="text" name="gender" value="<?php echo $getApplicantbyId['gender']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getApplicantbyId['email']; ?>">
		</p>
		<p>
			<label for="phone_number">Phone Number</label>
			<input type="text" name="phone_number" value="<?php echo $getApplicantbyId['phone_number']; ?>">
		</p>
		<p>
			<label for="college_name">College Name</label>
			<input type="text" name="college_name" value="<?php echo $getApplicantbyId['college_name']; ?>">
		</p>
		<p>
			<label for="graduation_year">Graduation Year</label>
			<input type="text" name="graduation_year" value="<?php echo $getApplicantbyId['graduation_year']; ?>">
		</p>
		<p>
			<label for="position_applied_for">Position Applied For</label>
			<input type="text" name="position_applied_for" value="<?php echo $getApplicantbyId['position_applied_for']; ?>">
			<input type="hidden" name="applicant_id" value="<?php echo $getApplicantbyId['applicant_id']; ?>">
			<br>
			<input type="submit" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>