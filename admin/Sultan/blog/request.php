<?php
include "../../../core/DB.php";


    if(isset($_POST['desc'])) {


        $news_tags = implode(',',$_POST['tag']);

        $f = $_FILES['img'];
        $exp = explode('.', $f['name']);
        $format = end($exp);
        $img_name = mt_rand(10000,100000).time().'.'.$format;
        move_uploaded_file($f['tmp_name'] , '../../../img/news/' .$img_name);

        $add = DB::Query("INSERT INTO `blog`(`id`, `title`, `desc`, `img`, `url`, `author`, `date`, `is_public`,`category_id`,`tag_id`,`preview`) VALUES (null,'$_POST[title]','$_POST[desc]','$img_name','https://www.youtube.com/watch?v=g8kPDqzEtyg','$_POST[author]','$_POST[date]','1','$_POST[category]','$news_tags','$img_name')");

        if($add){
            header("Location: create.php?post=true");
        }else{
            header("Location: create.php?post=false");
        }
    }
 ?>