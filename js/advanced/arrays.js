// JavaScript Arrays: Advanced methods and operations.

let cars = ["Volvo", "BMW", "Toyota"];
console.log(cars);

// Add items to array
cars.push("Rolls Royce");
cars.push("Mercedes");
cars.push("Lamborghini");
console.log(cars);

// Remove items from array (from index 1, remove 3 items)
cars.splice(1, 3);
console.log(cars);

// Sort array (ascending alphabetical)
cars.sort();
console.log(cars);

// Reverse sort (descending alphabetical)
cars.sort((a, b) => b.localeCompare(a));
console.log(cars); 