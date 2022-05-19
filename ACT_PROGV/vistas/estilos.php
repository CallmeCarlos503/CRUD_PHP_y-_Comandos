<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bulma.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        html {
            background-image: url('https://www.avidblogs.com/wp-content/uploads/2019/09/2019_WALLPAPERS_MEDIA_COMPOSER-1.jpg');
        }

        body {
            background-image: url('https://www.avidblogs.com/wp-content/uploads/2019/09/2019_WALLPAPERS_MEDIA_COMPOSER-1.jpg');
        }
    </style>
</head>

<body>
    <?php
    if (isset($_COOKIE['logeo'])) {
        if ($_COOKIE['logeo'] == 'pass') {
            $Mensaje = 'bienvenido';
        } else {
            header('Location:index.php');
        }
    } else {
        header('Location:index.php');
    }
    ?>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://dbdzm869oupei.cloudfront.net/img/sticker/preview/3100.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="Home.php">
                    Lista
                </a>

                <a class="navbar-item" href="acciones.php?Insertar=True">
                    Insertar
                </a>
                <a class="navbar-item" href="acciones.php?Sesion=cerrado">
                    Cerrar Sesion
                </a>


            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" onclick="window.print()">
                            <strong>imprimir pagina actual</strong>
                        </a>
                        <a>
                            <div id="google_translate_element"></div>
                            <script>
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                            pageLanguage: 'en'
                                        },
                                        'google_translate_element'
                                    );
                                }
                            </script>
                            <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <center>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">

                </div>
                <div class="col">

                </div>
                <div class="col">

                </div>
            </div>
        </div>

    </center>
    <br><br>

</body>