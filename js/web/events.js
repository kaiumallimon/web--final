// JavaScript Events: Event listeners, event objects, and event delegation.

// Add event listener to a button
const button = document.getElementById('myButton');
if (button) {
  button.addEventListener('click', function(event) {
    console.log('Button clicked!', event);
  });
}

// Event delegation example
const list = document.getElementById('myList');
if (list) {
  list.addEventListener('click', function(event) {
    if (event.target.tagName === 'LI') {
      console.log('List item clicked:', event.target.textContent);
    }
  });
} 