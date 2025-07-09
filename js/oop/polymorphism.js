// JavaScript Polymorphism: Method overriding and dynamic behavior.

class Animal {
  speak() {
    console.log('Animal makes a sound');
  }
}

class Dog extends Animal {
  speak() {
    console.log('Dog barks');
  }
}

class Cat extends Animal {
  speak() {
    console.log('Cat meows');
  }
}

const animals = [new Dog(), new Cat(), new Animal()];
animals.forEach(animal => animal.speak()); 