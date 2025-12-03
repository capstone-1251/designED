let hiddenNav = document.querySelector(".hamburger");
let hidden = document.querySelector(".hidden");
let close = document.querySelector(".close");
let searchBtn = document.querySelector(".size-6");
let searchInput = document.querySelector(".search-input");

hiddenNav.addEventListener("click", () => {
  hidden.classList.toggle("unhidden");
});

close.addEventListener("click", () => {
  hidden.classList.remove("unhidden");
});

searchBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  searchInput.classList.toggle("search-close");
});

document.addEventListener("click", (evt) => {
  if (!searchInput.contains(evt.target) && !searchBtn.contains(evt.target)) {
    searchInput.classList.remove("search-close");
  }
});

// about us page animation

let testText = SplitText.create(".text-about-us", {
  type: "words",
});

gsap.from(testText.words, {
  y: 100,
  autoAlpha: 0,
  stagger: 0.05,
  delay: 1,
});

// For Web Banner Text
gsap.registerPlugin(SplitText);

console.clear();

document.fonts.ready.then(() => {
  gsap.set("#split", { opacity: 1 });

  let split;
  SplitText.create("#split", {
    type: "words,lines",
    linesClass: "line",
    autoSplit: true,
    mask: "lines",
    onSplit: (self) => {
      split = gsap.from(self.lines, {
        duration: 0.6,
        yPercent: 80,
        opacity: 0,
        stagger: 0.2,
        ease: "circ.out",
        timeScale: 0.2,
        play: 0,
      });
      return split;
    },
  });
});

gsap.from(".banner-content", {
  scrollTrigger: {
    trigger: ".featured-product",
    start: "clamp(top center)",
    end: "clamp(bottom center)",
    marker: true,
  },
  yPercent: 30,
  opacity: 0,
  duration: 1,
  stagger: 0.2,
});

gsap.from(".story-img", {
  scrollTrigger: {
    trigger: ".our-story",
    start: "clamp(top center)",
    end: "clamp(bottom center)",
    marker: true,
  },
  yPercent: 30,
  opacity: 0,
  duration: 1,
  stagger: 0.2,
});

gsap.from(".btn", {
  scrollTrigger: {
    trigger: ".banner-btn",
    start: "bottom 70%",
  },
  opacity: 0,
  yPercent: 100,
  duration: 1,
  ease: "power.in",
});
