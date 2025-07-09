// JavaScript Classes: ES6 class syntax, constructors, and methods.

class Car {
  constructor(brand) {
    this.brand = brand;
  }
  honk() {
    console.log(`Beep! I am a ${this.brand}`);
  }
}

const myCar = new Car('Toyota');
myCar.honk(); 