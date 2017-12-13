<?php
    session_start();

    require '../Includes/Comment.php';
    include_once '../Includes/comment_databasehandler.php';

    if(isset($_POST['comment']))
    {
        $username = $_SESSION['usr'];
        $comment = $_POST['comment'];
        $recipe =  $_SESSION['recipe'];
       

        $sql_instruction = "INSERT INTO comments (username, message, recipe) VALUES('$username', '$comment', '$recipe')";
        mysqli_query($connection, $sql_instruction);
        
        $sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";
        $result = mysqli_query($connection, $sql_get);
    
        $array = array();
    
        while($row = mysqli_fetch_assoc($result))
        {
            $comment = new Comment($row['username'], $row['message'], $row['commentid'], false);
        if($row['username'] == $_SESSION['usr'])
        {
            $comment = new Comment($row['username'], $row['message'], $row['commentid'], true);
        }   
        $array[] = $comment;
        }

        echo json_encode($array);
    }