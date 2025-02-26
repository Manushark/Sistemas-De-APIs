<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
            
            <p>🔖 Sistema APIs</p>

        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="index.php">
                Inicio
            </a>
            <a class="navbar-item" href="acerca-de.php">
                Acerca de
            </a>



            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    lista de ejercicios 📃
                </a>

                <div class="navbar-dropdown">
                    <?php
                    foreach ($exercices as $exercice) {
                        echo "<a class='navbar-item' href='{$exercice["src"]}'>{$exercice["name"]}</a>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="navbar-end">
    <div class="navbar-item">
        <div class="buttons">
            <a class="button is-primary is-rounded has-text-weight-bold is-large">
                <span class="icon">
                    <i class="fas fa-user"></i>
                </span>
                <span>Manuel Rivas</span>
            </a>
        </div>
    </div>
</div>

    </div>
</nav>