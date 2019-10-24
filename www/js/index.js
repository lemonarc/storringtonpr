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
        if (heroInformation) {
          const transform = ((progress - slide.x) / 2) * -1;
          heroInformation.style.transform = 'translateX(' + transform.toString() + 'px)';
        }
      });
    });
  });
}

$(document).ready(function () {
  scaleVideoContainer();

  initBannerVideoSize('.video-container .poster img');
  initBannerVideoSize('.video-container .filter');
  initBannerVideoSize('.video-container video');

  window.addEventListener('resize', function() {
    scaleVideoContainer();
    scaleBannerVideoSize('.video-container .poster img');
    scaleBannerVideoSize('.video-container .filter');
    scaleBannerVideoSize('.video-container video');
  });
});

function scaleVideoContainer() {
  var height = $(window).height() - 300;
  var unitHeight = parseInt(height) + 'px';
  $('.video-container').css('height',unitHeight);
}

function initBannerVideoSize(element){
  $(element).each(function(){
    $(this).data('height', $(this).height());
    $(this).data('width', $(this).width());
  });

  scaleBannerVideoSize(element);
}

function scaleBannerVideoSize(element) {
  var windowWidth = $(window).width(),
      windowHeight = $(window).height() - 300,
      videoWidth,
      videoHeight;

   console.log(windowHeight);

  $(element).each(function(){
    var videoAspectRatio = $(this).data('height')/$(this).data('width');

    $(this).width(windowWidth);

    if(windowWidth < 1200){
        videoHeight = windowHeight;
        videoWidth = videoHeight / videoAspectRatio;
        $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

        $(this).width(videoWidth).height(videoHeight);
    }
  });
}
