# Practice Set 3

## 1. Javascript:
Write a JavaScript program to calculate the Body Surface Area (BSA) using the Mosteller formula. Take height (cm) and weight (kg) as input, calculate BSA, and display the result in the inner HTML.

**Formula:**

    BSA = sqrt((height (cm) × weight (kg)) / 3600)

If the BSA is less than 1.5, show status "low"; between 1.5 and 2.0, show "normal"; greater than 2.0, show "high".

---

## 2. PHP:
Create a program that generates a sequence where each term is the sum of the previous term and the number of vowels in its string representation, starting from a given seed. Repeat for a specified number of terms. Display the sequence in a comma-separated format.

**Sample Input:**
- Seed: 10, Terms: 5

**Sample Output:**
10, 12, 14, 16, 18

---

## 3. PHP+MySQL:
Design a web application for a student attendance system. The app should allow users to input student name, date, and status (present/absent). Create a `school` database and an `attendance` table with columns: id, student_name, date, status. Write queries to insert a new attendance record, update a status, and select all records for a specific student. Provide a simple HTML form for input and display results in a table. 

| Column        | Type         |
|---------------|--------------|
| id            | INT (PK)     |
| student_name  | VARCHAR(255) |
| date          | DATE         |
| status        | VARCHAR(20)  |