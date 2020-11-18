<?php 

    include "../includes/db.php";

    $blogs = mysqli_query($c,"SELECT * FROM `blog`");

    while ($blog = mysqli_fetch_assoc($blogs)) {
        
       $split_tag =  explode(',',$blog['tag_id']);

        foreach ($split_tag as $value) {
            $tags = mysqli_query($c,"SELECT `name` FROM `tag` WHERE `id`='$value'");
            $tag = mysqli_fetch_assoc($tags);

            echo $tag['name'].'<br>';
        }

        echo '<br><br><br>';
       
    }   

?>