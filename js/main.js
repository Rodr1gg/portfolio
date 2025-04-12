// Animtation for hero
var typed = new Typed('#typed-text', {
    strings: ['Hi, I\'m Rodrigo Machado'],
    typeSpeed: 50,
    backSpeed: 40,
    showCursor: true,
    loop: false,
    onComplete: function(self) {
        setTimeout(() => {
            document.querySelector('.typed-cursor').style.opacity = '0';
        }, 500);
    }
});


setTimeout(() => {
    var typed2 = new Typed("#typed-text2", {
        strings: ['Web Developer', 'Graphic Designer'],
        typeSpeed: 40,
        backSpeed: 80,
        loop: true,
        showCursor: true
    });
}, 3000); 


//scrollreveal here

ScrollReveal().reveal('.description', {
    origin: 'top',
    distance: '70px',
    duration: 1000,
    easing: 'ease-in-out',
    delay: 200
  });

  ScrollReveal().reveal('.contactForm', {
    origin: 'bottom',
    distance: '70px',
    duration: 1000,
    easing: 'ease-in-out',
    delay: 200
  });



  //toast

