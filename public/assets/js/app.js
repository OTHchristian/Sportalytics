$('.carousel').carousel({
  interval: 4000
})
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
});

document.querySelectorAll('.box').forEach(box => {
  observer.observe(box);
});
