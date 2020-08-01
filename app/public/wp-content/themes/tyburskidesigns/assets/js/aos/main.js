AOS.init({
  delay: 400,
  duration: 500,
  offset: 0,
  once: true,
});

window.addEventListener('load', function() {
  AOS.refresh();
});