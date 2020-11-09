<?php
abstract class Card {
    public $img ='';
    public $title ='';
    public $category = '';


    abstract public function GetData();

}

class LargeCard extends Card {
    public $date = '';
    public $author = '';

    public function SetData($i,$t,$c,$d,$a)
    {
        $this->img = $i;
        $this->title = $t;
        $this->category = $c;
        $this->date = $d;
        $this->author = $a;

    }
    public function GetData()
    {
       return " 
            <div class=' col-lg-6 col-xl-5'>
                <div class='single-blog'>
                    <div class='thumb'>
                        <img class='img-fluid' src='$this->img' alt='
                            '>
                    </div>
                    <div class='short_details'>
                        <div class='meta-top d-flex'>
                            <a href='#'>$this->category</a>
                        </div>
                        <a class='d-block' href='single-blog.html'>
                            <h4>$this->title</h4>
                        </a>
                        <div class='meta-bottom d-flex'>
                            <a href='#'>$this->date г.</a>
                            <a class='dark_font' href='#'>Автор: $this->author</a>
                        </div>
                    </div>
                </div>
            </div>
       ";
    }
}


class MediumCard extends Card {
    public $date = '';

    public function SetData($i,$t,$c,$d)
    {
        $this->img = $i;
        $this->title = $t;
        $this->category = $c;
        $this->date = $d;

    }
    public function GetData()
    {
       return "
       <div class='col-lg-4'>
       <div class='single-blog style-five'>
           <div class='thumb'>
               <img class='img-fluid' src='$this->img' alt='' data-pagespeed-url-hash='704644682'
                   onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
           </div>
           <div class='short_details'>
               <div class='meta-top d-flex'>
                   <a href='#'>$this->category</a>/
                   <a href='#'>$this->date г.,</a>
               </div>
               <a class='d-block' href='single-blog.html'>
                   <h4>$this->title</h4>
               </a>
               <div class='meta-bottom d-flex'>
                   <a href='#'><i class='ti-comment'></i>05 comment</a>
                   <a href='#'><i class='ti-heart'></i> 0 like</a>
               </div>
           </div>
       </div>
   </div>   
       ";
    }
}

class SmallCard extends Card {
    public $date = '';
    public function SetData($i,$t,$c,$d)
    {
        $this->img = $i;
        $this->title = $t;
        $this->category = $c;
        $this->date = $d;

    }
    public function GetData() {
        return "
            <div class='col-lg-6'>
                <div class='single-blog style-five small'>
                    <div class='thumb'>
                        <img class='img-fluid' src='$this->img' alt=''
                            data-pagespeed-url-hash='1882644366'
                            onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                    </div>
                    <div class='short_details'>
                        <div class='meta-top d-flex'>
                            <a href='#'>$this->category</a>/
                            <a href='#'>$this->date г.,</a>
                        </div>
                        <a class='d-block' href='single-blog.html'>
                            <h4>$this->title</h4>
                        </a>
                        <div class='meta-bottom d-flex'>
                            <a href='#'>$this->date г.,</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}

class SmCard extends Card {
    public function SetData($i,$t,$c)
    {
        $this->img = $i;
        $this->title = $t;
        $this->category = $c;

    }
    public function GetData()
    {
       return " 
            <div class='col-12 col-md-6 col-lg-6 col-xl-12'>
                <div class='single-blog style-three m_b_30'>
                    <div class='thumb'>
                        <img class='img-fluid' src='$this->img' alt=''
                            data-pagespeed-url-hash='350170539'
                            onload='pagespeed.CriticalImages.checkImageForCriticality(this);'>
                    </div>
                    <div class='short_details'>
                        <div class='meta-top d-flex justify-content-center'>
                            <a href='#'>$this->category</a>
                        </div>
                        <a class='d-block' href='single-blog.html'>
                            <h4>$this->title</h4>
                        </a>
                    </div>
                </div>
            </div>
       ";
    }
}

?>