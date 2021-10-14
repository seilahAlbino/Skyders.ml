<h3 class='text-center'>Edite abaixo as subcategorias do site:</h3>
<hr>

<ul class="list-subcategories-editor">
    <li>
        <a href="?dashboardOpt=4&subcategoryEditor=1">
            <p class='text-center'>Criar SubCategoria</p>
        </a>
    </li>

    <li>
        <a href="?dashboardOpt=4&subcategoryEditor=2">
            <p class='text-center'>Remover SubCategoria</p>
        </a>
    </li>

    <li>
        <a href="?dashboardOpt=4&subcategoryEditor=3">
            <p class='text-center'>Editar SubCategoria</p>
        </a>
    </li>

</ul>
<hr>
<div class="divEditor">
    <?php

        if(!isset($_GET["subcategoryEditor"])){
            $_GET["subcategoryEditor"] = '';
            echo "<h5 class='text-center'>Escolha uma opção acima</h5><br>";
        }

        $subcategoryEditor = $_GET["subcategoryEditor"];


        if($subcategoryEditor == "1"){
            echo "<h4 class='text-center'>Adicionar uma subcategoria</h4><br>";

            $getCategories = $db->query("SELECT * from categories");

            if($getCategories->num_rows > 0){

            echo "<form action='' method='POST' id='createForm2'>";
            echo "<select id='subcategoriesSelect' name='subcategoriesSelect'>";
                        echo "<option value=''>Categoria</option>";
                        while($getCategoriesReg = $getCategories->fetch_object()) {
                            echo "<option value='$getCategoriesReg->id_category'>".utf8_encode($getCategoriesReg->name)."</option>";
                        }
                        echo "</select><br><br>";
            echo "<input type='text' name='nameSubCategory' id='idNameSubCategory' length='15' maxlength='30' placeholder='Nome da SubCategoria'>";
            echo "<br><input type='text' name='imgSubCategory' id='idImgSubCategory' length='15' maxlength='30' placeholder='Nome da Imagem da SubCategoria'><br><br>";
            echo "<input type='submit' class='btn btn-primary' value='Criar'>";
            echo "</form>";
                    
            ?>

            <script>
                let createForm = document.getElementById('createForm2')

                createForm.onsubmit = function(){

                    let select = document.getElementById("subcategoriesSelect");
                    let selectedValue = select.options[select.selectedIndex].value;

                    let nameSubCategory = document.getElementById("idNameSubCategory");
                    let imgSubCategory = document.getElementById("idImgSubCategory");

                    if (selectedValue == ""){
                        alert("Seleciona uma categoria para puderes criar uma subcategoria.");
                        return false;
                    }else{
                        if(nameSubCategory.value.trim() == ""){
                            alert("Insira o nome da subcategoria.");
                            return false;
                        }else if(imgSubCategory.value.trim() == ""){
                            alert("Insira o nome da imagem da subcategoria.");
                            return false;
                        }else{
                            if(!confirm(`Tens a certeza que queres criar a subcategoria ${nameSubCategory.value.trim()} com a imagem ${imgSubCategory.value.trim()} na categoria ${select.options[select.selectedIndex].innerHTML}?`)) return false;
                        }
                    }
                }
            </script>
            <?php

                if(isset($_POST)){
                    $subcategoryName = $_POST['nameSubCategory'] ?? null;
                    $subcategoryImage = $_POST['imgSubCategory'] ?? null;
                    $categoryID = $_POST['subcategoriesSelect'] ?? null;
                    if($subcategoryName != null && $subcategoryImage != null){

                        $sql = "INSERT into subcategories (name, category, subcategory_image) VALUES ('$subcategoryName', '$categoryID', '$subcategoryImage')"; 

                        if($db->query($sql)) {
                            echo "<meta http-equiv='refresh' content='0'>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $db->error;
                        }
                    }
                }  
            }
        }else if($subcategoryEditor == '2'){

                $getSubCategories = $db->query("SELECT * from subcategories");

                echo "<h4 class='text-center'>Remover uma subcategoria</h4><br>";

                if($getSubCategories->num_rows > 0){

                $subcategoryID = $_POST['subcategoriesSelect'] ?? null;

                echo "<form action='#' method='POST' id='removeForm2'>";
                echo "<label>Escolhe uma subcategoria:</label>";
                echo "<select id='subcategoriesSelect' name='subcategoriesSelect'>";
                echo "<option value=''>Subcategoria</option>";
                while($getSubCategoriesReg = $getSubCategories->fetch_object()) {
                    echo "<option value='$getSubCategoriesReg->id_subcategory'>".utf8_encode($getSubCategoriesReg->name)."</option>";
                }
                echo "</select><br><br>";
                echo "<input type='submit' class='btn btn-primary' value='Eliminar'>";
                echo "</form>";

                ?>
                <script>
                let removeForm = document.getElementById('removeForm2');
                removeForm.onsubmit = function(){

                    let select = document.getElementById("subcategoriesSelect");
                    let selectedValue = select.options[select.selectedIndex].value;

                    if (selectedValue == ""){
                        alert("Seleciona uma subcategoria para remover.");
                        return false;
                    }else{
                        if(!confirm(`Tens a certeza que queres remover a subcategoria ${select.options[select.selectedIndex].innerHTML}?`)) return false;
                    }
                    
                };
                </script>
                <?php

                if(isset($_POST)){
                    
                    if($subcategoryID != null){
                        $sql = "DELETE FROM subcategories WHERE id_subcategory='$subcategoryID'"; 

                        if($db->query($sql)) {
                            echo "<meta http-equiv='refresh' content='0'>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $db->error;
                        }
                    }
                }
                
                
            }else{
                echo "<h5 class='text-center'>Não existem subcategorias para remover</h5>";
            }
            
        }else if($subcategoryEditor == '3'){
            $getSubCategories = $db->query("SELECT * from subcategories");
            $getCategories = $db->query("SELECT * from categories");
                    echo "<h4 class='text-center'>Editar uma subcategoria</h4><br>";

                    if($getSubCategories->num_rows < 1){
                        echo "<h5 class='text-center'>Não existem subcategorias para editar!</h5>";
                    }else{

                        echo "<form action='#' method='POST' id='editForm2'>";
                        echo "<label>Escolhe uma subcategoria:</label>";
                        echo "<select id='subcategoriesSelect' name='subcategoriesSelect'>";
                        echo "<option value=''>Subcategoria</option>";
                        while($getSubCategoriesReg = $getSubCategories->fetch_object()) {
                            echo "<option value='$getSubCategoriesReg->id_subcategory'>".utf8_encode($getSubCategoriesReg->name)."</option>";
                        }
                        echo "</select><br>";
                        echo "<select id='categoriesSelect' name='categoriesSelect'>";
                        echo "<option value=''>Categoria</option>";
                        while($getCategoriesReg = $getCategories->fetch_object()) {
                            echo "<option value='$getCategoriesReg->id_category'>".utf8_encode($getCategoriesReg->name)."</option>";
                        }
                        echo "</select>";
                        echo "<br><input type='text' name='newnameSubCategory' id='newidNameSubCategory' length='15' maxlength='30' placeholder='Novo nome da Subcategoria'>";
                        echo "<br><input type='text' name='newimgSubCategory' id='newidImgSubCategory' length='15' maxlength='30' placeholder='Novo nome da Imagem da Subcategoria'><br><br>";
                        echo "<input type='submit' class='btn btn-primary' value='Editar'>";
                        echo "</form>";

                        ?>

                        <script>
                        let editForm = document.getElementById('editForm2');

                        editForm.onsubmit = function(){

                            let select = document.getElementById("subcategoriesSelect");
                            let selectedValue = select.options[select.selectedIndex].value;

                            let select2 = document.getElementById("subcategoriesSelect");
                            let selectedValue2 = select.options[select.selectedIndex].value;

                            let nameCategory = document.getElementById("newidNameSubCategory");
                            let imgCategory = document.getElementById("newidImgSubCategory");

                            if (selectedValue == ""){
                                alert("Seleciona uma subcategoria para editar.");
                                return false;
                            }else{

                                if(!confirm(`Deseja realmente editar a subcategoria ${select.options[select.selectedIndex].innerHTML}? OBS: Caso selecione uma subcategoria e um dos campos não for preenchido, o campo ficará com o mesmo valor da base de dados.`)) return false;

                            }
                            
                        };</script>

                        <?php

                        $subcategoryID = $_POST['subcategoriesSelect'] ?? null;

                        $categoryID = $_POST['categoriesSelect'] ?? null;

                        $newCategoryName = $_POST['newnameSubCategory'] ?? null;
                        $newCategoryImage = $_POST['newimgSubCategory'] ?? null;

                        if(isset($_POST)){

                            if($subcategoryID != null){

                                $newName = trim($newCategoryName);
                                $newImage = trim($newCategoryImage);

                                if($newName != "" || $newImage != "" || $categoryID != null){
                                    $sql = "UPDATE subcategories SET";
                                    if($newName != ""){
                                        $sql = $sql . " name = '$newName'";
                                    }
                                    if($newImage != ""){
                                        if($newName != "") $sql = $sql . ", "; 
                                        $sql = $sql . " subcategory_image = '$newImage'";
                                    }
                                    if($categoryID != null){
                                        if($newName != "" || $newImage != "") $sql = $sql . ", "; 
                                        $sql = $sql . " category = '$categoryID'";
                                    }     

                                    $sql = $sql . " WHERE id_subcategory = $subcategoryID";
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