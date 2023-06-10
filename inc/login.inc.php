<?php

declare(strict_types = 1);
error_reporting(E_ALL);
include 'autoloader.inc.php';

if (isset($_POST['signup'])) {

    
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
    $pword2 = $_POST['pword2'];
    
    if ($pword === $pword2) {
        
        $user = new user();
        $setUser = $user->setUser($name, $birth, $email, $pword);
        
        var_dump($setUser);
        
        if ($setUser != false) {
            
            header("Location: ../home.php");

        }else if ($setUser == false) {
            
            // Error when inserting user
            echo $setUser; 

        }else{

            echo "Unknow error";

        }


    } else {

        echo "The password and repete password isn't the same. <br><a href='../signup.php'>Return</a>";

    }


}

?>