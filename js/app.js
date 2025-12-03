document.addEventListener("DOMContentLoaded", (evt) => {
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

  // Homepage

  let split = SplitText.create(".text", {
    type: "words",
  });

  gsap.from(split.words, {
    x: 100,
    autoAlpha: 0,
    stagger: {
      amount: 1,
      from: "start",
    },
  });

  let homeSplit = SplitText.create(".home-title", {
    type: "words",
  });

  gsap.from(homeSplit.words, {
    y: 100,
    autoAlpha: 0,
    stagger: 0.05,
  });

  let homeUnder = document.querySelector("#home-underline");
  gsap.from(homeUnder, {
    duration: 1,
    x: -100,
    opacity: 0,
  });

  let homeBtn = document.querySelector("#home-btn");
  gsap.fromTo(
    homeBtn,
    {
      x: 100,
    },
    {
      x: 0,
      duration: 0.5,
      opacity: 1,
      delay: 0.5,
    }
  );

  let video = document.querySelector(".video");
  gsap.from(video, {
    duration: 0.5,
    y: -100,
    opacity: 0,
    delay: 0.5,
  });

  let featuredProducts = document.querySelector(".featured-product");
  gsap.from(featuredProducts, {
    duration: 0.5,
    x: 100,
    opacity: 0,
    delay: 1,
  });

  // Form
  let form = document.querySelector(".form-content");
  gsap.from(form, {
    duration: 1,
    y: 100,
    opacity: 0,
    delay: 0.5,
  });

  // about us page animation

  let aboutTitle = SplitText.create(".about-title", {
    type: "words",
  });

  gsap.from(aboutTitle.words, {
    y: 100,
    autoAlpha: 0,
    stagger: 0.1,
    delay: 0.5,
  });

  gsap.from(".aboutus-underline", {
    duration: 1.5,
    y: 100,
    opacity: 0,
    delay: 0.3,
  });

  gsap.from(".about-img", {
    duration: 1.5,
    y: -100,
    opacity: 0,
    delay: 0.8,
  });

  gsap.from(".text-about-us", {
    duration: 1,
    x: -100,
    opacity: 0,
    delay: 1,
  });

  // Online Ordering
  let onlineTitle = SplitText.create(".online-title", {
    type: "chars",
  });
  gsap.from(onlineTitle.chars, {
    x: 100,
    autoAlpha: 0,
    stagger: {
      amount: 0.5,
    },
    delay: 0.3,
  });

  // Header
  let header = document.querySelector(".header-container");

  gsap.from(header, {
    duration: 1,
    y: -100,
    opacity: 0,
  });

  // Product Archive Page Animation
  let productCatalog = SplitText.create("#product-catalog", {
    type: "chars",
  });

  let productTagline = SplitText.create("#product-catalog-tagline", {
    type: "lines",
  });

  gsap.from(productCatalog.chars, {
    y: 100,
    autoAlpha: 0,
    stagger: {
      amount: 0.5,
    },
    delay: 0.3,
  });

  gsap.from(productTagline.lines, {
    y: 50,
    autoAlpha: 0,
    stagger: 0.1,
    delay: 0.8,
  });

  let productBtn = document.querySelector("#product-btn");

  gsap.fromTo(
    productBtn,
    {
      duration: 0.5,
      x: 100,
      opacity: 0,
    },
    {
      duration: 0.5,
      x: 0,
      opacity: 1,
      delay: 1.5,
    }
  );

  let featuredCatalog = document.querySelector(".section-featured");

  gsap.from(featuredCatalog, {
    opacity: 0,
    y: 100,
    duration: 1,
    delay: 1.5,
  });

  let bgCatalog1 = document.querySelector(".bg-image1");
  gsap.from(bgCatalog1, {
    opacity: 0,
    x: -100,
    duration: 1,
    delay: 1,
  });

  let bgCatalog2 = document.querySelector(".bg-image2");
  gsap.from(bgCatalog2, {
    opacity: 0,
    x: -100,
    duration: 1,
    delay: 1,
  });

  // Single Product Page Animation
  let singleImg = document.querySelector("#single-img");
  let singleTitle = SplitText.create("#single-title", {
    type: "chars",
  });
  let singleDescription = SplitText.create("#single-description", {
    type: "lines",
  });
  let singleFeatured = document.querySelector("#single-featured");
  let singleBtn = document.querySelector("#single-btn");

  gsap.from(singleImg, {
    duration: 1,
    x: -100,
    opacity: 0,
    delay: 0.5,
  });
  gsap.from(singleTitle.chars, {
    x: 100,
    autoAlpha: 0,
    stagger: {
      amount: 0.5,
    },
    delay: 0.6,
  });
  gsap.from(singleDescription.lines, {
    y: 50,
    autoAlpha: 0,
    stagger: 0.1,
    delay: 0.7,
  });
  gsap.from(singleFeatured, {
    duration: 1,
    y: 100,
    opacity: 0,
    delay: 0.8,
  });

  gsap.fromTo(
    singleBtn,
    {
      duration: 0.5,
      x: 100,
      opacity: 0,
    },
    {
      duration: 0.5,
      x: 0,
      opacity: 1,
      delay: 1,
    }
  );

  let productDes = document.querySelector(".product-description");
  gsap.from(productDes, {
    duration: 1,
    x: -5000,
    opacity: 0,
  });

  // Footer
  let phoneBtn = document.querySelector(".phone-btn");
  gsap.from(phoneBtn, {
    duration: 1,
    y: 500,
    opacity: 0,
  });
});
