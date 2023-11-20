// Js - Dropdown - Start

const jsDropdown = document.getElementById("jsDropdown");
function dropdown() {
jsDropdown.classList.toggle("show-dropdown");
}
 document.documentElement.addEventListener
("click", function (event)
{
     if (!event.target.matches('.darksoul-btn-medium'))
     {
         if (jsDropdown.classList.contains("show-dropdown"))
         {
             jsDropdown.classList.toggle("show-dropdown");}
     } }
);

// Js - Dropdown - End

const stickies = document.querySelectorAll('[data-sticky = left]')
const container = document.querySelector('.table-container')
const containerLeft = container.getBoundingClientRect().left

stickies.forEach(sticky => {
  const left = sticky.getBoundingClientRect().left - containerLeft
  sticky.setAttribute('style',`--_left:${left}px;`);
});

document.querySelectorAll(".button").forEach(button =>
    button.addEventListener("click", e => {
      if (!button.classList.contains("delete")) {
        button.classList.add("delete");

        setTimeout(() => button.classList.remove("delete"), 2200);
      }
      e.preventDefault();
    })
  );
