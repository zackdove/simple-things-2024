new Glide('.glide', {
  gap: 0,
}).mount()


const dateMarqueeContainers = document.querySelectorAll('.marqueeContainer');
let start, previousTimeStamp;

const lerp = (current, target, factor) => current * (1 - factor) + target * factor;


class LoopingText {
  constructor(el) {
    this.el = el;
    this.lerp = {current: 0, target: 0};
    this.interpolationFactor = 0.1;
    this.speed = 0.2;
    this.direction = -1; // -1 (to-left), 1 (to-right) 
    
    // Init
    this.el.style.cssText = `position: relative; display: inline-flex; white-space: nowrap;`;
    this.el.children[1].style.cssText = `position: absolute; left: ${100 * -this.direction}%;`;
    this.events();
    this.render();
  }

  events() {
    window.addEventListener("scroll", () => this.lerp.target += this.speed * 5);
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

function setActivePreviousEdition(year){
  console.log(year)
  const overlayTop = document.getElementById('overlayTop')

  const previousEditions = document.querySelectorAll('.previousEditions>div');
  console.log(previousEditions)
  for (let i = 0; i < previousEditions.length; i++){
    previousEditions[i].classList.remove('active');
  }
  const target = document.getElementById(year.toString());
  target.classList.add('active')
  console.log(target)

  const previousTabs = document.querySelectorAll('.overlayTop>path');
  for (let i = 0; i < previousTabs.length; i++){
    previousTabs[i].classList.remove('active');
  }
  const targetTab = document.getElementById('tab'+year.toString());
  overlayTop.appendChild(targetTab)
  
  console.log('tab'+year.toString())
  targetTab.classList.add('active');

  const previousTitles = document.querySelectorAll('.overlayTop>text');
  for (let i = 0; i < previousTitles.length; i++){
    previousTitles[i].classList.remove('active');
  }
  const targetTitle = document.getElementById('title'+year.toString());
  targetTitle.classList.add('active');
  overlayTop.appendChild(targetTitle)

  

}