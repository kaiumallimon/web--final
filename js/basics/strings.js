// JavaScript Strings: String type, methods, and operations.

let x = " Hello world ";
let y = "hello";
let z = "WORLD";

// --- Basic Info ---
console.log("1. Length:", x.length);
console.log("2. Word Count:", x.trim().split(/\s+/).length);

// --- Searching & Position ---
console.log("3. Position of 'world':", x.indexOf("world")); // case-sensitive
console.log("4. Last position of 'l':", x.lastIndexOf("l"));
console.log("5. Case-insensitive position:", x.toLowerCase().indexOf("world".toLowerCase()));

// --- Substring/slicing ---
console.log("6. Substring (6,5):", x.substr(6, 5));

// --- Replace ---
console.log("7. Replace 'world' with 'JS':", x.replace("world", "JS"));
console.log("8. Case-insensitive replace:", x.replace(/world/i, "JS"));

// --- Case Manipulation ---
console.log("9. Uppercase:", x.toUpperCase());
console.log("10. Lowercase:", x.toLowerCase());
console.log("11. Ucfirst:", x.trim().charAt(0).toUpperCase() + x.trim().slice(1));
console.log("12. Ucwords:", x.trim().split(" ").map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(" "));

// --- Trim & Pad ---
console.log("13. Trimmed:", `'${x.trim()}'`);
console.log("14. Left Trim:", `'${x.trimStart()}'`);
console.log("15. Right Trim:", `'${x.trimEnd()}'`);
console.log("16. Padded:", `'${x.trim().padStart(12, "*").padEnd(20, "*")}'`);

// --- Reverse & Repeat ---
console.log("17. Reversed:", x.split("").reverse().join(""));
console.log("18. Repeated (3x):", x.trim().repeat(3));

// --- Compare ---
console.log("19. y === z:", y === z); // case-sensitive
console.log("20. y.toLowerCase() === z.toLowerCase():", y.toLowerCase() === z.toLowerCase()); // case-insensitive
console.log("21. 'img12' vs 'img2':", ["img12", "img2"].sort((a,b)=>a.localeCompare(b, undefined, {numeric:true})));

// --- Concatenation ---
console.log("22. Concatenation:", y + " " + z);

// --- Split & Join ---
let parts = x.trim().split(" ");
console.log("23. Split (words):", parts);
console.log("24. Join with dash:", parts.join("-"));

// --- Escape Characters ---
console.log("25. Addslashes:", "John's book".replace(/'/g, "\\'"));
console.log("26. Stripslashes:", "John\\'s book".replace(/\\'/g, "'"));

// --- HTML ---
let html = "<b>Hello</b> <script>alert('x');</script>";
console.log("27. Strip tags:", html.replace(/<[^>]*>/g, ""));
console.log("28. Htmlentities:", html.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;"));
console.log("29. Htmlspecialchars:", html.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;"));

// --- Check Prefix/Suffix ---
console.log("30. Starts with ' H':", x.startsWith(" H") ? "Yes" : "No");
console.log("31. Ends with 'd ':", x.endsWith("d ") ? "Yes" : "No"); 