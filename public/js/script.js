
window.addEventListener('resize', function() {
    if(window.outerWidth < 360) {
        window.resizeTo(360, window.outerHeight);
    }
}, true);

window.onscroll = function() {
    const navbar = document.getElementById("navBarAiex");
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navbar.classList.add("navbar-sticky");
        navbar.classList.remove("nav-fixed-top")
    } else {
        navbar.classList.remove("navbar-sticky");
        navbar.classList.add("nav-fixed-top")
    }
};
