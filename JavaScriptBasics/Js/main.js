'use strict'

{
 // 配列
 const a = [1,2,5,10];

// const b = [];
// a.forEach((item) => {
//   b.push(item * 2);
//   });
//   console.log(b);

// const b = a.map(item => item * 2);
//   console.log(b);

const b = a.filter(item => item%2 === 0);
console.log(b);
}
