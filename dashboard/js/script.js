// ? open and close Side Bar
const body = document.querySelector("body"),
  sidebar = body.querySelector("nav"),
  toggle = body.querySelector(".toggle");
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});

function toggleDropdown() {
  var icon = document.getElementById("icon");
  icon.classList.toggle("bx-chevron-up");
  icon.classList.toggle("bx-chevron-down");
  icon.classList.toggle("rotate");
}
