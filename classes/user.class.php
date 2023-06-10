<?php

class user extends dbh{

    function setUser($name, $birth, $email, $pass){

        $sql = "INSERT INTO users(user_name, user_birthdate, ser_email, user_password) VALUES (?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $done = $stmt->execute([$name, $birth, $email, $pass]);

        if ($done == true) {
            
            return $done;

        }else{

            return "Error unknowing";

        }

    }

}

?>