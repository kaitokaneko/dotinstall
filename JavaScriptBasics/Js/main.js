'use strict'

{
 // 配列
 const a = [1,5,10];

a.splice(2,0,6,7);
console.log(a);

const removed = a.splice(1,2);
console.log(a);
console.log(removed);
}
