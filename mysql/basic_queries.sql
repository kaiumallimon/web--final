-- MySQL Basic Queries Examples

-- 1. Create a database
CREATE DATABASE IF NOT EXISTS school;

-- 2. Use the database
USE school;

-- 3. Create a table
CREATE TABLE IF NOT EXISTS students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  age INT,
  grade VARCHAR(10)
);

-- 4. Insert data
INSERT INTO students (name, age, grade) VALUES ('Alice', 20, 'A');
INSERT INTO students (name, age, grade) VALUES ('Bob', 22, 'B');

-- 5. Select data
SELECT * FROM students;
SELECT name, grade FROM students WHERE age > 20;

-- 6. Update data
UPDATE students SET grade = 'A+' WHERE name = 'Bob';

-- 7. Delete data
DELETE FROM students WHERE name = 'Alice'; 