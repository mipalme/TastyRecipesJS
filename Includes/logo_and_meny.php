<?php
    session_start();
?>
    <h1 class="logo"><a href="../index.php">Tasty Recipes</a></h1>

    <nav>
        <ul class="meny">
            <li><a href="../index.php">Hem</a></li>
            <li><a href="../Meatballs_recipe/meatballs_recipe.php">Köttbullar</a></li>
            <li><a href="../Pancakes_recipe/pancakes_recipe.php">Pannkakor</a></li>
            <li><a href="../Calendar/calendar.php">Kalender</a></li>
            <?php
                if(isset($_SESSION['usr']))
                {
                    echo '<li><a href="../Includes/logout.php">Logga ut '.$_SESSION['usr'].'</a></li>';
                }
                else
                {
                    echo '<li><a href="../Login/login.php">Logga in</a></li>';
                    echo '<li><a href="../Signup/signup.php">Registrera dig</a></li>';
                }
            ?>
        </ul>
    </nav>