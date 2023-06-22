import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.querySelector(".js-mobile-menu").addEventListener("click", () => {
    console.log("clicked");
    document.querySelector(".sidebar").classList.toggle("show");
    document.querySelector(".overlay").classList.toggle("show");
});
