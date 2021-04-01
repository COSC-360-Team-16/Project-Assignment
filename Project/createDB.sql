IF (EXISTS (SELECT * 
	FROM INFORMATION_SCHEMA.TABLES 
	WHERE TABLE_NAME = 'Users'))
BEGIN
	CREATE TABLE Users (
	userName varchar(100),
	firstName varchar(100),
	lastName varchar(100),
	password varchar(100),
	email varchar(100),
	imagePath varchar(255)
	);
END