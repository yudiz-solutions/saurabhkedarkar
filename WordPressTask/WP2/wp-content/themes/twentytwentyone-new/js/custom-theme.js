
jQuery( document ).ready(function($) {
function myFunction(x) {
    x.classList.toggle("change");
    var x = document.getElementById("mytopnav");
    if (x.className === "menu") {
        x.className += " show";
    } else {
        x.className = "menu";
    }
}

$('.outer-client-logo').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    arrows: false,
    responsive: [{
        breakpoint: 1281,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000
        }
    }, {
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 1000
        }
    }, {
        breakpoint: 576,
        settings: {
            slidesToShow: 1,
            arrows: false,
            slidesToScroll: 1,
            infinite: true,
            // autoplay: true,
            autoplaySpeed: 1000
        }
    }]
});

let visibilityIds = ['#counters_1'];
let counterClass = '.counter';
let defaultSpeed = 2000;

});