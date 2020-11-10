<?php

class Newses{

    public $category;
    
    public function main($category,$start,$end)
    {
       $news = DB::Query("SELECT * FROM `blog` WHERE `category_id`='$category' LIMIT $start,$end");
        $array_news =  DB::Assoc($news);
        $this->category = $category;
        return $array_news;
    }

    public function get_category(){
    $name_category =  DB::Query("SELECT `name` FROM `category` WHERE `id`='$this->category'");
        $array_category_name = DB::Assoc($name_category);
        return $array_category_name['name'];
    }

}

   

?>