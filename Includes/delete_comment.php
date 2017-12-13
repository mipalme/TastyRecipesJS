<?php
    session_start();
    
    require '../Includes/Comment.php';
    include_once '../Includes/comment_databasehandler.php';
    
    if(isset($_POST['commentid']))
    {
        $cid = $_POST['commentid'];
        $recipe = $_SESSION['recipe'];
            
        $sql_get = "DELETE FROM comments WHERE commentid = '$cid'";
        mysqli_query($connection, $sql_get);
        
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