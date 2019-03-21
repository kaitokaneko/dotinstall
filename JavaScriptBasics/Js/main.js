'use strict'

{
  // Math

  // console.log(Math.PI);

  // console.log(Math.random()); //0~0.999999...

  //Math.random() -> 0....9.999999
  //Math.random() * 6  -> 0....5.99999....
  //Math.random() *6 + 1 -> 1....6.999999.
  //Math.floor(Math.random() * 6 + 1) -> 1...6

  console.log(Math.floor(Math.random() * 6 + 1));
}
