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
