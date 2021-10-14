<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Skyders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/offers.css">
    <link rel="stylesheet" href="./css/video.css">
    
    <link rel="stylesheet" href="./css/objetivos.css">
    <link rel="icon" type="image/png" href="images/fi.png"/>

</head>

<body>

<?php   require_once "utils/connection.php";
        require_once "utils/login_methods.php";
        require_once "utils/functions.php";
    ?>
        <?php
            include_once "header.php";
        ?>
        
    <div class="container-fluid">
    

        <div class="row row-mainPage">

            <div class="col-md-12 mb-4">
                <h1>Bem-vindo à loja que te dá asas!</h1>
                <img id="lojinhaimg" src="/images/api/lojinha.png" alt="lojinha.png" heigth="250px" width="350px">

                <div class="flex items-center justify-center btngroupMain">
                    <?php
                        if(!isLogged()) echo "<a href='loginPage.php' class='btn btn-success'>Criar Perfil</a>
                        <span class='text-11px px-3'>OU</span>";
                    ?>

                    <a href="#offers" class="btn btn-outline-primary">Explorar</a></div>

    
            </div>
        </div>

    </div>

    <?php
        include_once "video.php";
        include_once "objetivos.php";
        include_once "offers.php";
        include_once "footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    
</body>

</html>