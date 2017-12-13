<!DOCTYPE html>
<html>
    <head>
        <title>Tasty recipes - Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../reset.css">
        <link rel="stylesheet" type="text/css" href="../style.css">
        <link href='https://fonts.googleapis.com/css?family=Atma' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <?php
            include_once '../Includes/logo_and_meny.php';
        ?>
              
        <div class="background">
            <h1>Registrera dig:</h1>
            <form action="signup_function.php" method="POST">
                Användarnamn:<input type="text" name="username" placeholder="Användarnamn" required>
                <?php
                    if (isset($_GET['signup']) && $_GET['signup'] == 'empty') 
                    {
                        echo 'Fyll i användarnamn och lösenord';
                    }
                    elseif (isset($_GET['signup']) && $_GET['signup'] == 'usernametaken')
                    {
                        echo 'Användarnamnet är taget';
                    }
                ?><br>
                Lösenord:<input type="password" name="password" placeholder="Lösenord" required><br>
                <input type="submit" name="register" value="Registrera dig">
            </form>     
        </div>
    </body>
</html>
