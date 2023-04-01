<?php
    require '../private/autoload.php';

    $error = "";

    // if somebody posted something
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $url_address = get_random_string(60);
        // priventing hacking the database by scaping spatial characters
        $username = trim($_POST['username']);
        $password = esc($_POST['password']);
        $passwordrepeat = esc($_POST['passwordrepeat']);
        $email = $_POST['email'];
        $date = date('Y-m-d H:i:s');
        
        if(!preg_match("/^[a-zA-Z]+$/", $username))
        {
            $error = "Please enter a valid username!";
        }
        

        $username = esc($username);
        if($password !== $passwordrepeat)
        {
            $error = "Passwords are not match!";
        }
        if($error == "")
        {
            $arr['url_address'] = $url_address;
            $arr['username'] = $username;
            $arr['password'] = $password;
            $arr['email'] = $email;
            $arr['date'] = $date;
            $query = "INSERT INTO users (url_address, username, password, email, date) VALUES (:url_address, :username, :password, :email, :date)";
            $stmt = $conn->prepare($query);
            $stmt->execute($arr);
            header('location: ../public/index.php?error=none');
            die;
        }
        else
        {
            echo '<h1>'.$error.'</h1>';
        }
    }