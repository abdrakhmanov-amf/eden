<?php 
if(isset($_POST['text'])){

     
    $query = DB::Query("SELECT * FROM `blog` WHERE `title` LIKE '%$_POST[text]%'");

    if(DB::NumRow($query)){
        while($news = DB::Assoc($query)) {
            $category = DB::Assoc(DB::Query("SELECT `name` FROM `category` WHERE `id`=$news[category_id]"));
            echo "
            <div class='col-md-6 col-lg-4'>
                    <div class='single-category'>
                        <div class='thumb'>
                            <img class='img-fluid'
                                src='/img/news/$news[img]'
                                alt='' data-pagespeed-url-hash='3189490316'
                                onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                        </div>
                        <div class='short_details'>
                            <div class='meta-top d-flex'>
                                <a href='#'>$category[name]</a>/
                                <a href='#'>$news[date] .,</a>
                            </div>
                            <a class='d-block' href='single-blog.html'>
                                <h4>$news[title]</h4>
                            </a>
                            <div class='meta-bottom d-flex'>
                                <a href='#'><i class='ti-comment'></i>05 комментарий</a>
                                <a href='#'><i class='ti-heart'></i>0 нравится</a>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
    
    }
     else{
        echo "<h1>Ничего не найдено!</h1>";
    }
}  
?>