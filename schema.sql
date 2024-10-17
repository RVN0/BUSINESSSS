CREATE TABLE author (
	id INT AUTO_INCREMENT PRIMARY KEY,
  	firstName VARCHAR(50),
  	lastName VARCHAR(50),
  	dateofBirth TIMESTAMP,
)

CREATE TABLE books (
	id INT AUTO_INCREMENT PRIMARY KEY,
  	author_id INT,
  	bookTitle VARCHAR(255),
  	bookGenre VARCHAR(255),
  	datePublished TIMESTAMP,
  	isFinished BOOLEAN
)
