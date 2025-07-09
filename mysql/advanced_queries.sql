-- MySQL Advanced Queries Examples

-- 1. Join two tables
CREATE TABLE IF NOT EXISTS courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS enrollments (
  student_id INT,
  course_id INT,
  FOREIGN KEY (student_id) REFERENCES students(id),
  FOREIGN KEY (course_id) REFERENCES courses(id)
);

-- Example join
SELECT students.name, courses.course_name
FROM students
JOIN enrollments ON students.id = enrollments.student_id
JOIN courses ON enrollments.course_id = courses.id;

-- 2. Group By and Aggregate Functions
SELECT grade, COUNT(*) as num_students
FROM students
GROUP BY grade;

-- 3. Order By
SELECT * FROM students ORDER BY age DESC;

-- 4. Subquery
SELECT name FROM students WHERE age = (SELECT MAX(age) FROM students);

-- 5. Transaction Example
START TRANSACTION;
UPDATE students SET grade = 'B' WHERE name = 'Bob';
DELETE FROM students WHERE name = 'Alice';
COMMIT; 