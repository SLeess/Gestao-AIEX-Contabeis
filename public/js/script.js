
window.addEventListener('resize', function() {
    if(window.outerWidth < 360) {
        window.resizeTo(360, window.outerHeight);
    }
}, true);

window.onscroll = () => changeSchema(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50);

function changeSchema(isScrolled) {
    const navbar = document.getElementById("navBarAiex");
    const isNavbarCollapsed = $("#navbarCollapse").hasClass('show');

    navbar.classList.toggle("navbar-sticky", isScrolled || isNavbarCollapsed);
    navbar.classList.toggle("nav-fixed-top", !isScrolled && !isNavbarCollapsed);
}

$("#navBarAiex div button").button().click(() => changeSchema(true));
