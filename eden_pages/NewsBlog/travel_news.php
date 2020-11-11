<section class="first_block">
        <div class="container">
            <div class="row">
    <?php       
        $travel_n1 = new News;
        $t_news1 = $travel_n1->main(11,0,1);
    ?>            
                <div class="col-lg-8 col-xl-6">
                    <div class="single-blog row no-gutters style-four border_one">
                        <div class="col-12 col-sm-5">
                            <div class="thumb">
                                <img class="img-fluid"
                                    src="/img/news/<?=$t_news1['img']?>"
                                    alt="" data-pagespeed-url-hash="939170381">
                            </div>
                        </div>


                        <div class="col-12 col-sm-7">
                            <div class="short_details">
                                <div class="meta-top d-flex">
                                    <a href="#"><?=$travel_n1->get_category()?></a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4><?=$t_news1['title']?></h4>
                                </a>
                                <div class="meta-bottom d-flex">
                                    <a href="#"><?=$t_news1['date']?></a>
                                    <a class="dark_font" href="#"><?=$t_news1['author']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
                
        
                $travel_n2 = new News;
                $t_news2 = $travel_n2->main(11,1,2);
            ?>   
                <div class="col-lg-4 col-xl-3">
                    <div class="single-blog style_five">
                        <div class="thumb">
                            <img class="img-fluid"
                                src="/img/news/<?=$t_news2['img']?>"
                                alt="" data-pagespeed-url-hash="1233670302">
                        </div>
                        <div class="short_details ">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$travel_n2->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$t_news2['title']?></h4>
                            </a>
                        </div>
                    </div>
                </div>

            <?php
                
        
                $travel_n3 = new News;
                $t_news3 = $travel_n3->main(11,2,3);
            ?> 
                <div class="col-lg-4 col-xl-3">
                    <div class="single-blog style_five">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/news/<?=$t_news3['img']?>"
                                alt="" data-pagespeed-url-hash="1528170223">
                        </div>
                        <div class="short_details ">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$travel_n3->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$t_news3['title']?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>