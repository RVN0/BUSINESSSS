<?php

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertWebDevBtn'])) {

	$query = insertauthor($pdo, $_POST['firstName'], $_POST['lastName'], 
		$_POST['dateofBirth']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}

?>