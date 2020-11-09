<?php      
        if(empty($_POST)){
        header("Location: /404");
        } 
        else{
        $query = DB::Query( "INSERT INTO `contact`(`id`, `message`, `name`, `email`, `tema`) VALUES (null ,'$_POST[message]' ,'$_POST[name]' ,'$_POST[email]' ,'$_POST[subject]')");
        if($query){
            header("Location: /contact");
        }
        else{
            header("Location: /404");
        }
    }
    

        
                    ?>