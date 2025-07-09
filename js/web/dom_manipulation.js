// JavaScript DOM Manipulation: Selecting, modifying, and traversing DOM elements.

// Select an element by ID
const heading = document.getElementById('main-heading');
console.log(heading);

// Change text content
if (heading) heading.textContent = 'New Heading';

// Select elements by class
const items = document.getElementsByClassName('item');
console.log(items);

// Query selector (first match)
const firstItem = document.querySelector('.item');
console.log(firstItem);

// Query selector all (NodeList)
const allItems = document.querySelectorAll('.item');
allItems.forEach(item => item.style.color = 'red');

// Create and append a new element
const newDiv = document.createElement('div');
newDiv.textContent = 'Hello, DOM!';
document.body.appendChild(newDiv); 