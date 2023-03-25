const toTopButton = document.querySelector(".toTopButton");
const slideIn = document.querySelectorAll(".slide-in");
const slideInLeft = document.querySelectorAll(".slide-in-left");

window.addEventListener("scroll", () => {
  toggletoTopButton();
});

function toggletoTopButton() {
  if (
    document.body.scrollTop > 350 ||
    document.documentElement.scrollTop > 350
  ) {
    toTopButton.style.opacity = 0.8;
  } else {
    toTopButton.style.opacity = 0;
  }
}

const sectionObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("active");
      sectionObserver.unobserve(entry.target);
    }
  });
});

slideIn.forEach((section) => {
  sectionObserver.observe(section);
});

slideInLeft.forEach((section) => {
  sectionObserver.observe(section);
});
