// JavaScript Constants: const keyword and immutability.

const PI = 3.14159;
console.log("PI:", PI);

// Attempting to reassign a constant will throw an error
// PI = 3.14; // Uncommenting this line will cause an error

// Constants with objects/arrays: the reference is constant, but contents can change
const person = { name: "John" };
person.name = "Alice"; // Allowed
console.log(person);
// person = {}; // Not allowed (uncommenting will cause an error) 