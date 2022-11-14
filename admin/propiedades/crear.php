<?php
    require '../../includes/config/dataBase.php';

    $db = conectarDB();    

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo '<pre>';
    //     var_dump($_POST);
    // echo '</pre>';

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $cocheras = $_POST['cocheras'];
    $banios = $_POST['banios'];
    $id_vendedores = $_POST['vendedor'];

    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, cocheras, banios, id_vendedores) VALUES ('$titulo', 
    '$precio', '$descripcion', '$habitaciones', '$cocheras', '$banios', '$id_vendedores')";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if($resultado) {
        echo 'insertado correctamente';
    }
}

    require '../../includes/funciones.php';

    incluirTemplates('header');
?>
    
    <main class="contenedor seccion">
        <h1>Crear</h1>

        <div class="alinear-derecha">
            <a href='/admin' class='boton boton-verde'>Volver</a>
        </div>

        <form class='formulario' method='POST' action='/admin/propiedades/crear.php'>
            <fieldset>
                <legend>Información General</legend>

                <label for='titulo'>Titulo:</label>
                <input type='text' name='titulo' id='titulo' placeholder='Titulo Propiedad'>
                
                <label for='precio'>Precio:</label>
                <input type='number' name='precio' id='precio' placeholder='Precio Propiedad'>
                
                <label for='iamgen'>Imagen:</label>
                <input type='file' name='imagen' id='imagen' accept='image/jpg, image/png'>

                <label for='descripcion'>Descripción</label>
                <textarea id='descripcion' name='descripcion'></textarea>
            </fieldset>    

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for='habitaciones'>Habitaciones</label>
                <input type='number' name='habitaciones' placeholder='Ej:3' min='1' max='9'> 
                
                <label for='cocheras'>Cocheras</label>
                <input type='number' name='cocheras' placeholder='Ej:3' min='1' max='9'> 
                
                <label for='banios'>Baños</label>
                <input type='number' name='banios' placeholder='Ej:3' min='1' max='9'> 
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name='vendedor'>
                    <option value="" disabled selected>-- seleccionar --</option>
                    <option value="1">Pablo</option>
                    <option value="2">Liam</option>
                </select>
            </fieldset>

            <div class="alinear-derecha">
                <input type="submit" value="Agregar Popiedad" class="boton-verde">
            </div>
        
        </form>
    </main>

<?php
    incluirTemplates('footer');
?>