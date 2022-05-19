<section id="conexiones">
    <?php
    $mysqli = new mysqli(
        'localhost',
        'root',
        '',
        'produccion'
    );
    if ($mysqli->connect_error) {
        echo '<p>Error al conectar con la base de datos: ' . $mysqli->connect_error;
        echo '</p>';
        exit;
    }
    ?>
</section>
<section id="Insericion_de_datos">
    <?php
    if (isset($_POST["ENVIO"])) {
        $Dato;
        $sentencia2 = "Select * from cliente";
        if (!($stmt2 = $mysqli->prepare($sentencia2))) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia2</b>: " .
                $mysqli->error;
            echo '</p>';
            exit;
        }
        //$stmt2->execute();
        if (!$stmt2->execute()) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " .
                $mysqli->error;
            echo '</p>';
            exit;
        }
        $resultado = $stmt2->get_result();
        while ($fila = $resultado->fetch_assoc()) {
            $Dato = $fila['CliCodigo'];
        }
        $Dato = $Dato + 1;
        $sentencia = "INSERT INTO cliente VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->prepare($sentencia);
        // i: entero, s: otros tipos, d: double o float , b: BLOB
        $stmt->bind_param(
            'isssssssss',
            $codigo,
            $Apellido,
            $nombre,
            $Cargo,
            $Direccion,
            $Ciudad,
            $Postal,
            $Pais,
            $Telefono,
            $Fax,
        );
        $codigo = $Dato;
        $nombre = $_POST["txtNombre"];
        $Apellido = $_POST["txtApellido"];
        $Cargo = $_POST["txtCargo"];
        $Direccion = $_POST["txtDireccion"];
        $Ciudad = $_POST["txtCiudad"];
        $Postal = $_POST["txtPostal"];
        $Pais = $_POST["txtPais"];
        $Telefono = $_POST["txtTelefono"];
        $Fax = $_POST["txtFax"];

        if (!$stmt->execute()) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b> : " .
                $mysqli->error;
            echo '</p>';
        }
        $stmt->close();
        $mysqli->close();
        header('Location: Home.php');
    }
    ?>
</section>
<section id="Eliminar">
    <?php
    if (isset($_REQUEST['accion'])) {
        if ($_REQUEST['accion'] == 'eliminar') {
            $sentencia = "DELETE FROM cliente 
    where CliCodigo=?";
            $stmt = $mysqli->prepare($sentencia);
            // i: entero, s: otros tipos, d: double o float , b: BLOB
            $stmt->bind_param(
                'i',
                $CliCodigo,
            );
            $CliCodigo = $_REQUEST['Art'];
            if (!$stmt->execute()) {
                echo "<p>Error al ejecutar la sentencia <b>$sentencia</b> : " .
                    $mysqli->error;
                echo '</p>';
            }
            $stmt->close();
            $mysqli->close();
            header('Location: Home.php');
        }
    }

    ?>
</section>
<section id="Editar">
    <?php
    if (isset($_POST["EDITO"])) {
        // Conecta con el servidor de MySQL

        // Ejecuta una sentencia SQL
        $sentencia = "UPDATE cliente SET 
    CliRazon=?,
    CliNomCon=?,
    CliCarCon=?,
    CliDireccion=?,
    CliCiudad=?,
    CliPostal=?,
    CliPais=?,
    CliTelefono=?,
    CliFax=?
    where CliCodigo=?";
        $stmt = $mysqli->prepare($sentencia);
        // i: entero, s: otros tipos, d: double o float , b: BLOB
        $stmt->bind_param(
            'sssssssssi',
            $Apellido,
            $nombre,
            $Cargo,
            $Direccion,
            $Ciudad,
            $Postal,
            $Pais,
            $Telefono,
            $Fax,
            $codigo,
        );
        $nombre = $_POST["txtNombre"];
        $Apellido = $_POST["txtApellido"];
        $Cargo = $_POST["txtCargo"];
        $Direccion = $_POST["txtDireccion"];
        $Ciudad = $_POST["txtCiudad"];
        $Postal = $_POST["txtPostal"];
        $Pais = $_POST["txtPais"];
        $Telefono = $_POST["txtTelefono"];
        $Fax = $_POST["txtFax"];
        $codigo = $_POST['txtCodigo2'];

        if (!$stmt->execute()) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b> : " .
                $mysqli->error;
            echo '</p>';
        }
        $stmt->close();
        $mysqli->close();
        header('Location: Home.php');
    }
    ?>
