'use strict'

{
  let i = 0;

  const showTime = () => {
  console.log(new Date());
  let timerId = setTimeout(showTime, 1000);
  ++i;
  if (i > 2 ) {
    clearTimeout(timerId);
  }

};

  showTime();
}
