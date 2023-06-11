<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links de todos os arquivos CSS -->
    <?php
        include("links.php");
    ?>
    <link rel="stylesheet" href="css/style.css">
    <title>DevFox | A maior plataforma de devs</title>
</head>
<body>
    <!-- Navbar -->
    <?php
        include("header.php");
    ?>

    <!-- Sliders (cards que andam) -->
    <p class="text-center m-3">Opção de cards</p>
    <div class="uk-slider-container animate__animated animate__fadeIn">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-5@m">
                <li>
                    <div class="uk-panel">
                        <img src="images/1.png" width="400" height="600">
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="images/2.png" width="400" height="600">
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="images/3.png" width="400" height="600">
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="images/4.png" width="400" height="600">
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="images/5.png" width="400" height="600">
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <img src="images/6.png" width="400" height="600">
                    </div>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>