<?php
    require 'includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpg">
            <img src="build/img/destacada2.jpg" alt="Casa frente al bosque">
        </picture>

        <p class="informacion-meta">Escrito el: <span>31/10/2022</span> por: <span>Admin</span> </p>

        <div class="resumen propiedad">         
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eligendi aspernatur nesciunt suscipit 
                numquam corrupti neque veniam consectetur facere accusantium quos nam quidem? Rem repellendus vero suscipit? Fuga, totam in.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eligendi aspernatur nesciunt suscipit 
                numquam corrupti neque veniam consectetur facere accusantium quos nam quidem? Rem repellendus vero suscipit? Fuga, totam in.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eligendi aspernatur nesciunt suscipit 
                numquam corrupti neque veniam consectetur facere accusantium quos nam quidem? Rem repellendus vero suscipit? Fuga, totam in.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eligendi aspernatur nesciunt suscipit 
                numquam corrupti neque veniam consectetur facere accusantium quos nam quidem? Rem repellendus vero suscipit? Fuga, totam in.
            </p>
        </div>
    </main>

    <?php
        incluirTemplates('footer');
    ?>
    
    