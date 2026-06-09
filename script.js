console.log("Sistema cargado correctamente 🚀");

function iniciarSistema() {
    console.log("Bienvenido al sistema tipo Netflix 😎");
}

iniciarSistema();

document.addEventListener("DOMContentLoaded", () => {
    console.log("DOM completamente cargado ✔");

    const inputs = document.querySelectorAll("input");

    inputs.forEach(input => {
        input.addEventListener("focus", () => {
            input.style.outline = "2px solid red";
        });

        input.addEventListener("blur", () => {
            input.style.outline = "none";
        });
    });
});

function buscarContenido(texto) {
    console.log("Buscando:", texto);
}