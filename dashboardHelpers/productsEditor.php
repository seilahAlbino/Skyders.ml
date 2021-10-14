<h3 class='text-center'>Edite abaixo os produtos do site:</h3>
<hr>
    
        <ul class="list-categories-editor">
            <li>
                <a href="?dashboardOpt=5&categoryEditor=1">
                    <p class='text-center'>Criar Produto</p>
                </a>
            </li>

            <li>
                <a href="?dashboardOpt=5&categoryEditor=2">
                    <p class='text-center'>Remover Produto</p>
                </a>
            </li>

            <li>
                <a href="?dashboardOpt=5&categoryEditor=3">
                    <p class='text-center'>Editar Produto</p>
                </a>
            </li>

        </ul>
        <hr>
        <div class="divEditor">
        <?php

            if(!isset($_GET["categoryEditor"])){
                $_GET["categoryEditor"] = '';
                    echo "<h5 class='text-center'>Escolha uma opção acima</h5><br>";
                }

                $categoryEditor = $_GET["categoryEditor"];

                $getsubCategories = $db->query("SELECT * from subcategories");

                if($categoryEditor == "1"){
                    echo "<h4 class='text-center'>Adicionar um produto</h4><br>";

                    echo "<form action='#' method='POST' id='createForm3'><input type='text' name='nameProduct' id='idNameProduct' length='15' maxlength='250' placeholder='Nome do Produto'>";
                    

                    echo "<select id='subcategoriesSelectid' name='subcategoriesSelect'>";

                    echo "<option value=''>SubCategoria</option>";
                        while($getsubCategoriesReg = $getsubCategories->fetch_object()) {
                            echo "<option value='$getsubCategoriesReg->id_subcategory'>".utf8_encode($getsubCategoriesReg->name)."</option>";
                        }
                        echo "</select><br>";
                    


                    echo "<input type='text' name='imgProduct' id='idImgProduct' length='15' maxlength='30' placeholder='Nome da Imagem do Produto'><br>";
                    echo "<input type='number' step='0.01' name='PriceProduct' id='idPriceProduct' length='15' maxlength='30' placeholder='Preço do Produto'><br>";
                    echo "<input type='number' step='0.01' name='DiscountProduct' id='idDiscountProduct' length='15' maxlength='30' placeholder='Desconto do Produto'><br><br>";
                    echo "<input type='submit' class='btn btn-primary' value='Criar'>";
                    echo "</form>";
                    ?>

                    <script>
                    let createForm = document.getElementById('createForm3')

                    createForm.onsubmit = function(){

                        let nameProduct = document.getElementById("idNameProduct");

                        let subcategoriesProduct = document.getElementById("subcategoriesSelectid");
                        let subcategory = subcategoriesProduct.options[subcategoriesProduct.selectedIndex].value;

                        let imgProduct = document.getElementById("idImgProduct");
                        let priceProduct = document.getElementById("idPriceProduct");
                        let discountProduct = document.getElementById("idDiscountProduct");


                    if (subcategory == ""){
                        alert("Seleciona uma subcategoria para puderes criar um produto.");
                        return false;
                    }else{
                        if(nameProduct.value.trim() == ""){
                            alert("Insira o nome do produto.");
                            return false;
                        }else if(imgProduct.value.trim() == ""){
                            alert("Insira a imagem da imagem do produto.");
                            return false;
                        }else if(priceProduct.value.trim() == ""){
                            alert("Insira o preço da imagem do produto.");
                            return false;
                        }else if(discountProduct.value.trim() == ""){
                            alert("Insira o desconto da imagem do produto.");
                            return false;
                        }else{
                            if(!confirm(`Tens a certeza que queres criar o produto ${nameProduct.value.trim()} com a imagem ${imgProduct.value.trim()}, a ${priceProduct.value.trim()}€ e ${discountProduct.value.trim()} de desconto?`)) return false;
                        }
                    }
                        

                    }</script>
                    <?php

                        if(isset($_POST)){
                            $productName = $_POST['nameProduct'] ?? null;
                            $productImage = $_POST['imgProduct'] ?? null;
                            $productsubcategory = $_POST['subcategoriesSelect'] ?? null;
                            $productprice = $_POST['PriceProduct'] ?? null;
                            $productdiscount = $_POST['DiscountProduct'] ?? null;
                            if($productName != null && $productImage != null && $productsubcategory != null && $productprice != null && $productdiscount != null){

                                $sql = "INSERT into products (name, price, discount, image, subCategory) VALUES ('$productName', '$productprice', '$productdiscount', '$productImage', '$productsubcategory')"; 

                                if($db->query($sql)) {
                                    echo "<meta http-equiv='refresh' content='0'>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $db->error;
                                }
                            }
                        }  
                    
                }else if($categoryEditor == '2'){

                    $getProducts = $db->query("SELECT * from products");

                    echo "<h4 class='text-center'>Remover um produto</h4><br>";

                    if($getProducts->num_rows > 0){

                        $productid = $_POST['productsSelect'] ?? null;

                        echo "<form action='#' method='POST' id='removeForm'>";
                        echo "<label>Escolhe um produto:</label>";
                        echo "<br><select id='productsSelect' name='productsSelect'>";
                        echo "<option value=''>Produto</option>";
                        while($getProductsReg = $getProducts->fetch_object()) {
                            echo "<option value='$getProductsReg->id_product'>".utf8_encode($getProductsReg->name)."</option>";
                        }
                        echo "</select><br><br>";
                        echo "<input type='submit' class='btn btn-primary' value='Eliminar'>";
                        echo "</form>";

                        ?>
                        <script>
                        let removeForm = document.getElementById('removeForm');
                        removeForm.onsubmit = function(){

                            let select = document.getElementById("productsSelect");
                            let selectedValue = select.options[select.selectedIndex].value;

                            if (selectedValue == ""){
                                alert("Seleciona um produto para remover.");
                                return false;
                            }else{
                                if(!confirm(`Tens a certeza que queres remover o produto ${select.options[select.selectedIndex].innerHTML}?`)) return false;
                            }
                            
                        };
                        </script>
                        <?php

                        if(isset($_POST)){
                            
                            if($productid != null){
                                $sql = "DELETE FROM products WHERE id_product='$productid'"; 

                                if($db->query($sql)) {
                                    echo "<meta http-equiv='refresh' content='0'>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $db->error;
                                }
                            }
                        }
                        
                        
                    }else{
                        echo "<h5 class='text-center'>Não existem categorias para remover</h5>";
                    }

                    
                }else if($categoryEditor == '3'){
                    $getProducts = $db->query("SELECT * from products");
                    $getSubcategories = $db->query("SELECT * from subcategories");

                    echo "<h4 class='text-center'>Editar um produto</h4><br>";

                    if($getProducts->num_rows < 1){
                        echo "<h5 class='text-center'>Não existem produtos para editar!</h5>";
                    }else{

                        echo "<form action='#' method='POST' id='editForm'>";
                        echo "<label>Escolhe um produto:</label>";
                        echo "<select id='productsSelect' name='productsSelect'>";

                    echo "<option value=''>Produto</option>";
                        while($getProductsReg = $getProducts->fetch_object()) {
                            echo "<option value='$getProductsReg->id_product'>".utf8_encode($getProductsReg->name)."</option>";
                        }
                        echo "</select>";

                        echo "<select id='subcategoriesSelect' name='subcategoriesSelect'>";

                    echo "<option value=''>Subcategoria</option>";
                        while($getSubcategoriesReg = $getSubcategories->fetch_object()) {
                            echo "<option value='$getSubcategoriesReg->id_subcategory'>".utf8_encode($getSubcategoriesReg->name)."</option>";
                        }
                        echo "</select>";
                    echo "<br><input type='text' name='nameProductEdit' id='idNameProduct' length='15' maxlength='30' placeholder='Nome do Produto'>";
                    echo "<br><input type='text' name='imgProductEdit' id='idImgProduct' length='15' maxlength='30' placeholder='Novo nome da Imagem'><br>";
                    echo "<input type='number' step='0.01' name='PriceProduct' id='idPriceProduct' length='15' maxlength='30' placeholder='Preço do Produto'>";
                    echo "<input type='number' step='0.01' name='DiscountProduct' id='idDiscountProduct' length='15' maxlength='30' placeholder='Desconto do Produto'><br><br>";
                        echo "<input type='submit' class='btn btn-primary' value='Editar'>";
                        echo "</form>";

                        ?>

                        <script>
                        let editForm = document.getElementById('editForm');

                        editForm.onsubmit = function(){

                            let select = document.getElementById("productsSelect");
                            let selectedValue = select.options[select.selectedIndex].value;

                            let nameProduct = document.getElementById("idNameProduct");

                            let subcategoriesProduct = document.getElementById("subcategoriesSelect");
                            let subcategory = subcategoriesProduct.options[subcategoriesProduct.selectedIndex].value;

                            let imgProduct = document.getElementById("idImgProduct");
                            let priceProduct = document.getElementById("idPriceProduct");
                            let discountProduct = document.getElementById("idDiscountProduct");

                            console.log(nameProduct.value.trim())

                            if (selectedValue == ""){
                                alert("Seleciona um produto para editar.");
                                return false;
                            }else{

                                if(!confirm(`Deseja realmente editar o produto ${select.options[select.selectedIndex].innerHTML}? OBS: Caso selecione um produto e um dos campos não for preenchido, o campo ficará com o mesmo valor da base de dados.`)) return false;

                            }
                            
                        };</script>

                        <?php
                        if(isset($_POST)){

                            $newproductName = $_POST['nameProductEdit'] ?? null;
                            $newproductImage = $_POST['imgProductEdit'] ?? null;
                            $productprice = $_POST['PriceProduct'] ?? null;
                            $productdiscount = $_POST['DiscountProduct'] ?? null;
    
                            $subcategoryID = $_POST['subcategoriesSelect'] ?? null;
    
                            $productID = $_POST['productsSelect'] ?? null;

                            if($productID != null){

                                $productName = trim($newCategoryName);
                                $productImage = trim($newCategoryImage);

                                if($newproductName != "" || $newproductImage != "" || $productprice != "" || $productdiscount != "" || $subcategoryID){
                                    $sql = "UPDATE products SET";
                                    if($newproductName != ""){
                                        $sql = $sql . " name = '$newproductName'";
                                    }
                                    if($productprice != ""){
                                        if($newproductName != "") $sql = $sql . ", "; 
                                        $sql = $sql . " price = $productprice";
                                    } 
                                    if($productdiscount != ""){
                                        if($newproductName != "" || $productprice != "") $sql = $sql . ", "; 
                                        $sql = $sql . " discount = $productdiscount";
                                    }       
                                    if($newproductImage != ""){
                                        if($newproductName != "" || $productprice != "" || $productdiscount != "") $sql = $sql . ", "; 
                                        $sql = $sql . " image = '$newproductImage'";
                                    }   
                                    if($subcategoryID != ""){
                                        if($newproductName != "" || $productprice != "" || $productdiscount != "" || $newproductImage != "") $sql = $sql . ", "; 
                                        $sql = $sql . " subCategory = $subcategoryID";
                                    }   
                                    $sql = $sql . " WHERE id_product = $productID";
                                    if($db->query($sql)) {
                                        echo "<meta http-equiv='refresh' content='0'>";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $db->error;
                                    }
                                }
                            }
                        }
                    }
                }
        ?>


        </div>

