<?php

function insertauthor($pdo, $firstName, $lastName, $dateofBirth) {

	$sql = "INSERT INTO author (firstName, lastName, 
		dateofBirth) VALUES(?,?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$firstName, $lastName, $dateofBirth]);

	if ($executeQuery) {
		return true;
	}
}

function insertbook($pdo, $author_id, $bookTitle, $bookGenre, $datePublished, $isFinished) {

	$sql = "INSERT INTO books (author_id, bookTitle, bookGenre, datePublished, isFinished) VALUES(?, ?, ?, ?, ?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$author_id, $bookTitle, $bookGenre, $datePublished, $isFinished]);

	if ($executeQuery) {
		return true;
	}
}


?>