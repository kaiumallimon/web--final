// JavaScript OOP Basics: Objects, prototypes, and basic principles.

// Object literal
const person = {
  name: 'Alice',
  age: 30,
  greet: function() {
    console.log('Hello, my name is ' + this.name);
  }
};
person.greet();

// Constructor function
function Animal(type) {
  this.type = type;
}
Animal.prototype.speak = function() {
  console.log('This is a ' + this.type);
};
const dog = new Animal('dog');
dog.speak(); 