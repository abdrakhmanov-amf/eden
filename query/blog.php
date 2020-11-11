<?php  
 

   $categories  =  DB::Query( "SELECT * FROM `category`");

    while($category = DB::Assoc($categories)){
        $blogs   = DB::Query($c , "SELECT * FROM  `blog`  WHERE `category_id`='$category[id]'");

        $blog = "";
        while ($p =DB::Assoc($blogs)) {
            
            $blog .= "
                <div class='col-sm-6'>
                    <div class='menu-item menu-item-one clearfix'>
                        
                        <div class='menu-text'>
                            <h5><a>$p[title]</a></h5>
                            <p>
                            $p[desc]</p>
                        </div>
                        <span class='price'>&#36; $p[author]</span>
                        <span class='price'>&#36; $p[date]</span>
                       
                    </div>
                </div>";
        }
        
        if($blog!='') {

        
        echo "$blog[title]";
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
        ";
        }

    }

?>