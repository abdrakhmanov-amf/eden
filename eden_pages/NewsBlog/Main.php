<div class="row">
<?php 
include "../core/news.php";

   $n1 = new News;
   $news_first = $n1->main(12,0,1);  // all data news
?>
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/news/<?=$news_first['img']?>" alt="" data-pagespeed-url-hash="4056137993"
                                >
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$n1->get_category()?></a>
                            </div>
                            <a class="d-block" href="/single<?='?id'=$news_first['id']?>">
                                <h4><?=$news_first['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><?=$news_first['date']?> </a>
                                <a class="dark_font" href="#"> By <?=$news_first['author']?></a>
                            </div>
                        </div>
                    </div>
                </div>


<?php
   $n2 = new News;
   $news_second = $n2->main(1,0,1);  // all data news
?>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="single-blog style_two">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/news/<?=$news_second['img']?>" alt="" data-pagespeed-url-hash="55670618"
                                >
                        </div>
                        <div class="short_details text-center ">
                            <div class="meta-top d-flex justify-content-center">
                                <a href="#"><?=$n2->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$news_second['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex justify-content-center">
                                <a href="#"><?=$news_second['date']?></a>
                                <a href="#">By <?=$news_second['author']?></a>
                            </div>
                        </div>
                    </div>
                </div>

<?php
   $n3 = new News;
   $news_sport_1 = $n3->main(2,0,1);  // all data news

   $n4 = new News;
   $news_sport_2 = $n4->main(2,1,2);  // all data news
?>
                <div class="col-lg-12 col-xl-3">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-12">
                            <div class="single-blog style-three m_b_30">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_sport_1['img']?>" alt=""
                                        data-pagespeed-url-hash="350170539"
                                        >
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex justify-content-center">
                                        <a href="#"><?=$n3->get_category()?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_sport_1['title']?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-12">
                            <div class="single-blog style-three m_b_30">
                                <div class="thumb">
                                    <img class="img-fluid" src="/img/news/<?=$news_sport_2['img']?>" alt=""
                                        data-pagespeed-url-hash="350170539"
                                        >
                                </div>
                                <div class="short_details">
                                    <div class="meta-top d-flex justify-content-center">
                                        <a href="#"><?=$n4->get_category()?></a>
                                    </div>
                                    <a class="d-block" href="single-blog.html">
                                        <h4><?=$news_sport_2['title']?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>