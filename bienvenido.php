<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntados Tecsup</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <header>

        <div class="menu" container>
            <img class="menu__logo" src="img/logo.png" alt="">
            <div class="usuario--php">
                <p><?php $usuario = $_GET["usuario"];echo "Usuario: " . $usuario ;?></p>
            </div>
        </div>


    </header>

    <footer class="footer__container ">
        <div class="footer__content ">
        </div>
        <div class="footer__websites ">
            <div class="footer__websites__content ">
                <div class="footer__navSection ">
                    <span class="footer__nav-title-text "><img src="svg/facebook.svg " alt=" " class="social--svg">
                    <span class="footer_nav-title-label ">FACEBOOK</span>
                    </span>
                </div>
                <div class="footer__navSection ">
                    <span class="footer__nav-title-text "><img src="svg/instagram.svg " alt=" "  class="social--svg">
                    <span class="footer_nav-title-label ">INSTAGRAM</span>
                    </span>
                </div>

                <div class="footer__navSection ">
                    <span class="footer__nav-title-text "><img src="svg/tiktok.svg " alt=" "  class="social--svg">
                    <span class="footer_nav-title-label ">TIKTOK</span>
                    </span>
                </div>
                <div class="footer__navSection ">
                    <span class="footer__nav-title-text "><img src="svg/twitter.svg " alt=" "  class="social--svg">
                    <span class="footer_nav-title-label ">TWITTER</span>
                    </span>
                </div>

            </div>
        </div>
        <div class="footer__copyright ">
            <p>©2021- 2023</p>
            <h2>Tecsup</h2>
            <p>- Todos los Derechos Reservados.</p>
        </div>
    </footer>

</body>

</html>