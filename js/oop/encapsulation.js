// JavaScript Encapsulation: Private and public members, closures.

// Using closure for private members
function Counter() {
  let count = 0; // private
  this.increment = function() {
    count++;
    console.log('Count:', count);
  };
  this.getCount = function() {
    return count;
  };
}
const counter = new Counter();
counter.increment();
counter.increment();
console.log('Current count:', counter.getCount());

// ES2022 private fields
class Secret {
  #secretValue = 42; // private
  getSecret() {
    return this.#secretValue;
  }
}
const s = new Secret();
console.log('Secret value:', s.getSecret()); 