<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tasty recipes - Pannkakor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../reset.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../Includes/get_comments.js"></script>
        <script src="../Includes/set_comment.js"></script>
        <script src="../Includes/delete_comment.js"></script>
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?> 
        
        <div class="background">
            <h2>Pannkakor</h2>
                <p>En klar vardagsfavorit! Här är ett enkelt grundrecept på tunna pannkakor, bara att steka och servera med sylt, grädde, glass eller kvarg.</p>
                
            <img id="pancakesPicture" alt="Pannkakor" src="pancakes.jpg">
            
            <h3>Ingredienser(8 stycken, 15 min):</h3>
                <ul>
                    <li>3 dl vetemjöl</li>
                    <li>6 dl mjölk</li>
                    <li>3 ägg</li>
                    <li>½ tsk salt</li>
                    <li>2 msk smör</li>
                </ul>
        
            <h3>Gör så här:</h3>
                <ol>
                    <li>Vispa ut mjölet i hälften av mjölken till en slät smet.</li>
                    <li>Vispa i resterande mjölk, ägg och salt.</li>
                    <li>Låt smeten svälla ca 10 min.</li>
                    <li>Smält smör i en stekpanna och häll ner i smeten. Grädda tunna pannkakor.</li>
                </ol>
        
            <h3>Kommentarer:</h3>      
                
            <div class="comments">
                <?php
                    $_SESSION['recipe'] = 'pancakes';                   
                ?>
            </div>
            <div>
            
            
            <?php
                if(isset($_SESSION['usr']))
                {
            ?>
                <h3>Kommentera:</h3>
                    <textarea rows="4" cols="70" class="comment" name="comment"></textarea><br>                            
                    <button onclick = "post()">Skicka kommentar</button>
            <?php
                }
            ?>
            </div>
        </div>    
    </body>
</html>
