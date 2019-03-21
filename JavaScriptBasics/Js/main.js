'use strict'

{
document.querySelector("h1").textContent = "H1!"

document.querySelectorAll("li:nth-child(odd)").forEach(li => {
  li.textContent = "li!"
});

}
