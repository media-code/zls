let lastKnownScrollPosition = 0;
let ticking = false;

let body = document.querySelector('body')

function toggleBodyScrolledClass(scrollPos) {
  if(scrollPos > 60){
    body.classList.add('scrolled')
  } else {
    body.classList.remove('scrolled')
  }
}

document.addEventListener('scroll', function(e) {
  lastKnownScrollPosition = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function() {
      toggleBodyScrolledClass(lastKnownScrollPosition);
      ticking = false;
    });

    ticking = true;
  }
});