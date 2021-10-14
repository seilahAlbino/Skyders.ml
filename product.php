<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="icon" type="image/png" href="images/fi.png"/>
</head>
<body>
    <?php
        require_once "utils/connection.php";
        require_once "utils/login_methods.php";
        require_once "utils/functions.php";
        require_once "header.php";
    ?>


    <?php
    
        $productid = $_GET['id_product'] ?? null;

        if(!isset($productid)){?>
            
            <script type="text/javascript">
                window.location.href = 'category.php';
            </script>
            
            <?php
        }

    ?>

    <div class="container-fluid products">
        <div class="row mb-4">
            
        <?php
            $getProducts = $db->query("SELECT * from products WHERE id_product = '$productid'");

            if($getProducts->num_rows > 0){
                $getProductsReg = $getProducts->fetch_object();
                    $img = thumb("images/products/$getProductsReg->image");

                    echo "<div class='col-md-5 mb-4'>
                    <img src='$img' alt='$getProductsReg->image'>
                </div>
                <div class='col-md-7 mb-4 productCol'>
                    <h1 class='productName'>".utf8_encode($getProductsReg->name)."</h1>";

                    if($getProductsReg->discount > 0){
                        echo "<div class='priceDiv'>
                        <span>
                            <h4 class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".($getProductsReg->price * (1 - $getProductsReg->discount)) ."</span></h4>
                            <h4 class='oldPrice'><strong><del>€$getProductsReg->price</del></strong></h4>
                            </span>
                            </div>";
                    }else{
                        echo "<div class='priceDiv'><span>
                        <span class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".$getProductsReg->price."</span></span>
                        </div>";
                    }
                    
                    echo "
                    <input type='number' name='size' value='1' min='1' placeholder='Quantidade'>
                    <a href='CreditCard.php'>Comprar</a>
                </div>";
                
            }else{
                echo "<div>
                        <p>Esse produto não existe!<br>Se acha que é um erro entre em contacto connosco!</p>
                     </div>";
                     $errorFooter = 1;
           }
        ?>

        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
</body>
</html>