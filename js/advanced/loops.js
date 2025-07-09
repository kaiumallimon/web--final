// JavaScript Advanced Loops: forEach, map, filter, reduce, etc.

const numbers = [1, 2, 3, 4, 5];

// forEach
numbers.forEach(num => console.log("forEach:", num));

// map
const squares = numbers.map(num => num * num);
console.log("map (squares):", squares);

// filter
const evens = numbers.filter(num => num % 2 === 0);
console.log("filter (evens):", evens);

// reduce
const sum = numbers.reduce((acc, num) => acc + num, 0);
console.log("reduce (sum):", sum);

// find
const firstEven = numbers.find(num => num % 2 === 0);
console.log("find (first even):", firstEven); 