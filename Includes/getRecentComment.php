<?php

session_start();

define("ONE_SEC", 1);

require '../Includes/Comment.php';
include_once '../Includes/comment_databasehandler.php';

$recipe = $_SESSION['recipe'];

$sql_get = "SELECT * FROM comments WHERE recipe = '$recipe'";

$result = mysqli_query($connection, $sql_get);

    $array = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $comment = new Comment($row['username'], $row['message'], $row['commentid'], false);
        if ($row['username'] == $_SESSION['usr']) {
            $comment = new Comment($row['username'], $row['message'], $row['commentid'], true);
        }
        $array[] = $comment;
    }
    $_SESSION[currentComments] = $array;

while (true) {
    
    $result = mysqli_query($connection, $sql_get);

    $array = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $comment = new Comment($row['username'], $row['message'], $row['commentid'], false);
        if ($row['username'] == $_SESSION['usr']) {
            $comment = new Comment($row['username'], $row['message'], $row['commentid'], true);
        }
        $array[] = $comment;
    }
    if ($_SESSION[currentComments] != $array){
        echo json_encode($array);
        return;
    }
    \session_write_close();
    \sleep(ONE_SEC);
    \session_start();
}



