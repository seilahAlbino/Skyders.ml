<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/fi.png"/>
</head>

<body>

    <?php
        require_once "utils/connection.php";
        require_once "utils/login_methods.php";
        require_once "utils/functions.php";
        if(isLogged()){ ?>

            <script type="text/javascript">
                window.location.href = 'index.php';
            </script>
        <?php
            }
        
    ?>

    <?php 
        $vkey = $_GET['vkey'] ?? null;
        if(isset($vkey)){
            $verify = "SELECT * FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1";
            $queryVerify = $db->query($verify);
            if($queryVerify->num_rows > 0){
                $queryVerify2 = "UPDATE users SET verified = 1 WHERE vkey='$vkey' LIMIT 1";
                if ($db->query($queryVerify2)) {
                    echo msg_sucesso("Conta confirmada");
                }else{
                    echo msg_erro("Ocorreu um erro!");
                }
            }else{
                echo msg_erro("A sua conta já foi confirmada ou não existe!");
            }
        }else{
            echo msg_erro("Ocorreu um erro!");
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