// JavaScript Type Casting: Implicit and explicit conversions.

let num = "42";
let str = 123;

// Implicit conversion
console.log("Implicit addition:", num + 1); // '421' (string)
console.log("Implicit subtraction:", num - 1); // 41 (number)

// Explicit conversion
let n = Number(num);
console.log("Explicit Number():", n);
let s = String(str);
console.log("Explicit String():", s);

// Boolean conversion
console.log("Boolean(0):", Boolean(0)); // false
console.log("Boolean(1):", Boolean(1)); // true
console.log("Boolean(''):", Boolean("")); // false
console.log("Boolean('hello'):", Boolean("hello")); // true 