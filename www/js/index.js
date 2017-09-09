const Flickity = require('flickity');

const carousel = document.querySelector('.hero_splash');

if (carousel) {
  const flickCarousel = new Flickity(carousel, {
    // options
    wrapAround: true,
    draggable: true,
    setGallerySize: false,
    autoPlay: 4000,
    selectedAttraction: 0.05,
    friction: 0.5
  });

  flickCarousel.on('scroll', function(event, progress) {
    flickCarousel.slides.forEach(function(slide, i) {
      slide.cells.forEach(function(cell) {
        const heroInformation = cell.element.querySelector('.hero_information');
        const transform = ((progress - slide.x) / 2) * -1;
        heroInformation.style.transform = 'translateX(' + transform.toString() + 'px)';
      });
    });
  });
}