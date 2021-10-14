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
    <link rel="stylesheet" href="./css/patrocionadores.css">
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
        <div class="row">
        
            <?php
                $getPatrocionadores = $db->query("SELECT * from patrocionadores");
            
                if($getPatrocionadores->num_rows > 0){
                    echo "<div>
                            <h2 class='center'>Os nossos patrocionadores!</h2>
                          </div>";
                    echo "<div class='container'>";

                    while($getPatrocionadoresReg = $getPatrocionadores->fetch_object()) {
                        $img = thumb("images/patrocionadores/$getPatrocionadoresReg->image");
                        echo utf8_encode("<div class='category'>
                        <a href='$getPatrocionadoresReg->site'>
                                    <div class='content'>
                                        <h3>$getPatrocionadoresReg->name</h3>
                                        <img class='PatrocionadorImg' src='$img'>
                                        </div>
                                        </a>
                                 </div>");
                    }
                }else{
                    echo "<div>
                            <p>Não existem patrocionadores!<br>Caso queira se tornar um, entre em contacto connosco!</p>
                         </div>";
               }

            
               
            ?>

            <h3 class="vagas">Queres ser patrocionador? Paciência... de momento as vagas estão fechadas :(</h3>
        </dio>
    </div>
    <?php
        include_once "footer.php";
        if($errorFooter==1){
            ?>
                <script>
                    let footer = document.getElementById("idFooter");
                    footer.classList.add("errorFooter")
                </script>
            <?php
        }
        
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>
    
</body>

</html>