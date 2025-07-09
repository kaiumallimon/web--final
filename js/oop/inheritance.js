// JavaScript Inheritance: Prototypal and class-based inheritance.

// Prototypal inheritance
function Animal(name) {
  this.name = name;
}
Animal.prototype.speak = function() {
  console.log(this.name + ' makes a noise.');
};

function Dog(name) {
  Animal.call(this, name);
}
Dog.prototype = Object.create(Animal.prototype);
Dog.prototype.constructor = Dog;
Dog.prototype.speak = function() {
  console.log(this.name + ' barks.');
};

const d = new Dog('Rex');
d.speak();

// Class-based inheritance (ES6)
class Person {
  constructor(name) {
    this.name = name;
  }
  greet() {
    console.log('Hello, ' + this.name);
  }
}

class Student extends Person {
  constructor(name, major) {
    super(name);
    this.major = major;
  }
  greet() {
    super.greet();
    console.log('My major is ' + this.major);
  }
}

const s = new Student('Alice', 'Math');
s.greet(); 