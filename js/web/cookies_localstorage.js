// JavaScript Cookies and Local Storage: Managing browser storage.

// Set a cookie
function setCookie(name, value, days) {
  const d = new Date();
  d.setTime(d.getTime() + (days*24*60*60*1000));
  const expires = "expires=" + d.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}
setCookie('user', 'John', 1);

// Get a cookie
function getCookie(name) {
  const cname = name + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1);
    if (c.indexOf(cname) === 0) return c.substring(cname.length, c.length);
  }
  return "";
}
console.log('Cookie user:', getCookie('user'));

// Local Storage
localStorage.setItem('site', 'web-final');
console.log('Local storage site:', localStorage.getItem('site'));

// Session Storage
sessionStorage.setItem('sessionKey', 'value');
console.log('Session storage key:', sessionStorage.getItem('sessionKey')); 