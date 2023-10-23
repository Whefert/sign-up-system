-- Author: Jefferson Daley
-- Date Created: October 21, 2023
-- Course: ITT307
-- Purpose: Determine and represent the relations that will constitute the UCC Registry Department’s database

-- Delete database if it exists
DROP DATABASE signUpSystem;

CREATE DATABASE signUpSystem;

USE signUpSystem;

CREATE TABLE users(
 userID INT NOT NULL AUTO_INCREMENT,
 firstName VARCHAR(25) NOT NULL,
 lastName VARCHAR(25) NOT NULL,
 email VARCHAR(25) NOT NULL UNIQUE,
 userPassword VARCHAR(25) NOT NULL,
 PRIMARY KEY (userID)
);

-- Test insert statement
INSERT INTO users (firstName, lastname, email, userPassword) VALUES(,"Jefferson", "Daley","jeffdaley@gmail.com", "jefferson")
;

-- Test to confirm user has been addded and data is retrieved as expected
SELECT * FROM users;