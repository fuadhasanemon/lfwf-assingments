-- Create a Database name  information.

-- Create two table  User and User_details and join both of them with inner join,

-- Left join , right join use sql query

--  Now create a text file and submit 




-- For Create Database*

CREATE DATABASE information;

-- For Create table for users*

CREATE TABLE user (
    id INT NOT NULL PRIMARY KEY,
    username VARCHAR(255),
    age INT,
    phone INT,
);

CREATE TABLE user_details (
    id INT NOT NULL PRIMARY KEY,
    user_id INT,
    address TEXT,
    salary INT,
    country VARCHAR(100),
    created_at TIMESTAMP,
    updated_at DATETIME
);

-- Inner join

SELECT user.id, user.username, user.age FROM user 
INNER JOIN user_details ON user.id = user_details.user_id;


-- Left join

SELECT user.id, user.username, user.age FROM user 
LEFT JOIN user_details ON user.id = user_details.user_id;


-- Right join

SELECT user.id, user.username, user.age FROM user 
RIGHT JOIN user_details ON user.id = user_details.user_id;
