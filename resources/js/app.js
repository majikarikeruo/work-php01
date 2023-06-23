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

document.querySelector("#allCheck").addEventListener("click", function () {
    const _this = this;
    const jsDeleteForm = document.querySelector(".js-delete-form");
    const checkBoxLabel = document.querySelector(".js-check-label");
    checkBoxLabel.textContent = _this.checked ? "全て解除" : "全て選択";
    jsDeleteForm.classList.toggle("hidden");

    document.querySelectorAll(".js-check").forEach((item) => {
        _this.checked ? (item.checked = true) : (item.checked = false);
    });
});
