<?php require_once 'core/dbConfig.php'; ?> 
<?php require_once 'core/models.php'; ?>
<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title> <!--title of the tab -->
    <style>
        body {
            font-family: "Arial";
        }
        input {
            font-size: 1.5em;
            height: auto;
            width: 250px;
        }
        th {
            border: 1px solid black;
            padding: auto;
        }
    </style>
</head>
<body>
    <h3>Job Application Form </h3>
    <form action="core/handleForms.php" method="POST">
        <p><label for="firstName">First Name: </label><input type="text" name="firstName"></p>
        <p><label for="lastName">Last Name: </label><input type="text" name="lastName"></p>
        <p><label for="gender">Gender: </label><input type="text" name="gender"></p>
        <p><label for="email">Email: </label><input type="email" name="email"></p>
        <p><label for="phone_number">Phone Number: </label><input type="text" name="phone_number"></p>
        <p><label for="college_name">College Name: </label><input type="text" name="college_name"></p>
        <p><label for="graduation_year">Graduation Year: </label><input type="number" name="graduation_year"></p>
        <p><label for="position_applied_for">Position Applied For: </label><input type="text" name="position_applied_for"></p>
        <br>
        <input type="submit" value="Submit Application" name="insertNewApplicant">
    </form>
    <br>
    <h3>List of Applicants</h3>
    <table style="width 50%; margin-top 50px; border: 3px black solid;">
        <tr>
            <th>Applicant ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>College Name</th>
            <th>Graduation Year</th>
            <th>Position Applied For</th>
        </tr>
        <?php $seeAllApplicants = seeApplicants($pdo); ?>
        <?php foreach($seeAllApplicants as $applicant) { ?>
            <tr>
                <td><?php echo $applicant['applicant_id']; ?></td>
                <td><?php echo $applicant['first_name']; ?></td>
                <td><?php echo $applicant['last_name']; ?></td>
                <td><?php echo $applicant['gender']; ?></td>
                <td><?php echo $applicant['email']; ?></td>
                <td><?php echo $applicant['phone_number']; ?></td>
                <td><?php echo $applicant['college_name']; ?></td>
                <td><?php echo $applicant['graduation_year']; ?></td>
                <td><?php echo $applicant['position_applied_for']; ?></td>
                <td>
                    <a href="Edit.php?applicant_id=<?php echo $applicant['applicant_id']; ?>">Edit</a>
                    <a href="Delete.php?applicant_id=<?php echo $applicant['applicant_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>