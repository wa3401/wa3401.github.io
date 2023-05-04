// Select all navbar links
const navbarLinks = document.querySelectorAll('nav a.scroll-link');

// Add event listener to each navbar link
navbarLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Prevent default link behavior
    event.preventDefault();

    // Get section id from link href attribute
    const sectionId = this.getAttribute('href');

    // Select section with corresponding id
    const section = document.querySelector(sectionId);

    // Scroll to section with smooth animation
    window.scrollTo({
      behavior: 'smooth',
      top: section.offsetTop - 50
    });
  });
});

$(document).ready(function(){
    $('.carousel-inner').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: true,
      prevArrow: $('.carousel-control-prev'),
      nextArrow: $('.carousel-control-next'),
      dots: true,
      appendDots: $('.carousel-indicators')
    });
  });
