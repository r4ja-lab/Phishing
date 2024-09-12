<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if (!empty($username) && !empty($password)){
        $file = "logindetails.txt";
        $data = "Username: $username , Password: $password\n";
        file_put_contents($file,$data,FILE_APPEND);
        echo "Login details saved";
    }
    else{
        echo "please enter both username and password";
    }
}
else{
    echo 'invaild request method';
}




?>