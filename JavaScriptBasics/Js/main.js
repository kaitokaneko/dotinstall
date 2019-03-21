'use strict'

{
  // let x = 1;
  // let y = x;
  // x = 5;
  // console.log(x); //5
  // console.log(y);//1

  let x = [1,2];
  let y = x;
  x[0] = 5;
console.log(x); //[5,2]
console.log(y); //[5,2]
}
