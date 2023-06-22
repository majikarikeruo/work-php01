import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.querySelector(".js-mobile-menu").addEventListener("click", () => {
    console.log("clicked");
    document.querySelector(".sidebar").classList.toggle("show");
    document.querySelector(".overlay").classList.toggle("show");
});

document.querySelectorAll(".js-delete-button").forEach((item) => {
    item.addEventListener("click", (event) => {
        const res = window.confirm("本当に削除しますか？");
        if (!res) {
            event.preventDefault();
        }
    });
});
