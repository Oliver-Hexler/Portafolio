let indiceActual = 0;

function moverCarrusel(direccion, ide) {
    const carrusel = document.getElementById(ide);
    const slides = carrusel.querySelectorAll('.slide');
    const total = slides.length;

    indiceActual += direccion;

    if (indiceActual < 0) {
        indiceActual = total - 1;
    } else if (indiceActual >= total) {
        indiceActual = 0;
    }

    const desplazamiento = -indiceActual * 100;
    carrusel.style.transform = `translateX(${desplazamiento}%)`;
}