'use strict'

{
 // Object

 const o = {
   a: 1,
   b: 2,
 };

 // console.log(Object.keys(o)); // ["a","b"]
 // console.log(Object.values(o)); //[1,2]
 // console.log(Object.entries(o));//[][a,1],[b,2]]

 Object.keys(o).forEach(key => {
   console.log(`${key}: ${o[key]}`);
 });

}
