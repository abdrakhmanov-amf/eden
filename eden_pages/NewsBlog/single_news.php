<?php
include "../../core/DB.php";
class SingleCard {
    public $category;

    public function GetData() {
        $news =  DB::Query("SELECT * FROM `blog` WHERE `id`='$_GET[id]' ");
        $arr_news = DB::Assoc($news);
        $this->category = $arr_news['id'];
        return $arr_news;
    }
    public function get_category(){
            $name_category =  DB::Query("SELECT `name` FROM `category` WHERE `id`='$this->category'");
            $array_category_name = DB::Assoc($name_category);
            return $array_category_name['name'];
    }
}


$card = new SingleCard;
echo "<pre>";
print_r($card->GetData());
echo "</pre>"
?>