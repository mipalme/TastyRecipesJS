<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tasty Recipes - Köttbullar</title>
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
        <script src="../Includes/long_polling.js"></script>
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?> 
        
        <div class="background">
            <h2>Köttbullar</h2>
                <p>Hemgjorda köttbullar slår det mesta. Här är ett bra grundrecept som du gärna kan servera med gräddsås, potatismos och lingonsylt, men stuvade makaroner är såklart en höjdare också!</p>
        
            <img id="meatballsPicture" alt="Köttbullar" src="meatballs.jpg">
        
            <h3>Ingredienser(4 portioner, 15 min):</h3>
                <ul>
                    <li>500 g köttfärs</li>
                    <li>½ dl ströbröd</li>
                    <li>1 dl matlagningsgrädde 15%</li>
                    <li>2 msk finhackad lök</li>
                    <li>1 ägg</li>
                    <li>1 tsk salt</li>
                    <li>1 krm svartpeppar</li>
                    <li>2 msk smör-&rapsolja</li>
                </ul>
        
            <h3>Gör så här:</h3>
            <ol>
                <li>Blanda ströbröd och grädde.</li>
                <li>Låt svälla 10 min.</li>  
                <li>Lägg i färs, lök, ägg, salt och peppar. Rör till en jämn smet.</li>
                <li>Forma smeten till jämna bullar. Stek dem i smör-&rapsolja på medelvärme 3-5 min.</li>
            </ol>
        
            <h3>Kommentarer:</h3>
            
            <div class="comments" id="comments">
                <?php
                    $_SESSION['recipe'] = 'meatballs';                  
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
