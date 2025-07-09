# Practice Set 2

## 1. Javascript:
Write a JavaScript program to calculate the area and perimeter of a rectangle. Take the length and width in inches as input, convert them to centimeters, and display the results in the inner HTML.

**Formulas:**
- Area (cm²) = length (cm) × width (cm)
- Perimeter (cm) = 2 × (length (cm) + width (cm))

Formula to convert inches to centimeters: 1 inch = 2.54 cm

If the area is less than 100, show status "small"; between 100 and 500, show "medium"; greater than 500, show "large".

---

## 2. PHP:
Create a program that generates a sequence where each term is the previous term squared minus 1, starting from a given seed. Repeat for a specified number of terms. Display the sequence in a comma-separated format.

**Sample Input:**
- Seed: 2, Terms: 5

**Sample Output:**
2, 3, 8, 63, 3968

---

## 3. PHP+MySQL:
Design a web application for a movie ticket booking system. The app should allow users to input movie name, show time, seat type, and number of tickets. Create a `cinema` database and a `tickets` table with the following structure:

| Column      | Type         |
|-------------|--------------|
| id          | INT (PK)     |
| movie_name  | VARCHAR(255) |
| show_time   | DATETIME     |
| seat_type   | VARCHAR(50)  |
| num_tickets | INT          |

Write queries to insert a new booking, update the number of tickets, and select all bookings for a specific movie. Provide a simple HTML form for input and display results in a table. 