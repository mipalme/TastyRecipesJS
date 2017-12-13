<?php

session_start();

    if (isset($_POST['login']))
    {
        include '../Includes/login_databasehandler.php';
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Check empty input
        if(empty($username) || empty($password))
        {
            header("Location: login.php?login=emptyfields");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM users WHERE username='$username'";
            $result = mysqli_query($connection, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            // Check username
            if($resultCheck < 1)
            {
                header("Location: login.php?login=wrongusernameorpassword");
                exit();
            }
            else
            {
                if($row = mysqli_fetch_assoc($result))
                {
                    // Check password
                    if(!($password == $row['password']))
                    {
                        header("Location: login.php?login=wrongusernameorpassword");
                        exit();
                    }
                    elseif($password == $row['password'])
                    {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['usr'] = $row['username'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                }
            }
        }
    }
    else
    {
        header("Location: login.php?login=error");
        exit();
    }