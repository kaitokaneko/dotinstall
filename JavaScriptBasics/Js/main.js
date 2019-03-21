'use strict'

{
 // クラス

class Player {
  constructor(name, score) { //メソッド
    this.name = name;
    this.score = score;
  }
  showInfo() {
    console.log(`name: ${this.name} score: ${this.score}`);
  }

  static showVersion() {
    console.log(`Player class ver. 1.0`);
  }
}

const taguchi = new Player("taguchi",32);
const fkoji = new Player("fkoji",44);


Player.showVersion();

// console.log(taguchi.name);

// const taguchi = {
//   name: "taguchi",
//   score: 32,
// };
//
// const fkoji = {
//   name: "fkoji",
//   score: 44,
// };

}
