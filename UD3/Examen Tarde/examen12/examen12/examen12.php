<!-- Nombre y Apellido: Yahya Limouni         |         NC: 12 -->

<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/funciones.php');
    inicio_html('Examen12 - PHP', ['/estilos/formulario.css', '/estilos/general.css', '/estilos/tablas.css']);

    define('TIPOS_ADMITIDOS', ['piso', 'casa']);
    define('LIMITE_FORMULARIO', 250 * 1024);
    define('VALID_FILE_TYPE', "application/pdf");
    define('IMPORTE_POR_ANO_CONTRATO', 20);
    define('INCREMENTO_PISO', 0.1);

    // Array asociativo con datos de servicios1
    $servicios_admitidos = [
        'ed'        => ['nombre'=> 'Elaborar Documentacion', 'precio' => 200],
        'alf'       => ['nombre'=> 'Asesoramiento legal y fiscal', 'precio'=> 150],
        'mv'        => ['nombre'=> 'Marketing de venta', 'precio'=> 300]
    ];

    // Funcion que recibe una variable y el filtro, devuelve la variable saneada si ha tenido exito, y cadena vacia en caso contrario
    function sanitize_var( $var, $filter = FILTER_SANITIZE_SPECIAL_CHARS){
        return !filter_var($var, $filter) ? '' : filter_var($var, $filter);
    }

    // Funcion que recibe una variable y el filtro, devuelve la variable VALIDADA si ha tenido exito, y cadena vacia en caso contrario
    function validate_var( $var, $filter = FILTER_VALIDATE_EMAIL){
        return !filter_var($var, $filter) ? '' : filter_var($var, $filter);
    }

    // Funcion que recibe un array y el filtro, devuelve el array saneado si ha tenido exito, y array vacio en caso contrario
    function sanitize_array( $array, $filter = FILTER_SANITIZE_SPECIAL_CHARS){
        return !filter_var_array($array, $filter) ? [] : filter_var_array($array, $filter);
    }

    // Peticiones POST:
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

        
        // ---------------------------------------------------------
        $email = isset($_POST['email']) ? $_POST['email'] :'';
        // Sanear email
        if( $email ) {
            $email_saneado = sanitize_var($email, FILTER_SANITIZE_EMAIL);
        }
        // Validar email
        if( $email_saneado ) {
            $email_validado = validate_var($email_saneado);
        }
        if( empty($email_validado) ){
            echo "Email invalido";
            exit(1);
        }


        // ---------------------------------------------------------
        // Sanear tipo
        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] :'';
        if( $tipo ) {
            $tipo_saneado = sanitize_var($tipo);
        }
        // Validar tipo:
        if( $tipo_saneado ){
            $tipo_validado = in_array(strtolower($tipo_saneado), TIPOS_ADMITIDOS) ? $tipo_saneado : '';
        }
        if( empty($tipo_validado) ){
            echo "Tipo invalido";
            exit(2);
        }
        

        // ---------------------------------------------------------
        // Sanear servicios
        $servicios = isset($_POST['servicios']) ? $_POST['servicios'] : [];
        if( $servicios ) {
            $servicios_saneado = sanitize_array($servicios);
        }

        // Validar servicios:
        if( !empty($servicios_saneado) ){
            $servicios_ok = true;
            foreach( $servicios_saneado as $servicio ){
                if( !in_array(strtolower($servicio), array_keys($servicios_admitidos)) ) {
                    $servicios_ok = false;
                }
            }
            $servicios_validados = $servicios_ok ? $servicios_saneado : [];
        }
        if( empty($servicios_validados) ){
            echo "Uno o mas servicios invalido(s)";
            exit(3);
        }

        $nombres_servicios = [];
        foreach($servicios_validados as $servicio){
            $nombres_servicios[] = $servicios_admitidos[$servicio]['nombre'];
        }

        // ---------------------------------------------------------
        // Sanear la duracion
        $duracion = isset($_POST['duracion']) ? $_POST['duracion'] :'';

        if( $duracion ) {
            $duracion_saneada = sanitize_var($duracion, FILTER_SANITIZE_NUMBER_FLOAT);
        }
        // Validar duracion:
        if( $duracion_saneada ) {
            $rango_ok = ($duracion_saneada >= 1 && $duracion_saneada <= 3);
            $duracion_validada = validate_var($duracion_saneada, FILTER_VALIDATE_FLOAT);
            $duracion_validada = ( !$duracion_validada || $rango_ok) ? '' : $duracion_validada;
        }
        if( empty($duracion_validada) ){
            echo "Duracion invalida";
            exit(4);
        }

        // ---------------------------------------------------------
        // Sanear el archivo
        $certificado = isset($_FILES['certificado']) ? $_FILES['certificado'] :'';

        $errors = [];

        // Primero comprobamos que se ha recibido el archivo y se ha subido correctamente
        if( !empty($certificado) && $_FILES['certificado']['error'] == UPLOAD_ERR_OK ) {
            // Indicamos la ruta de subida
            $path = $_SERVER['DOCUMENT_ROOT'] . '/examen12/certificados/';

            // Comprobamos que el directorio no existe
            if( !file_exists($path) || !is_dir($path) ){
                // Si no existe se crea
                if( !mkdir($path, 0755) ) {
                    // Si no se ha podido crear guarda el error
                    $errors[] = 'ERROR. NO se ha podido crear el directorio de subida';
                }
            }
            if( $_FILES['certificado']['size'] <= LIMITE_FORMULARIO ){
                // Creamos el nombre del archivo:
                $file_name = $email_validado . '.pdf';
                $real_file_type = mime_content_type($_FILES['certificado']['tmp_name']);
                $browser_file_type = $_FILES['certificado']['type'];

                if( $real_file_type == $browser_file_type && $real_file_type == VALID_FILE_TYPE ){
                    if( !move_uploaded_file( $_FILES['certificado']['tmp_name'], $path . $file_name)) {
                        $errors[] = 'ERROR. NO se ha podido mover el archivo del /tmp';
                    }
                    else {
                        $archivo_subido = true;
                    }
                }
                else {
                    $errors[] = 'ERROR. tipo invalido';
                }
            }
            else {
                $errors[] = 'ERROR. Se ha superado el limite del formulario' . LIMITE_FORMULARIO / 1024 . 'KB';
            }
        }
        else {
            $errors[] = 'ERROR. NO se ha podido subir el archivo';
        }

        // Mostrar el resultado de la subida del archivo
        if( empty($erros) ){
            echo "<h2>Se ha subido correctamente el archivo " . $_FILES['certificado']['name'] . "</h2>";
        }
        else {
            echo implode('<br>', $errors);
        }
        
        
        // -----------------------------------------------------
        // CALCULAR PRESUPUESTO
        
        $total_presupuesto = 0;
        // Calcular el total de los servicios:
        $total_servicios = 0;
        foreach( $servicios_saneado as $servicio ) {
            $total_servicios += $servicios_admitidos[$servicio]['precio'];
        }
        $total_presupuesto += $total_servicios;

        // Calcular el importe segun la duracion
        $importe_contrato = $duracion_validada * IMPORTE_POR_ANO_CONTRATO;
        $total_presupuesto += $importe_contrato;

        if( $tipo_validado == 'piso'){
            $incremento_piso_ = $total_presupuesto * INCREMENTO_PISO;
            $total_presupuesto += $incremento_piso_;
        }

        //  ----------------------------------------------
        // PRESENTAR DATOS:
    ?>
        <table>
            <thead>
                <tr>
                <?php
                    foreach( $_POST as $key => $value ) {
                        echo "<th>" . $key . "</th>";
                    }
                ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach( $_POST as $key => $value ) {
                            if( !is_array($value) ) echo "<td>" . $value . "</td>";
                            else echo "<td>". implode('<br>', $nombres_servicios) ."</td>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    <?php
        echo "Servicios a contratar: ";
        foreach($servicios_validados as $servicio){
            echo "Servicio a contratar: " . $servicios_admitidos[$servicio]['nombre'] . " su precio es: "  . $servicios_admitidos[$servicio]['precio'] . "Euros<br>";
        }

        echo "<br><br>";

        echo "Importe total multiplicado por la duracion: " . $total_presupuesto * $duracion_validada . "Euros<br>";

        if( $tipo_validado == 'piso' ){
            echo "El incremento por el tipo del imueble: " . $incremento_piso_ . "Euros <br>"; 
        }

        if( isset($archivo_subido) && $archivo_subido ){
            echo 'Nombre del archivo: ' .  $_FILES['certificado']['name'] . "<br>";
            if( isset($file_name) && $file_name ){
                echo 'Nombre del archivo guardado: ' .  $file_name . "<br>";
            }
            echo 'Tamanio del archivo: ' .  $_FILES['certificado']['size'] . "<br>";

        }
    }


    // Peticiones GET:
    if( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Presupuesto de registro</legend>

                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" name="email" id="email" size="50" required>
    
                <!-- <label>Tipo Imueble</label> -->
                <!-- <div> -->
                    <!-- <button name="piso">Piso</button> -->
                    <!-- <button name="casa">Casa</button> -->
                <!-- </div> -->

                <!-- Tipo Imueble -->
                <label for="piso">Piso</label>
                <input type="radio" name="tipo" value="piso">

                <label for="casa">Casa</label>
                <input type="radio" name="tipo" value="casa">
    
                <!-- Servicios  contratar -->
                <label for="servicios">Servicios</label>
                <select name="servicios[]" id="servicios" multiple>
                    <option selected disabled>Selecciona una opcion</option>
                    <option value="ed">Elaborar Documentacion</option>
                    <option value="alf">Asesoramiento legal y fiscal</option>
                    <option value="mv">Marketing de venta</option>
                </select>
    
                <!-- Duracion del contrato -->
                <label for="duracion">Duracion del contrato</label>
                <input type="text" name="duracion" id="duracion" size="8">
    
                <!-- Certificado -->
                <label for="certificado">Certificado</label>
                <input type="file" name="certificado" id="certificado">
            </fieldset>
            <input type="submit" name="operacion" id="operacion">
        </form>
<?php
    }

?>

<form action="">
    
</form>