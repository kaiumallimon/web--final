// JavaScript Numbers: Number type, methods, and operations.

let a = 42; // integer
let b = 3.14; // float
let c = "123"; // string

console.log("a is integer:", Number.isInteger(a));
console.log("b is integer:", Number.isInteger(b));
console.log("c is NaN:", isNaN(c));

// Convert string to number
let d = Number(c);
console.log("Converted c to number:", d);

// Number methods
console.log("a to fixed (2 decimals):", a.toFixed(2));
console.log("b to string:", b.toString());

// Infinity and NaN
console.log("1/0:", 1/0); // Infinity
console.log("0/0:", 0/0); // NaN 