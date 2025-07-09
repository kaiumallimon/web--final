// JavaScript Session and Cookies: Managing sessionStorage, localStorage, and cookies.

// sessionStorage
sessionStorage.setItem('user', 'John');
console.log('Session user:', sessionStorage.getItem('user'));

// localStorage
localStorage.setItem('site', 'web-final');
console.log('Local storage site:', localStorage.getItem('site'));

// Cookies (browser only)
document.cookie = 'site=web-final; max-age=3600';
console.log('Cookies:', document.cookie); 