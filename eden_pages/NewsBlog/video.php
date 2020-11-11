<div class="video-area background_one area-padding">
        <div class="container">
            <div class="row">
                <div class="area-heading">
                    <h3>Новости путешествий</h3>
                    <p>Обильно подкрадывающийся дух может явиться четвертым нам.</p>
                </div>
            </div>
            <div class="row">

        <?php
            include "../../core/news.php";

            $video1 = new News;
            $video_news1 = $video1->main(11,0,1);
        ?>
                <div class="col-lg-7">
                    <div class="single-blog video-style">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/news/<?=$video_news1['preview']?>"
                                alt="" data-pagespeed-url-hash="3821612294">
                            <div class="play_btn">
                                <a class="play-video" href="<?=$video_news1['url']?>"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$video1->get_category()?></a>/
                                <a href="#">15 марта 2019 г.,</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$video_news1['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-comment"></i>05 comment</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-blog video-style small row m_b_30">
        <?php

            $video2 = new News;
            $video_news2 = $video2->main(11,1,2);
        ?>
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="/img/news/<?=$video_news2['preview']?>"
                                alt="" data-pagespeed-url-hash="4116112215">
                            <div class="play_btn">
                                <a class="play-video" href="<?=$video_news2['url']?>"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$video2->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$video_news2['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog video-style small row m_b_30 ">
        <?php

            $video3 = new News;
            $video_news3 = $video3->main(11,2,3);
        ?>
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="/img/news/<?=$video_news3['preview']?>"
                                alt="" data-pagespeed-url-hash="115644840">
                            <div class="play_btn">
                                <a class="play-video" href="<?=$video_news3['url']?>"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$video3->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$video_news3['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-blog video-style small row">
            <?php

                $video4 = new News;
                $video_news4 = $video4->main(11,0,1);
            ?>
                        <div class="thumb col-12 col-sm-5">
                            <img class="img-fluid" src="/img/news/<?=$video_news4['preview']?>"
                                alt="" data-pagespeed-url-hash="115644840">
                            <div class="play_btn">
                                <a class="play-video" href="<?=$video_news4['url']?>"
                                    data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><span
                                        class="ti-control-play"></span></a>
                            </div>
                        </div>
                        <div class="short_details col-12 col-sm-7">
                            <div class="meta-top d-flex">
                                <a href="#"><?=$video4->get_category()?></a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4><?=$video_news4['title']?></h4>
                            </a>
                            <div class="meta-bottom d-flex">
                                <a href="#"><i class="ti-time"></i>mar 12</a>
                                <a href="#"><i class="ti-heart"></i> 0 like</a>
                                <a href="#"><i class="ti-eye"></i> 1k view</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>