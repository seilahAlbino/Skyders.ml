
<div class="navbar">

<nav class="navbar navbar-expand-lg navbar-light">
<div class="container-fluid">
<div class="logo">
            <a href="index.php"><img src="images/api/Joaquim Pereira Logo.svg" style="margin-top: 10px" width="150px"></a>
        </div>
        <button class="navbar-toggler btnToggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" class="bi" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
            </svg>
        </button>
    <div class="collapse navbar-collapse divHeader w-100 justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php">Início</a></li>
                <li class="nav-item"><a href="category.php">Categorias</a></li>
                <?php

                    if(getTypeUser() == 2) echo "<li class='nav-item'><a href='dashboard.php'>Dashboard</a></li>";
                    if(isLogged()){
                        echo "<li class='nav-item'>".$_SESSION["nome"]."</li>";
                        echo "<li class='nav-item'><a href='logout.php'>Sair</a></li>";

                    }else{
                        echo "<li class='nav-item'><a href='loginPage.php'>Login</a></li>";
                    }
                ?>
            </ul>
        </div>
  </div>
</nav>
</div>