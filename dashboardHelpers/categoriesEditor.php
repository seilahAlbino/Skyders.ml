<h3 class='text-center'>Edite abaixo as categorias do site:</h3>
<hr>
    
        <ul class="list-categories-editor">
            <li>
                <a href="?dashboardOpt=3&categoryEditor=1">
                    <p class='text-center'>Criar Categoria</p>
                </a>
            </li>

            <li>
                <a href="?dashboardOpt=3&categoryEditor=2">
                    <p class='text-center'>Remover Categoria</p>
                </a>
            </li>

            <li>
                <a href="?dashboardOpt=3&categoryEditor=3">
                    <p class='text-center'>Editar Categoria</p>
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


                if($categoryEditor == "1"){
                    echo "<h4 class='text-center'>Adicionar uma categoria</h4><br>";

                    echo "<form action='#' method='POST' id='createForm'><input type='text' name='nameCategory' id='idNameCategory' length='15' maxlength='30' placeholder='Nome da Categoria'>";
                    echo "<br><input type='text' name='imgCategory' id='idImgCategory' length='15' maxlength='30' placeholder='Nome da Imagem da Categoria'><br><br>";
                    echo "<input type='submit' class='btn btn-primary' value='Criar'>";
                    echo "</form>";
                    ?>

                    <script>
                    let createForm = document.getElementById('createForm')

                    createForm.onsubmit = function(){

                        let nameCategory = document.getElementById("idNameCategory");
                        let imgCategory = document.getElementById("idImgCategory");

                        if(nameCategory.value.trim() == ""){
                            alert("Insira o nome da categoria.");
                            return false;
                        }else if(imgCategory.value.trim() == ""){
                            alert("Insira o nome da imagem da categoria.");
                            return false;
                        }else{
                            if(!confirm(`Tens a certeza que queres criar a categoria ${nameCategory.value.trim()} com a imagem ${imgCategory.value.trim()}?`)) return false;
                        }

                    }</script>
                    <?php

                        if(isset($_POST)){
                            $categoryName = $_POST['nameCategory'] ?? null;
                            $categoryImage = $_POST['imgCategory'] ?? null;
                            if($categoryName != null && $categoryImage != null){

                                $sql = "INSERT into categories (name, category_image) VALUES ('$categoryName', '$categoryImage')"; 

                                if($db->query($sql)) {
                                    echo "<meta http-equiv='refresh' content='0'>";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $db->error;
                                }
                            }
                        }  
                    
                }else if($categoryEditor == '2'){

                    $getCategories = $db->query("SELECT * from categories");

                    echo "<h4 class='text-center'>Remover uma categoria</h4><br>";

                    if($getCategories->num_rows > 0){

                        $categoryID = $_POST['categoriesSelect'] ?? null;

                        echo "<form action='#' method='POST' id='removeForm'>";
                        echo "<label>Escolhe uma categoria:</label>";
                        echo "<select id='categoriesSelect' name='categoriesSelect'>";
                        echo "<option value=''>Categoria</option>";
                        while($getCategoriesReg = $getCategories->fetch_object()) {
                            echo "<option value='$getCategoriesReg->id_category'>".utf8_encode($getCategoriesReg->name)."</option>";
                        }
                        echo "</select><br><br>";
                        echo "<input type='submit' class='btn btn-primary' value='Eliminar'>";
                        echo "</form>";

                        ?>
                        <script>
                        let removeForm = document.getElementById('removeForm');
                        removeForm.onsubmit = function(){

                            let select = document.getElementById("categoriesSelect");
                            let selectedValue = select.options[select.selectedIndex].value;

                            if (selectedValue == ""){
                                alert("Seleciona uma categoria para remover.");
                                return false;
                            }else{
                                if(!confirm(`Tens a certeza que queres remover a categoria ${select.options[select.selectedIndex].innerHTML}?`)) return false;
                            }
                            
                        };
                        </script>
                        <?php

                        if(isset($_POST)){
                            
                            if($categoryID != null){
                                $sql = "DELETE FROM categories WHERE id_category='$categoryID'"; 

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
                    $getCategories = $db->query("SELECT * from categories");

                    echo "<h4 class='text-center'>Editar uma categoria</h4><br>";

                    if($getCategories->num_rows < 1){
                        echo "<h5 class='text-center'>Não existem categorias para editar!</h5>";
                    }else{

                        echo "<form action='#' method='POST' id='editForm'>";
                        echo "<label>Escolhe uma categoria:</label>";
                        echo "<select id='categoriesSelect' name='categoriesSelect'>";
                        echo "<option value=''>Categoria</option>";
                        while($getCategoriesReg = $getCategories->fetch_object()) {
                            echo "<option value='$getCategoriesReg->id_category'>".utf8_encode($getCategoriesReg->name)."</option>";
                        }
                        echo "</select><br><br><input type='text' name='newnameCategory' id='newidNameCategory' length='15' maxlength='30' placeholder='Novo nome da Categoria'>";
                        echo "<br><input type='text' name='newimgCategory' id='newidImgCategory' length='15' maxlength='30' placeholder='Novo nome da Imagem da Categoria'><br><br>";
                        echo "<input type='submit' class='btn btn-primary' value='Editar'>";
                        echo "</form>";

                        ?>

                        <script>
                        let editForm = document.getElementById('editForm');

                        editForm.onsubmit = function(){

                            let select = document.getElementById("categoriesSelect");
                            let selectedValue = select.options[select.selectedIndex].value;

                            let nameCategory = document.getElementById("newidNameCategory");
                            let imgCategory = document.getElementById("newidImgCategory");

                            if (selectedValue == ""){
                                alert("Seleciona uma categoria para editar.");
                                return false;
                            }else{

                                if(!confirm(`Deseja realmente editar a categoria ${select.options[select.selectedIndex].innerHTML}? OBS: Caso selecione uma categoria e um dos campos não for preenchido, o campo ficará com o mesmo valor da base de dados.`)) return false;

                            }
                            
                        };</script>

                        <?php

                        $categoryID = $_POST['categoriesSelect'] ?? null;
                        $newCategoryName = $_POST['newnameCategory'] ?? null;
                        $newCategoryImage = $_POST['newimgCategory'] ?? null;

                        if(isset($_POST)){

                            if($categoryID != null){

                                $newName = trim($newCategoryName);
                                $newImage = trim($newCategoryImage);

                                if($newName != "" || $newImage != ""){
                                    $sql = "UPDATE categories SET";
                                    if($newName != ""){
                                        $sql = $sql . " name = '$newName'";
                                    }
                                    if($newImage != ""){
                                        if($newName != "") $sql = $sql . ", "; 
                                        $sql = $sql . " category_image = '$newImage'";
                                    }       
                                    
                                    $sql = $sql . " WHERE id_category = $categoryID";
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

