<?php
require "DB.php";
header('Content-Type: text/html; charset=utf-8'); // кодировка 

   $rout = $_SERVER["REQUEST_URI"]; // ссылка  
   $ex = explode('?',$rout);   //  https:://local.com  ?   id 
   $linking =  $_SERVER["REDIRECT_URL"];   //  https:://local.com/admin

    $routes=[
    //main page
        '/'=> 'eden_pages/index.php',
        '/login'=> 'eden_pages/signin.php',
        '/registration'=> 'eden_pages/signup.php',
        '/search'=>'eden_pages/search.php',
        '/blog'=>'eden_pages/blog.php',
        '/categories'=>'eden_pages/categories.php',
        '/contact'=>'eden_pages/contact.php',
        '/details'=>'eden_pages/details.php',
        '/latest-news'=>'eden_pages/latest-news.php',
        '/single'=>'eden_pages/single_blog.php',

        '/test'=>'/core/news.php',
        '/tests'=>'/core/fashion_news.php',


    //user page 

    //admin page
        '/admin'=>'/admin/Sultan/blog/blog.php',
    //query
        '/regis_to_new_user' =>'query/regis.php',
        '/sign' =>'query/sign.php',
        '/contacts' =>'query/contact.php',
        '/category' =>'query/categories.php',
        '/search_query' =>'query/search.php',
        '/email'=>'query/Email/send.php',
        '/404' =>'error/404.html',

    ];
    
    if(array_key_exists($ex[0],$routes)){
        include  __DIR__.'/../'.$routes[$ex[0]];exit;
    }
    else{
        include  __DIR__.'/../error/404.html';exit;
    }

?>