const menu = document.getElementById("menu");
const lineup = document.getElementById("lineup");

function toggleMenu() {
  menu.classList.toggle("show");
}

function closeMenu() {
  menu.classList.remove("show");
}

function scrollToLineup() {
  if (document.getElementById("lineup")) {
    closeMenu();
    lineup.scrollIntoView({ behavior: "smooth" });
  } else {
    window.location.href = "/#lineup";
  }
}

const landingVideo = document.getElementById("landingVideo");

const headerPoster = document.getElementById("headerPoster");

window.onload = () => {
  landingVideo
    .play()
    .then(() => {})
    .catch((err) => {
      // Video couldn't play, low power play button showing.
      landingVideo.remove();

      headerPoster.classList.add("show");
    });
};
