// JavaScript Variables: Declaration, initialization, and scope examples.

// Number (integer)
let x = 5; // int
// String
let y = "John"; // string
// Float
let z = 4.6; // float
// Boolean
let p = true; // bool
// Array
let f = [1, 2, 3]; // array

// Object
class Person {
  constructor(name) {
    this.name = name;
  }
  message() {
    console.log(`Available person: ${this.name}`);
  }
}
let g = new Person("Alice");
g.message();

// Null
let i = null;

// Undefined
let u;
console.log(u); // undefined 