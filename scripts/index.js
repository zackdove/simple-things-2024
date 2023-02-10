const isDesktop = window.matchMedia("(min-width: 600px)").matches;

const quoteGlider = new Glide('.quotesContainer>.glide', {
  gap: 0,
  perView: isDesktop ? 2 : 1,
  bound: isDesktop,
}).mount()
quoteGlider.on('resize', () => {
  console.log('resize')
  quoteGlider.update({
    perView: window.matchMedia("(min-width: 600px)").matches ? 2 : 1,
    bound: window.matchMedia("(min-width: 600px)").matches,
  })
})

const photoGlider = new Glide('.photoGlider>.glide', {
  gap: 0,
  animationDuration: 1000,
  autoplay: 5000,
}).mount()


const dateMarqueeContainers = document.querySelectorAll('.marqueeContainer');
let start, previousTimeStamp;

const lerp = (current, target, factor) => current * (1 - factor) + target * factor;


class LoopingText {
  constructor(el) {
    this.el = el;
    this.lerp = { current: 0, target: 0 };
    this.interpolationFactor = 0.1;
    this.speed = 0.1;
    this.direction = -1; // -1 (to-left), 1 (to-right) 

    // Init
    this.el.style.cssText = `position: relative; display: inline-flex; white-space: nowrap;`;
    this.el.children[1].style.cssText = `position: absolute; left: ${100 * -this.direction}%;`;
    this.events();
    this.render();
  }

  events() {
    document.getElementById('mainContentContainer').addEventListener("scroll", () => { 
      console.log('hi')
      this.lerp.target += this.speed * 5 
    });
  }

  animate() {
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

document.querySelectorAll(".marqueeContainer").forEach(el => new LoopingText(el));

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
    overlayTop.appendChild(tabs[i])
    tabs[i].classList.remove('active');
  }
  const targetTab = document.getElementById('tab' + year.toString());
  overlayTop.appendChild(targetTab)

  console.log('tab' + year.toString())
  targetTab.classList.add('active');

  for (let i = 0; i < titles.length; i++) {
    overlayTop.appendChild(titles[i])
    titles[i].classList.remove('active');
  }
  const targetTitle = document.getElementById('title' + year.toString());
  targetTitle.classList.add('active');
  overlayTop.appendChild(targetTitle)



}