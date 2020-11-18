<?php  
    include "../includes/db.php";

   $categories  =  DB::Query("SELECT * FROM `category`");

    while($category = DB::Assoc($categories)){
        $news_data   =  DB::Query("SELECT * FROM `blog` WHERE `category_id`='$category[id]'");

        $news = "";
        while ($n = DB::Assoc($news_data)) {
            
            $news .= "
                <div class='col-md-4'>
                <div class='main-card mb-3 card'><img width='100%' src='/img/news/$n[img]'
                        alt='Card image cap' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>$n[title]</h5>
                        <h6>$n[author]</h6>
                        <h6>$n[date]</h6>
                        <a href='edit.php?edit=$n[id]' color='white' type='btn'
                            class=' mr-2 btn btn-outline-secondary'>Edit</a>
                        <a href='?delete=$n[id]' color='white' type='btn'
                            class='mr-2 btn btn-outline-danger'>Delete</a>
                        <a href='news.php?news=$n[id]' color='white' type='btn'
                            class='btn btn-outline-success'>Подробнее</a>


                    </div>
                </div>

            </div>";
        }
                
        if($news!='') {

        
            echo "$news[title]";
            echo "
            <div class='container ptb'>
                <div class='row'>
                <div class='col-md-6 col-md-offset-3'>
                    <div class='block-description mb-70'>
                        <h2 class='center'>$category[name]</h2>
                       
                        
                    </div>
                </div>
                </div>
                <div class='row'>
            
                $news
               
            
                </div>
                </div>
            ";
            }
    
        }
    
    ?>



