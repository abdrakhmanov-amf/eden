<?php
 $imgs  =  DB::Query( "SELECT * FROM `img`");
 while ($p =DB::Assoc($imgs))
        if(isset($_POST['img'])){
            $f = $_FILES['img'];
            $exp = explode('.', $f['name']);
            $format = end($exp);
            $img_name = mt_rand(10000,100000).time().'.'.$format;
            move_uploaded_file($f['tmp_name'] , '../../../img/img/' .$img_name);
        
            $team = DB::Query("INSERT INTO `img`(`id`, `img`) VALUES (null,'$img_name')");
            
        if($team){
            echo"<section class='instagram'>
            <div class='row no-gutters'>
                <div class='col-2'>
                    <a href=''><img
                            src='$p[img]'
                            alt='' data-pagespeed-url-hash='270620287'></a>
                </div>
                
            </div>
        </section>";
        }



        }

?>