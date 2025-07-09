// JavaScript JSON Handling: Parsing, stringifying, and manipulating JSON.

const obj = { name: "John", age: 30 };
const json = JSON.stringify(obj);
console.log("JSON:", json);
const decoded = JSON.parse(json);
console.log("Decoded name:", decoded.name); 