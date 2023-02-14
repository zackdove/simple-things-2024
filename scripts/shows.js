
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
