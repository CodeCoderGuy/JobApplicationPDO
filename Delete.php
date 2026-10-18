<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Deletion</title>
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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getApplicantById = getApplicant($pdo, $_GET['applicant_id']); ?>
	<form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getApplicantById['first_name']; ?></p>
			<p>Last Name: <?php echo $getApplicantById['last_name']; ?></p>
			<p>Gender: <?php echo $getApplicantById['gender']; ?></p>
			<p>Email: <?php echo $getApplicantById['email']; ?></p>
			<p>Phone Number: <?php echo $getApplicantById['phone_number']; ?></p>
			<p>College Name: <?php echo $getApplicantById['college_name']; ?></p>
			<p>Graduation Year: <?php echo $getApplicantById['graduation_year']; ?></p>
			<p>Position Applied For: <?php echo $getApplicantById['position_applied_for']; ?></p>
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>