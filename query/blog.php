<?php  
 

   $categories  =  DB::Query( "SELECT * FROM `category`");

    while($category = DB::Assoc($categories)){
        $blogs   = DB::Query($c , "SELECT * FROM  `blog`  WHERE `category_id`='$category[id]'");

        $blog = "";
        while ($p =DB::Assoc($blogs)) {
            
          
                $blog .= "
                
                <div class='col-md-6 col-lg-4'>
                    <div class='single-category'>
                        <div class='thumb'>
                            <img class='img-fluid'
                                src='$b[img]'
                                alt=' data-pagespeed-url-hash='2894990395'
                                onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                        </div>
                        <div class='short_details'>
                            <div class='meta-top d-flex'>
                                <a href='#'>$b[author]</a>/
                                <a href='#'>$b[date]</a>
                            </div>
                            <a class='d-block' href='single-blog.html'>
                                <h4>$b[desk]</h4>
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
        
        if($blog!='') {

        
        echo "$blog['title']";
        echo "
        <div class='container ptb'>
            <div class='row'>
            <div class='col-md-6 col-md-offset-3'>
                <div class='block-description mb-70'>
                    <h2 class='center'>$category[name]</h2>
                    <span class='seperator'><i class='icon-heart-seperator'></i></span>
                    
                </div>
            </div>
            </div>
            <div class='row'>
        
            $blog
           
        
            </div>
            </div>
        }";
        

    }

?>