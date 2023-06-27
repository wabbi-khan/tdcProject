// ? open and close Side Bar
const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle");
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

function toggleDropdown() {
  var icon = document.getElementById("icon");
  var dropdown = document.querySelector(".dropDown");
  icon.classList.toggle("bx-chevron-up");
  icon.classList.toggle("bx-chevron-down");
  icon.classList.toggle("rotate");
  dropdown.classList.toggle("show-dropdown");
  console.log("clicking");
}
// ? ==== Vertical tabs on medical history
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
