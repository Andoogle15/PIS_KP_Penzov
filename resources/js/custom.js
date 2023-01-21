const arrowUp = document.querySelector(".arrowUp");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        arrowUp.classList.toggle("active");
    } else {
        arrowUp.classList.remove("active");
    }
})
