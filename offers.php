<div class="offers" id="offers">
        <div class="row">
            <div class="col-md-7">
                <h3 class="align-middle">Produtos em desconto!</h3>
                <p>Aqui são apresentados os nossos produtos com desconto!</p>
            </div>
            <div class="col-md-5 offer">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                    <?php
                            $getProducts = $db->query("SELECT * from products WHERE discount > 0");

                            if($getProducts->num_rows > 0){
                                $i = 0;
                                while($getProductsReg = $getProducts->fetch_object()) {
                                    if($i == 0){
                                        echo "<div class='carousel-item active'>";
                                    }else{
                                        echo "<div class='carousel-item'>";
                                    }
                                    $i++;
                                    $img = thumb("images/products/$getProductsReg->image");
                                    $productInfo = "<div class='product'>
                                        <div class='content'>
                                                <img class='productImg' src='$img'>
                                                <h3>".utf8_encode($getProductsReg->name)."</h3>";
                                    if($getProductsReg->discount > 0){
                                        $productInfo = $productInfo . "<div class='priceDiv'>
                                        <span>
                                            <span class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".($getProductsReg->price * (1 - $getProductsReg->discount)) ."</span></span>
                                            <span class='oldPrice'><strong><del>€$getProductsReg->price</del></strong></span>
                                            </span>
                                            </div>";
                                    }else{
                                        $productInfo = $productInfo . "<div>
                                        <span class='newPrice'><span class='coin-symbol'>€</span><span class='price'>".$getProductsReg->price."</span></span>
                                    </div>";
                                    }
                                    
                                    $productInfo = $productInfo ."<a href='' data-bs-toggle='tooltip' data-bs-placement='left' title='Clique para explorar este produto!'>
                                                        Saiba Mais
                                                    </a>
                                                 </div></div>
                                             ";

                                    echo $productInfo;
                                    echo "</div>";
                                }
                            }else{
                                echo "
                                <div class='carousel-item'>
                                <img src='indisponivel.png' class='d-block w-100''>
                                </div>";
                            }

                        ?>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>