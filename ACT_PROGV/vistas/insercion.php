<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once('estilos.php');
    ?>
    <title>Area de insercion</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
            </div>
            <div class="col">
                <div class="card" style="width: 24rem;">
                <img src="https://wallpapercave.com/wp/wp7597367.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <div class="mb-3">
                            <center>
                                <h1>SECCION DE INSERCION DE DATOS</h1>
                            </center>
                        </div>
                        <div class="mb-3">
                            <form action="acciones.php" method="POST">

                                <label for="exampleFormControlInput1" class="form-label">ID DEL CLIENTE</label>
                                <input required class="form-control" type="number" name="txtCodigo" id="" value=<?php echo $_COOKIE['Dato'] ?> disabled>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Empresa</label>
                            <input required class="form-control" type="text" name="txtApellido" placeholder="Empresa">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
                            <input required class="form-control" type="text" name="txtNombre" placeholder="Nombre">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Cargo</label>
                            <input required class="form-control" type="text" name="txtCargo" placeholder="Cargo">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
                            <input required class="form-control" type="text" name="txtDireccion" placeholder="Direccion">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Ciudad</label>
                            <input required class="form-control" type="text" name="txtCiudad" placeholder="Ciudad">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Postal</label>
                            <input required class="form-control" type="text" name="txtPostal" placeholder="Postal">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pais</label>
                            <input required class="form-control" type="text" name="txtPais" placeholder="Pais">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Telefono</label>
                            <input required class="form-control" type="tel" name="txtTelefono" placeholder="Telefono">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Fax</label>
                            <input required class="form-control" type="tel" name="txtFax" placeholder="Fax">
                        </div>
                        <div class="mb-3">
                            <center>
                                <input required class="btn btn-info" type="submit" name="ENVIO" value="Enviar">
                            </center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>


            <div class="col">
            </div>
        </div>
    </div>
</body>

</html>