import './bootstrap';
import 'flowbite';
document.addEventListener("DOMContentLoaded", () => {
    const content = document.querySelector(".page-content");
    if (content) {
        setTimeout(() => {
            content.classList.add("page-enter");
        }, 50);
    }
});
