'use strict'

{
// Date
  //
  // const d = new Date(2018, 11); //2018/12/01 00:00:00
  // d.setHours(10, 20, 30); //2018/12/01 10:20:30
  // d.setDate(32); //2019/01/01 10:20:30
  // d.setDate(d.getDate()+ 3 ); //2019/01/04 10:20:30
  //
  // console.log(d);

  const d1 = new Date(2018, 11, 1);
  const d2 = new Date(2018, 11, 10);
  console.log((d2 - d1) / (24*60*60*1000) );


}
