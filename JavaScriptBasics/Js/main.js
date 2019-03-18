'use strict'

const score = 60;
const name = "taguchi";

// && なおかつ(AND)
// || もしくは(OR)
// ! ～ではない(NOT)

// if (score >= 50) {
//   if(name === "taguchi") {
//     console.log("Good job!")
//   }
// }

if (score >= 50 && name === "taguchi") {
  console.log("Good job!");
}
