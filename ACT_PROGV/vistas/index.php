<!DOCTYPE html>
<html lang="en">

<head>
    <title>login de usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/misestilos2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="centrar-menu">
                <h2>Ingreso de Usuarios</h2>
               
                <form class="form-horizontal" action="acciones.php" name="form1" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="usuario">Usuario :</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="usuario" placeholder="Ingrese el usuario" name="txtUsuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="pwd">Password:</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="txtPassword">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-sm-7">
                            <button name="logeo" type="submit" class="btn btn-default">Enviar</button>
                        </div>
                        <?php
                        if (isset($_COOKIE['mensaje'])) {
                        ?>
                        
                            <label class="control-label col-sm-7"><?= $_COOKIE['mensaje'] ?> </label>
                            
                        <?php
                        }
                        else if(isset($_COOKIE['logeo'])){
                            if ($_COOKIE['logeo']=='pass') {
                                header('Location:Home.php');
                            }
                        }
                       

                        ?>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>