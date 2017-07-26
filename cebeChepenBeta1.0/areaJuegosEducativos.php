<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Área de juegos Educativos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link rel="icon" href="images/logo.png" />
        <link rel="stylesheet" href="css/normalize.css" />	
        <link rel="stylesheet" href="css/juego.css">
        <?php
        session_start();
        $LinksRoute = './';
        include 'frotend/inc/links.html';
        include './library/configServer.php';
        include './library/consulSQL.php';
        if ($_SESSION['UserPrivilege'] == 'Student') {
            
        } else {
            header("Location: process/logout.php");
            exit();
        }
        ?>
    </head>
    <body id="body" style="background: #81ccee">
        <?php include 'frotend/inc/header.html'; ?>
        <div class="cont">
            <div class="demo">
                <div class="app">
                    <div class="app__top" class="app__menu-btn">

                        <p class="app__hello">Juegos Educativos</p>
                        <div class="app__user">
                            <img src="images/logo.png" alt="" class="app__user-photo" />

                        </div>
                    </div>
                    <div class="app__bot">
                        <div class="app__meetings">
                            <div class="app__meeting">
                                <a href="Juego1/Numeros.php"><img src="images/Numeros/Numero1.png" alt="" class="app__meeting-photo" /></a>
                                <p class="app__meeting-name">Primero</p>
                                <p class="app__meeting-info">
                                <p class="app__meeting-time">El juego de numeros</p>
                                </p>
                            </div>
                            <div class="app__meeting">
                                <a href="Juego2/EscogerJuego.php"><img src="images/Numeros/Numero2.png" alt="" class="app__meeting-photo" /></a>
                                <p class="app__meeting-name">Segundo</p>
                                <p class="app__meeting-info">
                                <p class="app__meeting-time">El juego de animales</p>
                                </p>
                            </div>
                            <div class="app__meeting">
                                <a href="Juego3/Abecedario.php"><img src="images/Numeros/Numero3.png" alt="" class="app__meeting-photo" /></a>
                                <p class="app__meeting-name">Tercero</p>
                                <p class="app__meeting-info">
                                <p class="app__meeting-time">El juego del abecedario</p>
                                </p>
                            </div>
                            <div class="app__meeting">
                                <a href="Juego4/FrutasNombres.html"><img src="images/Numeros/Numero4.png" alt="" class="app__meeting-photo" /></a>
                                <p class="app__meeting-name">Cuarto</p>
                                <p class="app__meeting-info">
                                <p class="app__meeting-time">El juego de Frutas</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="process/logout.php" class="app__logout">
                        <svg class="app__logout-icon svg-icon" viewBox="0 0 20 20">
                        <path d="M6,3 a8,8 0 1,0 8,0 M10,0 10,12"/>
                        </svg>

                    </a>
                </div>
            </div>

        </div>
        <?php include 'frotend/inc/footer.html'; ?>
        <script src='js/jquery.min.js'></script>

        <script src="js/main.js"></script><input type="hidden" class="habla">
         <script src="js/responsivevoice.js"></script>
         <script>
                function Hablar() {
                    $(".habla").on('click', frase);
                }
                function frase() {
                        //e.preventDefault();
                        var text = "Bienvenido-al-sistema";
                        responsiveVoice.speak(text, "Spanish Female");
                        text = encodeURIComponent(text);
                    }
                Hablar();
                setTimeout(function () { $(".habla").click(); }, 250);
        </script>

    </body>
</html>
