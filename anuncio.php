<?php
    require 'includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpg">
            <img src="build/img/destacada.jpg" alt="Casa frente al bosque">
        </picture>

        <div class="resumen-propiedad"> 
            <p class="precio">$15.000.000</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>3</p>
                </li>
            </ul>

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
    
    