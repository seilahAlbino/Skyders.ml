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
    <link rel="icon" type="image/png" href="images/fi.png"/>
</head>
<body>
    <?php
        require_once "utils/connection.php";
        require_once "utils/login_methods.php";
        require_once "utils/functions.php";
        require_once "header.php";
    ?>


    <div class="container-fluid">
        <div class="row">
            
            
                <?php
                $errorFooter;
                    $categoria = $_GET["id_category"] ?? null;
                    $subcategoria = $_GET["id_subcategory"] ?? null;

                    if(!$categoria){
                        $getCategories = $db->query("SELECT * from categories");
                                    
                                    if($getCategories->num_rows > 0){
                                        echo "<div>
                                                <h2 class='center'>Escolha uma categoria!</h2>
                                              </div>";
                                        echo "<div class='container'>";
                                        while($getCategoriesReg = $getCategories->fetch_object()) {
                                            $img = thumb("images/categories/$getCategoriesReg->category_image");
                                            echo utf8_encode("<div class='category'>
                                                        <div class='content'>
                                                            <h3>$getCategoriesReg->name</h3>
                                                            <img class='CategoryImg' src='$img'>
                                                            <a href='category.php?id_category=$getCategoriesReg->id_category' data-bs-toggle='tooltip' data-bs-placement='left' title='Clique para explorar esta secção!'>
                                                                Saiba Mais
                                                            </a>
                                                            
                                                        </div>
                                                     </div>");
                                        }
                                    }else{
                                        echo "<div>
                                                <p>Não existem categorias!<br>Se acha que é um erro entre em contacto connosco!</p>
                                             </div>";
                                             $errorFooter = 1;
                                   }
                    }else{
                        $search = $db->query("SELECT name FROM categories WHERE id_category = '$categoria'"); //obter categoria

                        if(!$search){
                            echo "<div>
                                    <h2>A procura deu erro</h2>
                                    <p>Entre em contacto connosco para que possamos resolver o problema!</p>
                                  </div>"; //se der erro
                                  $errorFooter = 1;
                        }else{
                            if($search->num_rows == 0){
                                echo "<div>
                                        <h2>Essa categoria não existe</h2>
                                        <p>Se acha que é um erro entre em contacto connosco!</p>
                                      </div>"; //se a categoria não existir
                                      $errorFooter = 1;
                            }else{ 
                                $reg = $search->fetch_object();
                                
                                
                                if(!$subcategoria){
                                    
                                    $getSubCategories = $db->query("SELECT * from subcategories WHERE category = '$categoria'");
                                    
                                    if($getSubCategories->num_rows > 0){
                                        echo utf8_encode("<div>
                                                <h2 class='center'>$reg->name</h2>
                                                <p class='center'>Escolha uma subcategoria!</p>
                                              </div>");
                                        echo "<div class='container'>";
                                        while($getSubCategoriesReg = $getSubCategories->fetch_object()) {
                                            $img = thumb("images/subcategorys/$getSubCategoriesReg->subcategory_image");
                                            echo utf8_encode("<div class='subCategory'>
                                            <div class='content'>
                                                        <h3>$getSubCategoriesReg->name</h3>
                                                         <img class='CategoryImg' src='$img'>
                                                            <a href='category.php?id_category=$categoria&id_subcategory=$getSubCategoriesReg->id_subcategory' data-bs-toggle='tooltip' data-bs-placement='left' title='Clique para explorar esta secção!'>
                                                                Saiba Mais
                                                            </a>
                                                         </div>
                                                     </div>");
                                        }
                                    }else{
                                        echo utf8_encode("<div>
                                                <h2>$reg->name</h2>")."
                                                <p>Não existem subcategorias para esta categoria!<br>Se acha que é um erro entre em contacto connosco!</p>
                                             </div>";

                                             $errorFooter = 1;
                                   }

                                    
                                }else{
                                    $search2 = $db->query("SELECT name, subcategory_image FROM subcategories WHERE id_subcategory = '$subcategoria'");
                                    
                                    if(!$search2){
                                        echo "<div>
                                                 <h2>A procura deu erro</h2>
                                                 <p>Entre em contacto connosco para que possamos resolver o problema!</p>
                                              </div>"; //se der erro
                                              $errorFooter = 1;
                                    }else{
                                        if($search2->num_rows == 0){
                                            echo "<div><h2>Essa subcategoria não existe</h2><p>Se acha que é um erro entre em contacto connosco!</p></div>";
                                            $errorFooter = 1;
                                        }else{
                                            $reg2 = $search2->fetch_object();
                                            
                                            $getProducts = $db->query("SELECT * from products WHERE subCategory = '$subcategoria'");
                                            
                                            if($getProducts->num_rows > 0){
                                                echo utf8_encode("<div>
                                                        <h2>$reg->name - $reg2->name</h2>
                                                        <p class='center'>Escolha um produto!</p>
                                                    </div>");
                                                echo "<div class='container'>";

                                                while($getProductsReg = $getProducts->fetch_object()) {
                                                    $img = thumb("images/products/$getProductsReg->image");
                                                    $productInfo = utf8_encode("<div class='product'>
                                                        <div class='content'>
                                                                <img class='productImg' src='$img'>
                                                                <h3>$getProductsReg->name</h3>");
                                                    if($getProductsReg->discount > 0){
                                                        $productInfo = $productInfo . "<div class='priceDiv'>
                                                        <span>
                                                            <span class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".($getProductsReg->price * (1 - $getProductsReg->discount)) ."</span></span>
                                                            <span class='oldPrice'><strong><del>€$getProductsReg->price</del></strong></span>
                                                            </span>
                                                            </div>";
                                                    }else{
                                                        $productInfo = $productInfo . "<div class='priceDiv'><span>
                                                        <span class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".$getProductsReg->price."</span></span>
                                                        </div>";
                                                    }
                                                    
                                                    $productInfo = $productInfo . "<a href='product.php?id_product=$getProductsReg->id_product' data-bs-toggle='tooltip' data-bs-placement='left' title='Clique para explorar este produto!'>
                                                                        Comprar
                                                                    </a>
                                                                 </div>
                                                             </div>";

                                                    echo $productInfo;
                                                }
                                            }else{
                                                echo "<div>
                                                    <h2>".utf8_encode($reg->name). " - " . utf8_encode($reg2->name)."</h2>
                                                    <p>Não existem produtos para esta subcategoria!<br>Se acha que é um erro entre em contacto connosco!</p>
                                                </div>";

                                                $errorFooter = 1;
                                            }              
                                        }
                                    }
                                }
                            }
                        }
                    }

                ?>
                
                </div>
            </div>
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
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll(".subCategory"), {
            max: 25,
            speed: 400
        });

        VanillaTilt.init(document.querySelectorAll(".category"), {
            max: 25,
            speed: 400
        });

        VanillaTilt.init(document.querySelectorAll(".product"), {
            max: 25,
            speed: 400
        });
    </script>
</body>
</html>