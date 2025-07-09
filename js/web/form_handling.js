// JavaScript Form Handling: Accessing and validating form data.

// Example HTML:
// <form id="myForm">
//   <input type="text" id="username" required />
//   <button type="submit">Submit</button>
// </form>

document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('myForm');
  if (form) {
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form from submitting
      const username = document.getElementById('username').value;
      if (username.trim() === '') {
        alert('Username is required!');
      } else {
        console.log('Form submitted! Username:', username);
      }
    });
  }
}); 