</section>
<section id="ver_dato">
    <?php
    if (isset($_REQUEST['accion'])) {
        if ($_REQUEST['accion'] == 'VER') {
            $DATA = $_REQUEST['Art'];

            $ART = $DATA;
            $stmt = $mysqli->prepare("SELECT * FROM cliente where CliCodigo = ?");
            // i: entero, s: otros tipos, d: double o float , b: BLOB
            $stmt->bind_param('i', $ART);
            $stmt->execute();
            if (!($stmt)) {
                echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " .
                    $mysqli->error;
                echo '</p>';
                exit;
            }
            $resultado = $stmt->get_result();

            if ($fila = $resultado->fetch_assoc()) {

                $Dato1 = $fila['CliCodigo'];
                $Dato2 = $fila['CliRazon'];
                $Dato3 = $fila['CliNomCon'];
                $Dato4 = $fila['CliCarCon'];
                $Dato5 = $fila['CliDireccion'];
                $Dato6 = $fila['CliCiudad'];
                $Dato7 = $fila['CliPostal'];
                $Dato8 = $fila['CliPais'];
                $Dato9 = $fila['CliTelefono'];
                $Dato10 = $fila['CliFax'];
            }
            setcookie("Dato1", $Dato1, time() + 1);
            setcookie("Dato2", $Dato2, time() + 1);
            setcookie("Dato3", $Dato3, time() + 1);
            setcookie("Dato4", $Dato4, time() + 1);
            setcookie("Dato5", $Dato5, time() + 1);
            setcookie("Dato6", $Dato6, time() + 1);
            setcookie("Dato7", $Dato7, time() + 1);
            setcookie("Dato8", $Dato8, time() + 1);
            setcookie("Dato9", $Dato9, time() + 1);
            setcookie("Dato10", $Dato10, time() + 1);

            if (isset($_REQUEST['proceso'])) {

                header('Location: editar.php');
            } else {
                header('Location: vista.php');
            }
        }
    }
    ?>
</section>
<section id="Contador_de_Posicion">
    <?php
    if (isset($_REQUEST['Insertar'])) {
        $sentencia2 = "Select * from cliente";
        if (!($stmt2 = $mysqli->prepare($sentencia2))) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia2</b>: " .
                $mysqli->error;
            echo '</p>';
            exit;
        }
        if (!$stmt2->execute()) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " .
                $mysqli->error;
            echo '</p>';
            exit;
        }
        $resultado = $stmt2->get_result();
        while ($fila = $resultado->fetch_assoc()) {
            $Dato = $fila['CliCodigo'];
        }
        $Dato = $Dato + 1;
        setcookie("Dato", $Dato, time() + 2);
        header('Location:insercion.php');
    }
    ?>
</section>
<section id="Logeo">
    <?php
    if (isset($_POST['logeo'])) {
        $stmt = $mysqli->prepare("SELECT * FROM usuario where Nom_usuario= ? and usu_password=?");
        // i: entero, s: otros tipos, d: double o float , b: BLOB
        $stmt->bind_param(
            'ss',
            $usuario,
            $password,
        );
        $usuario = $_POST['txtUsuario'];
        $password = md5($_POST['txtPassword']);
        $stmt->execute();
        if (!($stmt)) {
            echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " .
                $mysqli->error;
            echo '</p>';
            exit;
        }
        $resultado = $stmt->get_result();

        if ($fila = $resultado->fetch_assoc()) {
            $mensaje = 'pass';
            $dato = $fila['cod_usuario'];
            setcookie('logeo', $mensaje, time() + 86400);
        }
        if ($dato == null) {
            $mensaje = 'error de incio de sesion';
            setcookie('mensaje', $mensaje, time() + 1);
            header('Location:index.php');
        } else {
            header('Location:Home.php');
        }
    }
    ?>
</section>
<section id="logout">
    <?php
    if (isset($_REQUEST['Sesion'])) {
        if ($_REQUEST['Sesion'] == 'cerrado') {
            header('Location:index.php');
            setcookie('logeo','cerrado',time()-86400);
        }
    }
    ?>
</section>