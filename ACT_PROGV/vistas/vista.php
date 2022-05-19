<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once("estilos.php");
    ?>
</head>
<body>
    <div class="tabs is-large is-centered is-fullwidth">
    </div>
    <div class="container">
        <div class="Row">
            <div class=" three column">
            </div>
            <div class=" four column">
                <center>
                <div class="card" style="width: 21rem;">
                    <img src="data:image/png;base64,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" class="card-img-top" alt="...">
                    <div class="card-body">
                        <center>
                            <br>
                            
                                <b>
                                    <h1>SECCION DE DATOS COMPLETOS</h1>
                                </b>
                                <?php
                                ?>
                                <div class="field">
                                    <label class="label">ID del Cliente</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato1'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Empresa</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato2'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Nombre</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato3'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Cargo</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato4'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Direccion</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato5'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Ciudad</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato6'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Postal</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato7'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Pais</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato8'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Telefono</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato9'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Fax</label>
                                    <div class="control">
                                        <label>
                                            <?php
                                            echo $_COOKIE['Dato10'];
                                            ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="field">
                                    <center>
                                        <a href="Home.php" class="button">Volver al inicio</a>
                                    </center>
                                </div>
                        </center>
                    </div>
                </div>
            </div>
            </center>
            <div class="five column">
            </div>
        </div>
    </div>
</body>

</html>