<div class="latest-news  area-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Fashion News</h3>
                    <p>Abundantly creeping saw forth spirit can made appear fourth us.</p>
                </div>
            </div>
            <?php 
include "../core/news.php";

   $n1 = new News;
   $news_first = $n1->main(12,0,1);  // all data news
   
   
?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-blog style-five">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/news/<?=$news_first['img']?>" alt="" data-pagespeed-url-hash="1588144445"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$n1->get_category()?></a>/
                                <a href="#"><?=$news_first['date']?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$news_first['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <?php
   $n2 = new News;
   $news_second = $n2->main(1,0,1);  // all data news


?>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-blog style-five small">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_second['img']?>" alt=""
                                        data-pagespeed-url-hash="1882644366"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex">
                                        <a href="#"><?=$n2->get_category()?></a>/
                                        <a href="#"><?=$news_second['date']?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_second['title']?></h4>
                                    </a>
                                    <div class="meta-bottom d-flex">
                                        <a href="#">By <?=$news_second['author']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
   $n3 = new News;
   $news_sport_1 = $n3->main(2,0,1);  // all data news

  
   
   
?>
                        <div class="col-lg-6">
                            <div class="single-blog style-five small">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_sport_1['img']?>" alt=""
                                        data-pagespeed-url-hash="3451896360"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex">
                                        <a href="#"><?=$n3->get_category()?></a>/
                                        <a href="#"><?=$news_sport_1['date']?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_sport_1['title']?></h4>
                                    </a>
                                    <div class="meta-bottom d-flex">
                                        <a href="#">By <?=$news_sport_1['author']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
   $n4 = new News;
   $news_sport_4 = $n4->main(4,0,1);  // all data news

  
   
   
?>
                         <div class="col-lg-6">
                            <div class="single-blog style-five small">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_sport_4['img']?>" alt=""
                                        data-pagespeed-url-hash="3451896360"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex">
                                        <a href="#"><?=$n4->get_category()?></a>/
                                        <a href="#"><?=$news_sport_4['date']?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_sport_4['title']?></h4>
                                    </a>
                                    <div class="meta-bottom d-flex">
                                        <a href="#">By <?=$news_sport_4['author']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
   $n5 = new News;
   $news_sport_5 = $n5->main(5,0,1);  // all data news

  
   
   
?>
                          <div class="col-lg-6">
                            <div class="single-blog style-five small">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_sport_5['img']?>" alt=""
                                        data-pagespeed-url-hash="3451896360"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex">
                                        <a href="#"><?=$n5->get_category()?></a>/
                                        <a href="#"><?=$news_sport_5['date']?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_sport_5['title']?></h4>
                                    </a>
                                    <div class="meta-bottom d-flex">
                                        <a href="#">By <?=$news_sport_5['author']?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>