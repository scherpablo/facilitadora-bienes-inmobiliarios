document.addEventListener('DOMContentLoaded', function() {
    
    eventListeners();

    darkMode();
});

function darkMode() {

    const eligeDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    if (eligeDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    } 

    eligeDarkMode.addEventListener('change', function() {
        if (eligeDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        } 
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners() {
    
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);    
}

function navegacionResponsive() {
    
    const navegacion = document.querySelector('.navegacion');

    // navegacion.classList.toggle('mostrar'); //La propiedad toggle agrega o quita la clase mostrar dependiendo si esta o no.

    if (navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar');
    } else {
        navegacion.classList.add('mostrar');
    }
}


