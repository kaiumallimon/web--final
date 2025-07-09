# Practice Set 1

## 1. Javascript:
Write a JavaScript program to calculate the formula given below. First, take the radius (in cm) and height (in cm) of a cylinder, calculate the volume in liters, and display the result in the inner HTML.

**Calculation Result:**

    Volume (liters) = π × (radius in meters)^2 × (height in meters) × 1000

Formula to convert cm to meters: 1 meter = 100 cm

If the calculation result is less than 10, show a status "small"; between 10 and 50, show "medium"; greater than 50, show "large".

---

## 2. PHP:
Create a program that generates a custom Fibonacci-like sequence. The sequence starts with two given numbers. Each subsequent number is the sum of the previous two numbers plus 1. Repeat for a specified number of terms. Display the sequence in a comma-separated format.

**Sample Input:**
- Start1: 2, Start2: 3, Terms: 6

**Sample Output:**
2, 3, 6, 10, 17, 28

---

## 3. PHP+MySQL:
Design a web application for a bookstore inventory. The app should allow users to input a book's title, author, genre, and price. Create a `bookstore` database and a `books` table with columns: id, title, author, genre, price. Write queries to insert a new book, update a book's price, and select all books by a specific author. Provide a simple HTML form for input and display results in a table. 

| Column | Type         |
|--------|--------------|
| id     | INT (PK)     |
| title  | VARCHAR(255) |
| author | VARCHAR(255) |
| genre  | VARCHAR(100) |
| price  | FLOAT        |