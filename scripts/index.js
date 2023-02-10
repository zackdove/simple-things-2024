const isDesktop = window.matchMedia("(min-width: 600px)").matches;

const quoteGlider = new Glide('.quotesContainer>.glide', {
  gap: 0,
  perView: isDesktop ? 2 : 1,
  bound: isDesktop,
  autoplay: isDesktop ? false : 3000,
}).mount()
quoteGlider.on('resize', () => {
  console.log('resize')
  quoteGlider.update({
    perView: window.matchMedia("(min-width: 600px)").matches ? 2 : 1,
    bound: window.matchMedia("(min-width: 600px)").matches,
    autoplay: window.matchMedia("(min-width: 600px)").matches ? false : 3000,
  })
})


const photoGlider = new Glide('.photoGlider>.glide', {
  gap: 0,
  animationDuration: 1000,
  autoplay: 5000,
}).mount()

var scrollAmount = 0;




const dateMarqueeContainers = document.querySelectorAll('.marqueeContainer');
let start, previousTimeStamp;

const lerp = (current, target, factor) => current * (1 - factor) + target * factor;


class LoopingText {
  constructor(el) {
    this.el = el;
    this.lerp = { current: 0, target: 0 };
    this.interpolationFactor = 0.1;
    this.speed = 0.1;
    this.direction = el.classList.contains('reverse') ? -1 : 1; // -1 (to-left), 1 (to-right) 
    // Init
    this.el.style.cssText = `position: relative; display: inline-flex; white-space: nowrap;`;
    this.el.children[1].style.cssText = `position: absolute; left: ${100 * -this.direction}%;`;
    // this.events();
    // this.render();
  }

  events() {
    document.getElementById('mainContentContainer').addEventListener("scroll", () => {
      console.log('hi')
      this.lerp.target += this.speed * 2
    });
  }

  update() {
    this.lerp.target += this.speed;
    this.lerp.current = lerp(this.lerp.current, this.lerp.target, this.interpolationFactor);

    if (this.lerp.target > 100) {
      this.lerp.current -= this.lerp.target;
      this.lerp.target = 0;
    }

    const x = this.lerp.current * this.direction;
    this.el.style.transform = `translateX(${x}%)`;
  }

  render() {
    this.animate();
    window.requestAnimationFrame(() => this.render());
  }
}

const updatables = []

function render() {
  window.requestAnimationFrame(render)
  for (let i = 0; i < updatables.length; i++) {
    updatables[i].update()
  }
}
render()




document.querySelectorAll(".marqueeContainer").forEach(el => {
  updatables.push(new LoopingText(el))
});



const tabs = [
  document.getElementById('tab2019'),
  document.getElementById('tab2018'),
  document.getElementById('tab2017'),
  document.getElementById('tab2016'),
  document.getElementById('tab2015'),
]

const titles = [
  document.getElementById('title2019'),
  document.getElementById('title2018'),
  document.getElementById('title2017'),
  document.getElementById('title2016'),
  document.getElementById('title2015'),
]

function setActivePreviousEdition(year) {
  console.log(year)
  const overlayTop = document.getElementById('overlayTop')

  const previousEditions = document.querySelectorAll('.previousEditions>div');
  console.log(previousEditions)
  for (let i = 0; i < previousEditions.length; i++) {
    previousEditions[i].classList.remove('active');
  }
  const target = document.getElementById(year.toString());
  target.classList.add('active')
  console.log(target)

  for (let i = 0; i < tabs.length; i++) {
    // overlayTop.appendChild(tabs[i])
    tabs[i].classList.remove('active');
  }
  const targetTab = document.getElementById('tab' + year.toString());
  overlayTop.appendChild(targetTab)

  console.log('tab' + year.toString())
  targetTab.classList.add('active');

  for (let i = 0; i < titles.length; i++) {
    // overlayTop.appendChild(titles[i])
    titles[i].classList.remove('active');
  }
  const targetTitle = document.getElementById('title' + year.toString());
  targetTitle.classList.add('active');
  overlayTop.appendChild(targetTitle)



}

function closeMailer() {
  console.log('close mailer')

  const mailerContainer = document.getElementById('mailerContainer')
  mailerContainer.classList.add('hide')
  setTimeout(() => {
    mailerContainer.remove()
  }, 2000)
}

document.querySelector('#titleContainer>video').loop = true;

const mainContentContainer = document.getElementById('mainContentContainer')


const sideImagesEl = document.querySelector('.sideImages')
const sideImages = sideImagesEl.children

for (let i = 0; i < sideImages.length; i++) {
  sideImages[i].style.zIndex = sideImages.length-i;
}

mainContentContainer.addEventListener("scroll", (event) => {
  for (let i = 0; i < sideImages.length; i++) {
    // console.log(sideImages[i])
    // console.log( )
    const d = 2 * (mainContentContainer.scrollTop - sideImages[i].offsetTop) - (i * (sideImages[i].clientWidth + 24)) + 800;
    sideImages[i].style.transform = `translateX(${Math.min(d, 0)}px)`
  }
});