// JavaScript File Handling: Reading and writing files in the browser (File API).

// Example HTML:
// <input type="file" id="fileInput" />

document.addEventListener('DOMContentLoaded', function() {
  const fileInput = document.getElementById('fileInput');
  if (fileInput) {
    fileInput.addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          console.log('File content:', e.target.result);
        };
        reader.readAsText(file);
      }
    });
  }
}); 