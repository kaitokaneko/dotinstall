'use strict'

{
  const h1 = document.createElement("h1");
  h1.textContent = "Title";
  document.body.appendChild(h1);

  const p = document.createElement("p");
  p.textContent = "Hello,hello,hello";
  document.body.appendChild(p);

  const h2 = document.createElement("h2");
  h2.textContent = "Sub Title";
  document.body.insertBefore(h2, p);


  // const copy = p.cloneNode(true);
  const copy = p.cloneNode(false);
  document.body.insertBefore(copy, h2);

  document.body.removeChild(h2);
}
