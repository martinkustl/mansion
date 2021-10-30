// Přepínání navbaru - otevřeno/zavřeno
function toggleNavbar() {
    const dropdown = document.querySelector(".main-nav__items");
    const barIcon = document.querySelector(".bi-list");
    const closeIcon = document.querySelector(".bi-x-lg");
    const burger = document.querySelector(".burger-bar");
    dropdown.classList.toggle("open");
    barIcon.classList.toggle("close-burger");
    closeIcon.classList.toggle("close-burger");

    burger.classList.toggle("open-burger");

    // dropdown = document.querySelector('.main-nav__items');
    // barIcon = document.querySelector('.fa-bars');
    // closeIcon = document.querySelector('.fa-times');
    // dropdown.classList.toggle('open');
    // barIcon.classList.toggle('close');
    // closeIcon.classList.toggle('close');

    // {{-- <i class="fa fa-bars" aria-hidden="true"></i>
    // <i class="fa fa-times close" aria-hidden="true"></i>
    // x --}}
    // <i class="bi bi-list"></i>
    // <i class="bi bi-x-lg"></i>
}

// Resize event, který je nutné spustit kvůli mizejícímu logu v navbaru
let resizeTimer;
window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        const navbar = document.getElementById("app-logo-wrapper");
        const deviceWidth = window.innerWidth;
        if (deviceWidth < 768) {
            navbar.classList.remove("main-nav__logo--hide");
        }
    }, 400);
});

// Tento kus kódu schovává logo v navbaru na desktopu
// Řeší to case, kdy někdo na počítači mění velikost zařízení a testuje responsivitu...
window.addEventListener("scroll", scrollFunction);
function scrollFunction() {
    const navbar = document.getElementById("app-logo-wrapper");
    const deviceWidth = window.innerWidth;

    if (deviceWidth < 768) return;

    if (
        document.body.scrollTop > 150 ||
        document.documentElement.scrollTop > 150
    ) {
        return navbar.classList.add("main-nav__logo--hide");
    }

    navbar.classList.remove("main-nav__logo--hide");
}
