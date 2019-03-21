'use strict'

{
  let i = 0;

  const showTime = () => {
    console.log(new Date());
    ++i;
    if (i > 2) {
      clearInterval(timerId);
}
};


  let timerId = setInterval(showTime, 1000);

}
