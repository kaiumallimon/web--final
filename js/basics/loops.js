// JavaScript Loops: for, while, do-while, for...of, for...in.

// While loop
let i = 10;
while (i > 0) {
  console.log("Current number:", i);
  i--;
}

// Do-while loop
let j = 1;
do {
  console.log("Current number:", j);
  j++;
} while (j <= 10);

// For loop: print only odds
for (let k = 0; k <= 10; k++) {
  if (k % 2 === 0) continue;
  console.log("Current number:", k);
}

// For...of loop (array)
const colors = ["red", "blue", "green", "yellow"];
for (const color of colors) {
  console.log(color);
}

// For...in loop (object)
const members = { Peter: 35, Ben: 67, Joe: 34, Liana: 28 };
for (const member in members) {
  console.log(`Member: ${member}, Age: ${members[member]}`);
} 