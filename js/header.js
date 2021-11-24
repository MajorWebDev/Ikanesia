var lazyLoadInstance = new LazyLoad({
    // Your custom settings go here
});
lazyLoadInstance.update();

document.getElementById("search-ico").style.fill = "var(--light-black)";
let xtoggle = false;
let searchBlock = document.getElementById("search");
document.getElementById("toggle-close-search").style.display = "none";

function showSearch() {
    if (!xtoggle) {
        searchBlock.style.display = "block";
        document.getElementById("header").style.height = "10em";
        document.getElementById("toggle-search").style.display = "none";
        document.getElementById("toggle-close-search").style.display = "block";
        xtoggle = true;
    } else {
        searchBlock.style.display = "none";
        document.getElementById("header").style.height = "5em";
        document.getElementById("toggle-search").style.display = "block";
        document.getElementById("toggle-close-search").style.display = "none";
        xtoggle = false;
    }
}

function showMenu() {
    document.getElementById("nav-menu").style.display = "flex";
    document.getElementById("nav-menu-overlay").style.display = "block";
    document.getElementById("nav-menu").style.animation = "navMenuShow 0.5s linear";
}

document.getElementById("nav-menu-overlay").addEventListener("click", closeMenu);

function closeMenu() {
    document.getElementById("nav-menu").style.animation = "navMenuClose 0.5s linear";

    var x = setInterval(close, 450);

    function close() {
        document.getElementById("nav-menu").style.display = "none";
        document.getElementById("nav-menu-overlay").style.display = "none";
        clearInterval(x);
    }
}

/*
document.getElementById("input-search").addEventListener("focusin", searchFocus);
document.getElementById("input-search").addEventListener("focusout", searchBlur);

function searchFocus() {
    document.getElementById("btn-search").style.backgroundPosition = "100% 0";
    document.getElementById("btn-search").style.backgroundColor = "var(--green)";
    document.getElementById("search-ico").style.fill = "var(--white)";
    document.getElementById("search-popup").style.display = "block";

}

function searchBlur() {
    document.getElementById("btn-search").style.backgroundPosition = "0 0";
    document.getElementById("btn-search").style.backgroundColor = "#f9f9f9";
    document.getElementById("search-ico").style.fill = "var(--light-black)";
    document.getElementById("search-popup").style.display = "none";
}

*/