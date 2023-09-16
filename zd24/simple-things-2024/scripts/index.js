const menu = document.getElementById("menu");
const lineup = document.getElementById("lineup");

function toggleMenu() {
  menu.classList.toggle("show");
}

function closeMenu() {
  menu.classList.remove("show");
}

function scrollToLineup() {
  console.log("scroll to lineup");
  closeMenu();
  lineup.scrollIntoView({ behavior: "smooth" });
}
