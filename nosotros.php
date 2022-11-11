<?php
    require 'includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
    </main>

    <div class="contenedor-nosotros">
        <div class="imagen-nosotros">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>25 Años de Experiencia</blockquote>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione necessitatibus assumenda consequuntur molestiae 
                fugiat reiciendis quasi ad consequatur voluptate, excepturi veritatis reprehenderit et. Repellendus assumenda a 
                quos eligendi, ipsa ipsam?
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione necessitatibus assumenda consequuntur molestiae 
                fugiat reiciendis quasi ad consequatur voluptate, excepturi veritatis reprehenderit et. Repellendus assumenda a 
                quos eligendi, ipsa ipsam?
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione necessitatibus assumenda consequuntur molestiae 
                fugiat reiciendis quasi ad consequatur voluptate, excepturi veritatis reprehenderit et. Repellendus assumenda a 
                quos eligendi, ipsa ipsam?
            </p>
        </div>        
    </div>

    <sction class="contenedor seccion">
        <h1>Conocenos Más</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae provident voluptatum quam delectus aspernatur. 
                Sequi nam quas aperiam praesentium aliquam odio cum rerum repellat. Iure alias recusandae ab dolorum quidem.</p>
            </div>
            
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae provident voluptatum quam delectus aspernatur. 
                Sequi nam quas aperiam praesentium aliquam odio cum rerum repellat. Iure alias recusandae ab dolorum quidem.</p>
            </div>
            
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono A Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae provident voluptatum quam delectus aspernatur. 
                Sequi nam quas aperiam praesentium aliquam odio cum rerum repellat. Iure alias recusandae ab dolorum quidem.</p>
            </div>            
        </div>
    </section>

    <?php
        incluirTemplates('footer');
    ?>
    
    