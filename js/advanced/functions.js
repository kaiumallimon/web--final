// JavaScript Functions: Declarations, expressions, arrow functions, and advanced usage.

// Prints a message
function greet() {
  console.log("Hello world");
}
greet();

// Add two values and return the result
function add(a, b) {
  return a + b;
}
console.log("add(4, 5):", add(4, 5));

// Pass by reference (objects/arrays are reference types in JS)
function addFive(obj) {
  obj.value += 5;
}
let numberObj = { value: 5 };
addFive(numberObj);
console.log("numberObj.value:", numberObj.value);

// Multiple unknown arguments (rest parameters)
function myFamily(firstname, ...lastname) {
  let txt = "";
  for (let i = 0; i < lastname.length; i++) {
    txt += `Hi ${firstname}, ${lastname[i]}\n`;
  }
  return txt;
}
console.log(myFamily("John", "Smith", "Doe", "Taylor")); 