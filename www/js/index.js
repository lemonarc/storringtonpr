const Flickity = require('flickity-bg-lazyload');

const carousel = document.querySelector('.hero_splash');

if (carousel) {
  const flickCarousel = new Flickity(carousel, {
    // options
    wrapAround: true,
    draggable: true,
    setGallerySize: false,
    autoPlay: 7000,
    selectedAttraction: 0.05,
    friction: 0.5,
    bgLazyLoad: 1
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