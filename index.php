<?php
    require 'includes/funciones.php';

    incluirTemplates('header', $inicio = true);
?>
        
        <main class="contenedor seccion">
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
        </main>

        <section class="seccion contenedor">
            <h2>Casas y Departamentos en venta</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio1.webp" type="image/webp">
                        <source srcset="build/img/anuncio1.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
                    </picture>

                    <div class="contenido-anuncio">
                        <h3>Casa de Lujo en el Lago</h3>
                        <p>Casa en el lago con excelene vista a un excelnete precio</p>
                        <p class="precio">$22.000.000</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
                                <p>3</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono cocheras">
                                <p>3</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>4</p>
                            </li>
                        </ul>

                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div>  

                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio2.webp" type="image/webp">
                        <source srcset="build/img/anuncio2.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio2.jpg" alt="anuncio">
                    </picture>

                    <div class="contenido-anuncio">
                        <h3>Departamento de Lujo</h3>
                        <p>Casa en el lago con excelene vista a un excelnete precio</p>
                        <p class="precio">15.000.000</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
                                <p>2</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono cocheras">
                                <p>2</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>3</p>
                            </li>
                        </ul>

                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div>   

                <div class="anuncio">
                    <picture>
                        <source srcset="build/img/anuncio3.webp" type="image/webp">
                        <source srcset="build/img/anuncio3.jpg" type="image/jpg">
                        <img loading="lazy" src="build/img/anuncio3.jpg" alt="anuncio">
                    </picture>

                    <div class="contenido-anuncio">
                        <h3>Casa con Piscina Lujosa</h3>
                        <p>Casa en el lago con excelene vista a un excelnete precio</p>
                        <p class="precio">$30.000.000</p>

                        <ul class="iconos-caracteristicas">
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono baños">
                                <p>4</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono cocheras">
                                <p>3</p>
                            </li>
                            <li>
                                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                                <p>6</p>
                            </li>
                        </ul>

                        <a href="anuncio.html" class="boton-amarillo-block">Ver Propiedad</a>
                    </div>
                </div>               
            </div>

            <div class="alinear-derecha">
                <a class="boton-verde" href="anuncios.php">Ver Todas</a>
            </div>
        </section>

        <section class="imagen-contacto">
            <h2>Encuentra la Casa de tus Sueños</h2>
            <p>Llena el siguiente formulario y un asesor se comunicará con vos a la brevedad.</p>
            <a class="boton-amarillo" href="contacto.html">Contactános</a>
        </section>

        <div class="contenedor seccion seccion-inferior">
            <section class="blog">
                <h3>Nuestro Blog</h3>

                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog1.webp" type="image/webp">
                            <source srcset="build/img/blog1.jpg" type="image/jpg">
                            <img src="build/img/blog1.jpg" alt="Textto Entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p class="informacion-meta">Escrito el: <span>31/10/2022</span> por: <span>Admin</span> </p>

                            <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero.</p>
                        </a>
                    </div>                    
                </article>

                <p class="linea-separacion"></p>

                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog2.webp" type="image/webp">
                            <source srcset="build/img/blog2.jpg" type="image/jpg">
                            <img src="build/img/blog2.jpg" alt="Textto Entrada Blog">
                        </picture>
                    </div>

                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Guia para la decoración de tu hogar</h4>
                            <p class="informacion-meta">Escrito el: <span>31/10/2022</span> por: <span>Admin</span> </p>

                            <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio.</p>
                        </a>
                    </div>
                </article>
            </section>

            <section class="testimoniales">
                <h3>Testimoniales</h3>

                <div class="testimonial">
                    <blockquote>
                        El personal se comporto de una excelente forma, muy buean atención y predisposición para atender. Muy recomendable.
                    </blockquote>
                    <p>- Diego Armando -</p>
                </div>
            </section>
        </div>

        <?php
            incluirTemplates('footer');
        ?>
        
        