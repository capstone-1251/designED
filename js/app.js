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


