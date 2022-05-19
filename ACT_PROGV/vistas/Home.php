<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once('estilos.php');
    ?>
    <title>Pagina Principal</title>
</head>
<body>

    
    <div class="container">
        <div class="row align-items-start">
            <div class="col"> 
            </div>
            <div class="col">
                <section class="conexion-a-SQL">
                    <?php
                    // Conecta con el servidor de MySQL
                    $link = mysqli_connect(
                        'localhost', // El servidor
                        'root', // El usuario de la base de datos
                        '', // La contraseña del usuario de la base de datos
                        'produccion'
                    ); // La base de datos a utilizar
                    if (!$link) {
                        echo '<p>Error al conectar con la base de datos: ' .
                            mysqli_connect_error();
                        echo '</p>';
                        exit;
                    }
                    // Ejecuta una sentencia SQL
                    $sentencia = 'SELECT * FROM cliente';
                    if (!($resultado = mysqli_query($link, $sentencia))) {
                        echo "<p>Error al ejecutar la sentencia <b>$sentencia</b>: " .
                            mysqli_error($link);
                        echo '</p>';
                        exit;
                    }
                    ?>
                </section>
                <section class="comandos-y-creacion-de-tabla">
                    <?php
                    echo '<table border="1" class="table table-hover">
                <tr>';
                    echo '<th>Codigo</th>
                <th>Empresa</th>
                <th>Nombre</th>
                <th>Cargo</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Postal</th>
                <th>Pais</th>
                <th>Telefono</th>
                <th>Fax</th>';
                    echo '
                <th colspan="3">Acciones</th>
                </tr>';
                    echo '<tr>';

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo '<td>' . $fila['CliCodigo'] . '</td>';
                        echo '<td>' . $fila['CliRazon'] . '</td>';
                        echo '<td>' . $fila['CliNomCon'] . '</td>';
                        echo '<td>' . $fila['CliCarCon'] . '</td>';
                        echo '<td>' . $fila['CliDireccion'] . '</td>';
                        echo '<td>' . $fila['CliCiudad'] . '</td>';
                        echo '<td>' . $fila['CliPostal'] . '</td>';
                        echo '<td>' . $fila['CliPais'] . '</td>';
                        echo '<td>' . $fila['CliTelefono'] . '</td>';
                        echo '<td>' . $fila['CliFax'] . '</td>';
                        echo '<td>' . '<a class="button is-primary" href=acciones.php?Art=' . $fila['CliCodigo'] . '&accion=VER&proceso=editar' . '>Editar</a> </td>';
                        echo '<td>' . '<a class="button is-warning" href=acciones.php?Art=' . $fila['CliCodigo'] . '&accion=VER' . '>Ver</a> </td>';
                        echo '<td>' . '<a class="button is-danger" href=acciones.php?Art=' . $fila['CliCodigo'] . '&accion=eliminar' . '>Eliminar</a></td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                    mysqli_free_result($resultado);
                    mysqli_close($link);
                    ?>
                </section>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</body>

</html>