particlesJS("particles-js", {
  particles: {
    number: { value: 80 },
    shape: { type: "circle" },
    opacity: { value: 0.7 },
    size: { value: 3 },
    move: { speed: 2 },
    line_linked: { enable: true, distance: 150, color: "#ffffff" },
  },
  interactivity: {
    events: { onhover: { enable: true, mode:"repulse" } },
  },
});


// ---
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont')
const smallMenu = document.querySelector('.header__sm-menu')
const headerHamMenuBtn = document.querySelector('.header__main-ham-menu')
const headerHamMenuCloseBtn = document.querySelector(
    '.header__main-ham-menu-close'
)
const headerSmallMenuLinks = document.querySelectorAll('.header__sm-menu-link')

hamMenuBtn.addEventListener('click', () => {
    if (smallMenu.classList.contains('header__sm-menu--active')) {
        smallMenu.classList.remove('header__sm-menu--active')
    } else {
        smallMenu.classList.add('header__sm-menu--active')
    }
    if (headerHamMenuBtn.classList.contains('d-none')) {
        headerHamMenuBtn.classList.remove('d-none')
        headerHamMenuCloseBtn.classList.add('d-none')
    } else {
        headerHamMenuBtn.classList.add('d-none')
        headerHamMenuCloseBtn.classList.remove('d-none')
    }
})

for (let i = 0; i < headerSmallMenuLinks.length; i++) {
    headerSmallMenuLinks[i].addEventListener('click', () => {
        smallMenu.classList.remove('header__sm-menu--active')
        headerHamMenuBtn.classList.remove('d-none')
        headerHamMenuCloseBtn.classList.add('d-none')
    })
}

// ---
const headerLogoConatiner = document.querySelector('.header__logo-container')

headerLogoConatiner.addEventListener('click', () => {
    location.href = 'index.html'
})

var color = '#75A5B7';
var maxParticles = 100;

Particles.init({
    selector: '#particles-js',
    color: color,
    maxParticles: maxParticles,
    connectParticles: true,
    speed: 0.5
});

/* ----------------------Start script Header Wave------------------------ */
let headingText = document.querySelector('.heading-text');//efek font scroll down
let subheadingText = document.querySelector('.sub-heading');

let shape1 = document.querySelector('#shape1');
let shape2 = document.querySelector('#shape2');
let shape3 = document.querySelector('#shape3');
let shape4 = document.querySelector('#shape4');

window.addEventListener('scroll', () => {
    let Value = window.scrollY;

    headingText.style.marginTop = Value * 4 + 'px'; 
    subheadingText.style.marginTop = Value * 4 + 'px';         
    shape1.style.backgroundPositionX = 400 + Value * 4 + 'px';           
    shape2.style.backgroundPositionX = 300 + Value * -4 + 'px';           
    shape3.style.backgroundPositionX = 200 + Value * 2 + 'px';           
    shape4.style.backgroundPositionX = 100 + Value * -2 + 'px';         
});

particlesJS("particles-js", {
  particles: {
    number: { value: 80 },
    shape: { type: "circle" },
    opacity: { value: 0.7 },
    size: { value: 3 },
    move: { speed: 2 },
    line_linked: { enable: true, distance: 150, color: "#ffffff" },
  },
  interactivity: {
    events: { onhover: { enable: true, mode:"repulse" } },
  },
});
/* ----------------------End script Header Wave------------------------ */

/* -------------------Start script Animation Bubble-------------------- */
class Bubble {
    constructor(container, options) {
        this.container = document.querySelector(container);
        this.colors = options.colors || [];
        this.createBubbles();
    }
  
    createBubbles() {
        for (let i = 0; i < 10; i++) {
            const bubble = document.createElement('div');
            bubble.classList.add('bubble');
            bubble.style.width = `${Math.random() * 50 + 10}px`;
            bubble.style.height = bubble.style.width;
            bubble.style.left = `${Math.random() * window.innerWidth}px`;
            bubble.style.backgroundColor = this.colors[Math.floor(Math.random() * this.colors.length)].bubbleColor;
            this.container.appendChild(bubble);
            this.animateBubble(bubble);
        }
    }
  
    animateBubble(bubble) {
        const duration = Math.random() * 3 + 2; // Random duration between 2s and 5s
        bubble.style.animationDuration = `${duration}s`;
        bubble.addEventListener('animationend', () => {
            bubble.remove();
            this.createBubbles(); // Create a new bubble after the old one is removed
        });
    }
  }
  
  var bubble = new Bubble('body', {
      colors: [{
          bubbleColor: 'rgba(255, 255, 255, 0.5)',
          bubbleSize: 20,
      }],
      delay: 200,
  });
  /* -------------------End script Animation Bubble-------------------- */

  /* ------------------Start script How it works------------------ */


  /* ------------------End script How it works------------------ */