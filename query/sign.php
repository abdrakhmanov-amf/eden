<?php
        if(empty($_POST)){
            header("Location: /404");
        }
        else{
    
        $select = DB::Query("SELECT * FROM `user` WHERE `email`='$_POST[email]' and `password`='$_POST[password]'");
        if(DB::NumRow($select)) {
            $_SESSION['login'] = $_POST['email'];
            $_SESSION['pass'] = $_POST['password'];
            header("Location: /");
        }

    
        }
    
?>