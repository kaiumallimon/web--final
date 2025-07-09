// JavaScript Fetch API: Making HTTP requests and handling responses.

// GET request example
fetch('https://jsonplaceholder.typicode.com/posts/1')
  .then(response => response.json())
  .then(data => console.log('GET response:', data))
  .catch(error => console.error('Error:', error));

// POST request example
fetch('https://jsonplaceholder.typicode.com/posts', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({ title: 'foo', body: 'bar', userId: 1 })
})
  .then(response => response.json())
  .then(data => console.log('POST response:', data))
  .catch(error => console.error('Error:', error)); 