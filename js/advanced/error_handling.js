// JavaScript Error Handling: try, catch, finally, and custom errors.

try {
  throw new Error('This is an exception!');
} catch (e) {
  console.log('Caught exception:', e.message);
}

// Custom error handler (using window.onerror in browser or process.on in Node.js)
// In browser:
// window.onerror = function(message, source, lineno, colno, error) {
//   console.log(`Custom error: ${message}`);
// };

// In Node.js:
// process.on('uncaughtException', function(err) {
//   console.log('Custom error:', err.message);
// });

// Reference error (undefined variable)
try {
  console.log(undefinedVar); // triggers ReferenceError
} catch (e) {
  console.log('Reference error caught:', e.message);
} 