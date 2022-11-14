<?php
    require '../includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class='contenedor seccion'>
        <h1>Administrador de Bienes Inmobilarios</h1>

        <div class="alinear-derecha">
            <a href='/admin/propiedades/crear.php' class='boton boton-verde'>Nueva Propiedad</a>
        </div>
    </main>

<?php
    incluirTemplates('footer');
?>