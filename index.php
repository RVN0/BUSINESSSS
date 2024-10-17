<?php require_once 'main/dbConfig.php'; ?>
<?php require_once 'main/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Business</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>BOOKSTORE</h1>
	<form action="main/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName">
		</p>
		<p>
			<label for="dateofBirth">Date of Birth</label> 
			<input type="date" name="dateofBirth">
		</p>
	</form>
    
</body>
</html>