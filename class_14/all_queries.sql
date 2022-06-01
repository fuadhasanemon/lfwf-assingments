*** Create a Database name  user_information.

*** In Users table 7 column:  id  , username , age , phone, address, salary , country  ,created_at, updated_at

*** Find users who live in same country 

*** Show data  by high to low salary 

*** Show data who get the highest salary

*** Show data who get the lowest 

*** Show how many table you have 

*** Show me how many users get a salary range of ( 5000 -15000).



-- Ques 1

******** For Create Database ********

CREATE DATABASE user_information;

-- Ques 2

******** For Create table for users ********

CREATE TABLE Users (
    id INT NOT NULL PRIMARY KEY,
    username VARCHAR(255),
    age INT,
    phone INT,
    address TEXT,
    salary INT,
    country VARCHAR(100),
    created_at TIMESTAMP,
    updated_at DATETIME
);


-- Ques 3

******** For find users who live in same country  ********

-- Users table

SELECT country FROM users GROUP BY country;


-- Ques 4

******** Show data  by high to low salary ********

-- Users table

SELECT * FROM users ORDER BY salary DESC;

-- Ques 5

******** Show data who get the highest salary ********

-- Users table

SELECT * FROM users where salary=(select Max(salary) from users);


-- Ques 6

******** Show data who get the lowest  ********

-- Users table

SELECT * FROM users where salary=(select Min(salary) from users);

-- Ques 7

******** Show how many table you have ********

SELECT COUNT(*) from INFORMATION_SCHEMA.TABLES
WHERE table_schema = 'user_information';


-- Ques 8

******** Show me how many users get a salary range of ( 5000 - 5000) ********

SELECT * from users WHERE salary BETWEEN 5000 AND 5000;