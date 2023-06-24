import "./bootstrap";

import Alpine from "alpinejs";

import Quill from "quill";
import "quill/dist/quill.snow.css";

window.Alpine = Alpine;

Alpine.start();

const sidebar = document.querySelector(".sidebar");
const overlay = document.querySelector(".overlay");
const deleteButtons = document.querySelectorAll(".js-delete-button");
const allCheck = document.querySelector("#allCheck");
const jsDeleteForm = document.querySelector(".js-delete-form");
const checkBoxLabel = document.querySelector(".js-check-label");
const checks = document.querySelectorAll(".js-check");
const deleteStampInput = document.querySelector(".js-delete-stamp");
const bulkDeleteButton = document.querySelector(".js-bulk-delete");

const mobileMenu = document.querySelector(".js-mobile-menu");
mobileMenu.addEventListener("click", () => {
    sidebar.classList.toggle("show");
    overlay.classList.toggle("show");
});

deleteButtons.forEach((button) => {
    button.addEventListener("click", (event) => {
        if (!window.confirm("本当に削除しますか？")) {
            event.preventDefault();
        }
    });
});

if (bulkDeleteButton) {
    bulkDeleteButton.addEventListener("click", (event) => {
        if (!window.confirm("本当に削除しますか？")) {
            event.preventDefault();
        }
    });
}

if (bulkDeleteButton) {
    allCheck.addEventListener("change", function () {
        let deleteStamps = [];
        checkBoxLabel.textContent = this.checked ? "全て解除" : "全て選択";
        jsDeleteForm.classList.toggle("hidden");

        checks.forEach((check) => {
            check.checked = this.checked;
            if (this.checked) {
                deleteStamps.push(check.value);
            }
        });

        deleteStampInput.value = this.checked ? String(deleteStamps) : "";
    });
}

if (checks) {
    checks.forEach((check) => {
        check.addEventListener("change", function () {
            const currentValues = deleteStampInput.value;
            let currentArray = currentValues ? currentValues.split(",") : [];

            if (this.checked) {
                currentArray.push(this.value);
            } else {
                currentArray = currentArray.filter(
                    (value) => value !== this.value
                );
            }

            deleteStampInput.value = String(currentArray);

            if (!currentArray.length) {
                checkBoxLabel.textContent = "全て選択";
                allCheck.checked = false;
                jsDeleteForm.classList.toggle("hidden");
            }
        });
    });
}

if (document.querySelector("#contentEditor")) {
    const quill = new Quill("#contentEditor", {
        modules: { toolbar: true },
        theme: "snow",
    });
}
