<?php  
    
    if(empty($_POST)){
        header("Location: /404");
    }
    else{

    $add_user = DB::Query("INSERT INTO `user`(`email`, `password`, `status`, `fullname`, `number`) VALUES ('$_POST[email]','$_POST[password]','0','$_POST[fullname]','$_POST[tel]')");

        if($add_user){
            header("Location: /login");
        }else{
            header("Location: /404");
        }

    }

?>