let navbarToggle = document.getElementById("navbar-toggle");
let navbarMenu = document.getElementById("navbar-menu");
let nav = document.getElementById("navbar");
var lastScrollTop = 0;
window.addEventListener(
    "scroll",
    function () {
        var x = window.pageYOffset || document.documentElement.scrollTop;
        if (x > lastScrollTop) {
            nav.classList.remove("show");
        } else {
            nav.classList.add("show");
        }
        lastScrollTop = x <= 0 ? 0 : x;
    },
    false
);
navbarToggle.addEventListener("click", function () {
    navbarToggle.classList.toggle("is-active");
    navbarMenu.classList.toggle("is-active");
});
var tabBtns = document.getElementsByClassName("tab-btn");
tabBtns = Array.from(tabBtns);
let contentAreas = document.getElementsByClassName("content-area");
tabBtns.forEach((el) => {
    el.addEventListener("click", () => {
        var x = parseInt(el.dataset.target);
        parseTabs(x);
    });
});
let navLinks = document.getElementsByClassName("navbar-item");
navLinks = Array.from(navLinks);
navLinks.forEach((el) => {
    el.addEventListener('click', () => {
        el.classList.add('active');
        for(i = 0; i<navLinks.length; i++) {
            if(el == navLinks[i]) {}
            else {
                navLinks[i].classList.remove('active');
            }
        }
    })
});
function parseTabs(target) {
    for (i = 0; i < tabBtns.length; i += 1) {
        if (i == target) {
            continue;
        }
        if (tabBtns[i].parentElement.classList.contains("is-active") && contentAreas[i].classList.contains("show")) {
            tabBtns[i].parentElement.classList.remove("is-active");
            contentAreas[i].classList.remove("show");
        }
    }
    tabBtns[target].parentElement.classList.add("is-active");
    contentAreas[target].classList.add("show");
}
window.onscroll = function () {
    scrollFunction();
};
function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("backTop").classList.add("show");
    } else {
        document.getElementById("backTop").classList.remove("show");
    }
}
