<?php
    require '../private/autoload.php';

    $error = "";
    
    // if somebody posted something
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // priventing hacking the database by scaping spatial characters
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      
        
        if($error == "")
        {
            $arr['email'] = $email;
            $arr['password'] = $password;

            $query = "SELECT * FROM users WHERE email = :email && password = :password LIMIT 1";
            $stmt = $conn->prepare($query);
            $check = $stmt->execute($arr);
            
            if($check) 
            {
                $data = $stmt->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data) > 0)
                {
                    $data = $data[0];
                    $_SESSION['url_address'] = $data->url_address;
                    $_SESSION['username'] = $data->username;
                    header('location: dashboard.inc.php?error=none');
                    die;
                }
            }
        }
    }