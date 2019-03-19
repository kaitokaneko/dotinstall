'use strict'

//  関数

function sum( a, b, c ) {
  // console.log(a + b + c);
  return a + b + c;
}

sum(1, 2, 3);
sum(3, 4, 5);

const total = sum(1, 2, 3) + sum(3, 4, 5);
// const total = 6 + 12; 18

console.log(total);
