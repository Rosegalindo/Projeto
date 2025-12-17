// Pequena animação ao clicar nos botões
document.querySelectorAll(".btn").forEach(btn => {
    btn.addEventListener("click", () => {
        btn.classList.add("active");
        setTimeout(() => btn.classList.remove("active"), 150);
    });
});

// Pagina dos botoes
document.querySelectorAll(".carousel").forEach(carousel => {
    let index = 0;
    const images = carousel.querySelectorAll("img");

    carousel.querySelector(".next").onclick = () => {
        images[index].classList.remove("active");
        index = (index + 1) % images.length;
        images[index].classList.add("active");
    };

    carousel.querySelector(".prev").onclick = () => {
        images[index].classList.remove("active");
        index = (index - 1 + images.length) % images.length;
        images[index].classList.add("active");
    };
});

