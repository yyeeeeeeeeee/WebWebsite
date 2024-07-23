-- Creating the database
CREATE DATABASE pawsomeadoptdb CHARACTER SET utf32 COLLATE utf32_general_ci;

-- Creating the tables
USE pawsomeadoptdb;

CREATE TABLE form (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(20) NOT NULL,
  email varchar(50) NOT NULL,
  contact bigint NOT NULL,
  enquiry varchar(20) NOT NULL,
  desc varchar(100) NOT NULL,
  timestamp date NOT NULL
)

CREATE TABLE users (
  user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email varchar(30) NOT NULL,
  password varchar(20) NOT NULL,
)
