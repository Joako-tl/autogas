const images = [
    'url("Fachadaautogas01.jpg")',
    'url("Fachadaautogas02.jpg")'
    
    
];

let currentIndex = 0;

function changeBackground() {
    document.getElementById('page-top').style.backgroundImage = images[currentIndex];
    currentIndex = (currentIndex + 1) % images.length;
}

setInterval(changeBackground, 5000); // Cambia cada 5 segundos
