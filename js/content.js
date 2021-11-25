let page = 3;
const mediaQuery = window.matchMedia('(max-width: 768px)')
if (mediaQuery.matches) {
    page = 2;
} else {
    page = 3;
}
var splide = new Splide('.splide', {
    type: 'loop',
    perPage: page,
    perMove: 1,
    height: '20em',
    classes: {
        pagination: 'page',
        page: 'page',
    }
});

splide.mount();

var slideIndex = 1;
showDivs(slideIndex);
autoPlaySlide();

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slider-box");
    var dots = document.getElementsByClassName("pagging-shape");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

function autoPlaySlide() {
    var i;
    var x = document.getElementsByClassName("slider-box");
    var dots = document.getElementsByClassName("pagging-shape");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(autoPlaySlide, 5000);
}
var lazyLoadInstance = new LazyLoad({
    container: document.querySelector("body")
});
lazyLoadInstance.update();