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
  e.stopPropagation(); // กันไม่ให้ไป trigger document click
  searchInput.classList.toggle("search-close");
});

// ปิด search เมื่อคลิกข้างนอก
document.addEventListener("click", (evt) => {
  if (!searchInput.contains(evt.target) && !searchBtn.contains(evt.target)) {
    searchInput.classList.remove("search-close");
  }
});
