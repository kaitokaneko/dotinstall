'use strict'

//  関数

function showAd(message = "AD") { // 仮引数
  console.log("------------");
  console.log(`-----${message}-----`);
  console.log("------------");
}

showAd("Header AD");  // 実引数
console.log("Tom is great!");
console.log("Bob is great!");

// showAd("AD");
showAd();
console.log("Steve is great!");
console.log("Rich is great!");

showAd("Footer AD");
