<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once("estilos.php");
    ?>
    <title>Area de edicion</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <?php
                $dato1 = $_COOKIE['Dato1'];
                ?>
            </div>

            <div class="col">
                <div class="card" style="width: 24rem;">
                    <center>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Edit_icon_%28the_Noun_Project_30184%29.svg/1024px-Edit_icon_%28the_Noun_Project_30184%29.svg.png" class="card-img-top" alt="...">
                    </center>
                    <div class="card-body">
                        <center>
                            <h1>FORMULACION DE MODIFICACIONES DE PRODUCTOS</h1>
                        </center>
                        <br>
                        <form action="acciones.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ID</label>
                                <input class="form-control" type="number" name="txtCodigo" value=<?php echo $_COOKIE['Dato1']; ?> disabled id="">
                                <input type="hidden" name="txtCodigo2" value=<?php echo $_COOKIE['Dato1']; ?> visible="false" id="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Empresa</label>
                                <input type="text" class="form-control" name="txtApellido" value='<?php echo $_COOKIE['Dato2']; ?>' ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
                                <input class="form-control" type="text" name="txtNombre" value="<?php echo $_COOKIE['Dato3']; ?>">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Cargo</label>
                                <input type="text" class="form-control" value="<?php echo $_COOKIE['Dato4']; ?>" name="txtCargo" placeholder="precio">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato5']; ?>"  type="text" name="txtDireccion" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Ciudad</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato6']; ?>" type="text" name="txtCiudad" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Postal</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato7']; ?>" type="text" name="txtPostal" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pais</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato8']; ?>" type="text" name="txtPais" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Telefono</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato9']; ?>" type="tel" name="txtTelefono" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Fax</label>
                                <input required class="form-control" value="<?php echo $_COOKIE['Dato10']; ?>" type="tel" name="txtFax" placeholder="Cargo">
                            </div>
                            <div class="col-auto">
                                <center>
                                    <input type="submit" class="button" name="EDITO" value="Modificar">
                                </center>
                            </div>
                        </form>
                    </div>
                </div>
                <br>

            </div>
            <div class="col">

            </div>
        </div>
    </div>
</body>

</html>