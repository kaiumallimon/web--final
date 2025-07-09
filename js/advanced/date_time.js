// JavaScript Date and Time: Date object, formatting, and manipulation.

const now = new Date();
console.log("Current date:", now.toISOString().slice(0, 10)); // YYYY-MM-DD
console.log("Current time:", now.toTimeString().slice(0, 8)); // HH:MM:SS
const timestamp = new Date("2024-01-01").getTime() / 1000;
console.log("Timestamp for 2024-01-01:", timestamp); 