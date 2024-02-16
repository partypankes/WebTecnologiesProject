<?php
if(isset($_SESSION['loggedin'])){
    echo '<div class="user">
                    <a href="../auth/logout.php">
                        <i id="logout-icon" class="fa-solid fa-right-from-bracket"></i>
                    </a><a href="../pagina_utente/pagina_utente.php">' . $_SESSION['username'] . '</a></div>';
}else{
    echo '<a class="user" href="../login/login_page.php"><i class="fa-solid fa-circle-user"></i>Accedi</a>';
}

?>
