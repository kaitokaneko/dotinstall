'use strict'

const score = 60;
const name = "taguchi";

const signal ="pink";

// if (signal === "red") {
//   console.log("stop!");
// } else if(signal === "yellow") {
//   console.log("caution!");
// } else if(signal === "blue"){
//   console.log("go!");
// }

switch (signal) {
  case "red":
  console.log("stop!");
  break;
  case "yellow":
  console.log("caution!");
  break;
  case "blue":
  case "green":
  console.log("go!");
  break;
  default:
  console.log("wrong signal!");
  break;
}
