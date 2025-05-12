//keeps navbar link highlighted when selected

//select all links within parent class .links
let navlinks = document.querySelectorAll("*.links a");
//gets id property from body in each page
let bodyId = document.querySelector("body").id;
//loops navlinks as link
for (let link of navlinks) {
//if active link matches the body id...
  if (link.dataset.active == bodyId) {
    //...add the active class
    link.classList.add("active");
  }
}

//keeps category link highlighted when selected
let catlinks=document.querySelectorAll("a.catlink");

for (let link of catlinks) {
//if active link matches the body id...
  if (link.dataset.active == bodyId) {
    //...add the active class
    link.classList.add("active");
  }
}

//gets page title to be displayed in UI
// Get page title 
const pageTitle = document.title;
 
// UI element to display title
const titleDisplay = document.getElementById('pagetitle');
 
// Set inner text to title
titleDisplay.innerText = pageTitle;



