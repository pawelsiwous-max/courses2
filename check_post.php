<?php

//print_r($_POST);





    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $message = $_POST['message'];

 
    if(trim($name) == ""  || trim($email) == "" || trim($password) == ""  || trim($message) == "") {
        echo "ERROR: not all data present";
    }
    
    else if (strlen(trim($name)) <= 1) {
        echo "no leght user name";
    }
    else if(strlen(trim($password)) <= 1) {
        echo "no leght u password";
    }
    else if(strlen(trim($message)) <= 1) {
        echo "no leght u message";
    }
    else {
        header('Location: index.php');
        exit;
    }



    // else {
    //     echo "all data";
    // }











    // if(strlen(trim($name)) <=1 ) {
    //     echo "ERROR: no lenght for username";
    // }



    // else {
    //     $_POST['password'] = md5($password);
    //     echo "<h1>All data</h1>";
    //     foreach ($_POST as $key => $value)
    //         echo "<p>Key: $key, value: $value</p>";

    //     header('Location: index.php');
    //     exit;    
    // }











    // if(trim($name) == "") {
    //     echo "ERROR: no username";
    // }
    // else if(strlen(trim($name)) <=1 ) {
    //     echo "ERROR: no lenght for username";
    // }
    // else if(trim($email) == "" || trim($password) == "" || trim($message) == "") {
    //     echo "ERROR: not all data presents";
    // }

    // else {
    //     $_POST['password'] = md5($password);
    //     echo "<h1>All data</h1>";
    //     foreach ($_POST as $key => $value)
    //         echo "<p>Key: $key, value: $value</p>";

    //     header('Location: index.php');
    //     exit;    
    // }