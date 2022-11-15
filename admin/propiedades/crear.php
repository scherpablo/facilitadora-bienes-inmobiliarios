<?php
    require '../../includes/config/dataBase.php';

    $db = conectarDB();    

    $errores = [];

    $titulo = ''; 
    $precio = '';
    $descripcion = ''; 
    $habitaciones = '';
    $cocheras = '';
    $banios = '';
    $id_vendedores = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $cocheras = $_POST['cocheras'];
        $banios = $_POST['banios'];
        $id_vendedores = $_POST['vendedor'];

        if(!$titulo) {
            $errores[] = 'Debes agregar un títilo';
        }
        if(!$precio) {
            $errores[] = 'Debes agregar un precio';
        }
        if(strlen($descripcion) < 50) {
            $errores[] = 'Debes agregar una descripción y contener al menos 50 caracteres';
        }
        if(!$habitaciones) {
            $errores[] = 'Debes agregar la cantidad de habitaciones';
        }
        if(!$cocheras) {
            $errores[] = 'Debes agregar la cantidad de cocheras';
        }
        if(!$banios) {
            $errores[] = 'Debes agregar la cantidad de baños';
        }
        if(!$id_vendedores) {
            $errores[] = 'Debes seleccionar un vendedor';
        }

    // echo '<pre>';
    //     var_dump($errores);
    // echo '</pre>';

    if(empty($errores)) {
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, cocheras, banios, id_vendedores) VALUES ('$titulo', 
            '$precio', '$descripcion', '$habitaciones', '$cocheras', '$banios', '$id_vendedores')";

            // echo $query;

            $resultado = mysqli_query($db, $query);

            if($resultado) {
                echo 'insertado correctamente';
        }
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

        <?php foreach($errores as $error) : ?>
            <div class='alerta error'>
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form class='formulario' method='POST' action='/admin/propiedades/crear.php'>
            <fieldset>
                <legend>Información General</legend>

                <label for='titulo'>Titulo:</label>
                <input type='text' name='titulo' id='titulo' placeholder='Titulo Propiedad' value='<?php echo $titulo; ?>'>
                
                <label for='precio'>Precio:</label>
                <input type='number' name='precio' id='precio' placeholder='Precio Propiedad' value='<?php echo $precio; ?>'>
                
                <label for='iamgen'>Imagen:</label>
                <input type='file' name='imagen' id='imagen' accept='image/jpg, image/png'>

                <label for='descripcion'>Descripción</label>
                <textarea id='descripcion' name='descripcion'><?php echo $descripcion; ?></textarea>
            </fieldset>    

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for='habitaciones'>Habitaciones</label>
                <input type='number' name='habitaciones' placeholder='Ej:3' min='1' max='9' value='<?php echo $habitaciones; ?>'> 
                
                <label for='cocheras'>Cocheras</label>
                <input type='number' name='cocheras' placeholder='Ej:3' min='1' max='9' value='<?php echo $cocheras; ?>'> 
                
                <label for='banios'>Baños</label>
                <input type='number' name='banios' placeholder='Ej:3' min='1' max='9' value='<?php echo $banios; ?>'> 
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name='vendedor'>
                    <option value="">-- seleccionar --</option>
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