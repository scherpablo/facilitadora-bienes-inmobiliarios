<?php
    require 'includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>

        <h2>Llene el siguiente formulario de contacto</h2>

            <form class="formulario">
                <fieldset>
                    <legend>Información Personal</legend>

                    <label for="nombre">Nombre</label>
                    <input type="text" placeholder="Tu nombre" id="nombre">
                    
                    <label for="email">Email</label>
                    <input type="email" placeholder="Tu email" id="email">
                    
                    <label for="telefono">Telefono</label>
                    <input type="tel" placeholder="Tu telefono" id="telefono">
                    
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" rows="5"></textarea>
                </fieldset>

                <fieldset>
                    <legend>Información de la Propiedad</legend>

                    <label for="opciones">Vende o Compra:</label>
                    <select id="opciones">
                        <option value="" disabled selected>-- seleccionar --</option>
                        <option value="Compra">Vende</option>
                        <option value="Vende">Compra</option>
                    </select>

                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input type="text" id="presupuesto">
                </fieldset>

                <fieldset>
                    <legend>Contacto</legend>

                    <p>Como desea ser contactado?</p>
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Telefono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                        
                        <label for="contactar-email">Email</label>
                        <input name="contacto" type="radio" value="email" id="contactar-email">
                    </div>

                    <p>Si eligio teléfono, eliga la fecha y la hora</p>

                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha">
                    
                    <label for="hora">Hora</label>
                    <input type="time" id="hora" min="09:00" max="18:00">                   
                </fieldset>

                <div class="alinear-derecha">
                    <input type="submit" value="Enviar" class="boton-verde">
                </div>
                
            </form>
    </main>

    <?php
        incluirTemplates('footer');
    ?>
    
    