<?php ob_start("ob_gzhandler"); header("content-type: text/css; charset: UTF-8"); header("cache-control: must-revalidate"); header("expires: ".gmdate('D, d M Y H:i:s', time() + 31536000)." GMT"); ?>html,body{font-size:100%;font-size:12px;line-height:1.2;width:100%;height:100%;min-height:100%;height:auto;float:left;margin:0;padding:0;position:relative;text-align:center;-webkit-font-smoothing:subpixel-antialiased;}body{background:rgb(245,245,245);background-image:url('http://isbb.org/isbb/media/layout/isbb_berlin_bg_top.png');background-image:url('http://isbb.org/isbb/media/layout/isbb_berlin_bg_top.png'),-moz-radial-gradient(center,rgb(255,255,255),rgb(225,225,225));background-image:url('http://isbb.org/isbb/media/layout/isbb_berlin_bg_top.png'),-webkit-radial-gradient(center,rgb(255,255,255),rgb(225,225,225));background-repeat:no-repeat;}img,a img,fieldset{border:0;}:focus,:active{outline:none;outline:0;}div,ul,li,input,textarea,label{position:relative;}ul{list-style-position:inside;}a:hover{cursor:pointer;}a,a:hover,a:active,a:visited{color:inherit;text-decoration:inherit;outline:none;}html,body,div,span,textarea,input,h1,h2,h3,h4,p,a,img,ol,ul,li,fieldset,form,label,legend{margin:0;padding:0;font-family:"Helvetica","Arial",Sans-serif;}table{border-collapse:collapse;border-spacing:0;}::selection,::-moz-selection,::-webkit-selection{background:rgb(255,220,0) !important;color:#000 !important;}.float-right{float:right;}.float-left{float:left;}#page_wrapper{height:100%;width:100%;min-width:960px;max-width:960px;text-align:left;margin:0 auto;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding:0 15px;}#header{float:left;z-index:5;width:100%;height:35px;margin:10px 0 0 0;border-bottom:1px solid rgb(80,80,80);background-color:rgb(120,120,120);background-image:-moz-linear-gradient(top,rgb(140,140,140),rgb(100,100,100));background-image:-webkit-linear-gradient(top,rgb(140,140,140),rgb(100,100,100));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(140,140,140)),to(rgb(100,100,100)));color:rgb(225,225,225);font-size:12px;text-shadow:rgba(0,0,0,0.3) 1px 1px 0;letter-spacing:0.02em;border-radius:4px;-webkit-border-radius:4px;}#logo{float:left;height:45px;width:200px;border-right:1px solid rgba(0,0,0,0.2);box-shadow:1px 0 0 rgba(255,255,255,0.1);-webkit-box-shadow:1px 0 0 rgba(255,255,255,0.1);font-size:18px;color:rgb(30,35,40);text-shadow:rgba(105,110,115,0.4) 1px 1px 0,rgba(160,165,170,0.1) -1px -1px 0;text-decoration:none;}#logo_img{line-height:0.9;padding:7px 100px 0 20px;display:block;}#head_img{width:100%;height:200px;float:left;display:block;margin:20px 0 0 0;min-width:900px;max-width:960px;background-color:rgb(255,255,255);background-image:url('http://isbb.org/isbb/media/images/isbb_office_01.png');border:1px solid rgb(150,150,150);background-repeat:no-repeat;background-position:right;border-radius:4px;overflow:hidden;}#content{float:left;width:100%;margin:20px 0 10px 0;padding-right:200px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;border-radius:4px;-webkit-border-radius:4px;background-color:rgb(255,255,255);box-shadow:0 0 3px rgba(0,0,0,0.4);-webkit-box-shadow:0 0 3px rgba(0,0,0,0.4);}#copy{display:block;float:left;width:100%;padding:20px 20px 40px 40px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}#copy p{width:100%;max-width:500px;font-size:12px;line-height:130%;color:rgb(75,75,75);margin-bottom:15px;}#copy ul li,#copy ol li{color:rgb(75,75,75);padding:4px 0;}#copy ul{width:100%;max-width:500px;float:left;display:inline-block;list-style-position:outside;}#copy ol,#copy ul{margin:0 0 15px 15px;}#copy ol li{margin-left:10px;font-weight:bold;}#copy ol li p{font-weight:normal;}#copy blockquote{width:100%;position:relative;display:block;max-width:480px;font-size:12px;color:rgb(75,75,75);padding-left:20px;margin-left:0;border-left:4px solid rgb(230,230,230);}#copy blockquote cite{width:100%;display:block;padding:10px 0 0 0;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;font-style:italic;color:rgb(125,125,125);}#copy blockquote cite:before{content:"~ ";}#copy h1,h2,h3,h4{max-width:520px;}#copy table{width:100%;max-width:500px;color:rgb(75,75,75);margin:20px 0;}#copy h1{margin-left:-20px;}#copy h3{font-size:100%;color:rgb(75,75,75);margin-bottom:5px;}#copy table td{padding:5px 3px;border-bottom:1px solid rgb(240,240,240);}#copy table tr:last-child td{border:0;}#copy table td.amounts{text-align:right;}#copy p.annotation{display:block;position:relative;float:left;padding:5px 0 5px 3px;border-top:1px solid rgb(220,220,220);color:rgb(125,125,125);font-size:10px;}a.more,a.link{display:block;color:rgb(160,0,10);}a.more:before,a.link:before{font-family:Times;content:"» ";font-size:16px;}a.more:hover,a.link:hover{text-decoration:underline;}h1{font-size:26px;font-weight:bold;color:rgb(50,165,215);display:block;text-shadow:rgba(0,0,0,0.1) 1px 1px 0;margin-bottom:10px;}h1:after{content:"";position:absolute;margin-top:-28px;display:block;height:26px;width:100%;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0.3)),color-stop(50% rgba(255,255,255,0.1)),color-stop(49% rgba(255,255,255,0.0)),to(rgba(255,255,255,0.0)));background-image:-moz-linear-gradient(top,rgba(255,255,255,0.3),rgba(255,255,255,0.1) 50%,rgba(65,165,210,0.0) 49%,rgba(65,165,210,0.0));background-image:-webkit-linear-gradient(top,rgba(255,255,255,0.3),rgba(255,255,255,0.1) 50%,rgba(255,255,255,0.0) 49%,rgba(255,255,255,0.0));}h2{font-size:18px;font-weight:bold;color:rgb(50,165,215);display:block;text-shadow:rgba(0,0,0,0.1) 1px 1px 0;margin:20px 0 5px 0;}h2:after{content:"";position:absolute;margin-top:-20px;display:block;height:18px;width:100%;background-image:-moz-linear-gradient(top,rgba(255,255,255,0.3),rgba(255,255,255,0.1) 50%,rgba(255,255,255,0.0) 49%,rgba(255,255,255,0.0));background-image:-webkit-linear-gradient(top,rgba(255,255,255,0.3),rgba(255,255,255,0.1) 50%,rgba(255,255,255,0.0) 49%,rgba(255,255,255,0.0));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0.3)),color-stop(50% rgba(255,255,255,0.1)),color-stop(49% rgba(255,255,255,0.0)),to(rgba(255,255,255,0.0)));}.table-horizontal,.table-horizontal tr{position:relative;float:left;display:block;width:100%;max-width:500px;}.table-horizontal td{width:50%;position:relative;float:left;display:block;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}.network-link{color:rgb(75,75,75);margin-bottom:20px;}#home .box{position:relative;float:left;width:50%;padding-right:30px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}#home .box.right{float:right;padding-left:30px;padding-right:15px;}#home .box.news{min-height:200px;margin-top:25px;padding-left:20px;margin-left:10px;margin-right:-10px;border-radius:4px;-webkit-border-radius:4px;background-color:rgba(50,165,215,0.1);}#home.box.news a{display:block;}#home .box.news p,#home .box.news h3{color:rgba(0,0,0,0.6);}#home .box.news p{margin-bottom:30px;}#home .box.news h2{margin-top:15px;text-shadow:none;}#home .box.news h2:after{display:none;}#news .link{display:inline-block;text-decoration:underline;color:rgb(75,75,75);}#news .link:before{display:none;}#main_menu,#meta_menu{list-style:none;float:left;font-size:12px;height:35px;border-radius:4px;-webkit-border-radius:4px;}#meta_menu{float:right;}#main_menu li,#meta_menu li{float:left;display:block;}#main_menu li:last-child,#meta_menu li:last-child{border:none;}#main_menu a,#meta_menu a{text-decoration:none;display:block;padding:11px 15px 11px 15px;border-right:1px solid rgba(0,0,0,0.2);}#main_menu li.active > a{border-bottom:1px solid rgba(0,0,0,0.5);border-right:1px solid rgb(20,90,130);padding:11px 15px 10px 15px;background-color:rgb(65,165,210);background-image:-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));color:rgb(255,255,255);}#main_menu li:hover > a,#meta_menu li:hover > a{border-bottom:1px solid rgba(0,0,0,0.5);border-right:1px solid rgb(20,90,130);padding:11px 15px 10px 15px;background-color:rgb(65,165,210);background-image:-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));color:rgb(255,255,255);}#main_menu > li.first > a{border-top-left-radius:4px;border-bottom-left-radius:4px;font-size:22px;letter-spacing:0.1em;padding:7px 15px 2px 15px;background-color:rgb(65,165,210);background-image:-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));text-shadow:rgba(0,0,0,0.3) 1px -1px 0,rgba(0,0,0,0.1) 0 0 1px;border-bottom:1px solid rgba(0,0,0,0.5);border-right:1px solid rgb(20,90,130);color:rgba(255,255,255,0.9);}#main_menu > li.last > a{border-right:none;}#main_menu > li.last > a:hover,#main_menu > li.last.active > a{border-right:1px solid rgb(20,90,130);}#meta_menu > li.last > a{border-bottom:1px solid rgba(0,0,0,0.5);padding:11px 15px 10px 15px;border-top-right-radius:4px;border-bottom-right-radius:4px;border-left:1px solid rgb(80,80,80);background-color:rgb(100,100,100);background-image:-moz-linear-gradient(top,rgb(120,120,120),rgb(80,80,80));background-image:-webkit-linear-gradient(top,rgb(120,120,120),rgb(80,80,80));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(120,120,120)),to(rgb(80,80,80)));}#meta_menu > li.last > a:hover,#meta_menu > li.last.active > a{border-bottom:1px solid rgb(100,0,0);border-left:1px solid rgb(100,0,0);background-color:rgb(160,0,10);background-image:-moz-linear-gradient(top,rgb(200,0,15),rgb(140,0,5));background-image:-webkit-linear-gradient(top,rgb(200,0,15),rgb(140,0,5));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(200,0,15)),to(rgb(140,0,5)));}.has-submenu .main-submenu,.has-submenu .meta-submenu{display:none;}.has-submenu:hover .main-submenu,.has-submenu:hover .meta-submenu{display:block;position:absolute;top:36px;left:-1px;list-style:none;color:rgb(90,90,90);background:rgb(245,245,245);background-image:-moz-linear-gradient(bottom,rgb(240,240,240),rgb(255,255,255));background-image:-webkit-linear-gradient(bottom,rgb(240,240,240),rgb(255,255,255));background-image:-webkit-gradient(linear,left top,left bottom,to(rgb(255,255,255)),from(rgb(240,240,240)));border-radius:3px;-webkit-border-radius:3px;-webkit-box-shadow:1px 1px 4px rgba(0,0,0,0.5);box-shadow:1px 1px 4px rgba(0,0,0,0.5);}#main_menu .has-submenu .main-submenu li,#meta_menu .has-submenu .meta-submenu li{position:relative;display:block;border:none;float:left;width:100%;min-width:180px;height:25px;}#main_menu .main-submenu li a,#meta_menu .meta-submenu li a{background:none;border:none;display:block;float:left;position:relative;width:100%;line-height:1;padding:7px 10px 7px 10px;height:25px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;text-shadow:rgb(255,255,255) 1px 1px 0;}#main_menu .main-submenu li.active a,#meta_menu .meta-submenu li.active,#main_menu .main-submenu li a:hover,#main_menu .main-submenu li a.active:hover,#meta_menu .meta-submenu li a:hover,#meta_menu .meta-submenu li a.active:hover{background-color:rgb(65,165,210);background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));background-image:-moz-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.5),rgba(65,165,210,0.5)),-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.5),rgba(65,165,210,0.5)),-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));text-shadow:rgba(0,0,0,0.3) 1px 1px 0;color:rgb(255,255,255);}#main_menu .main-submenu li.first a,#meta_menu .meta-submenu li.first a{border-radius:3px 3px 0 0;-webkit-border-radius:3px 3px 0 0;}#main_menu .main-submenu li.last a,#meta_menu .meta-submenu li.last a{border-radius:0 0 3px 3px;-webkit-border-radius:0 0 3px 3px;}#side_bar{border-radius:0 4px 4px 0;-webkit-border-radius:0 4px 4px 0;margin:0 -100% 20px 0;padding:0 0 30px 0;float:left;display:block;height:100%;background:rgb(245,245,245);background-image:-moz-linear-gradient(top,rgb(240,240,240),rgb(255,255,255));background-image:-webkit-linear-gradient(top,rgb(245,245,245),rgb(255,255,255));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(245,245,245)),to(rgb(255,255,255)));width:199px;box-shadow:inset 2px 0 2px -1px rgba(0,0,0,0.1);-webkit-box-shadow:inset 2px 0 2px -1px rgba(0,0,0,0.1);border-left:1px solid rgb(200,200,200);}#side_bar:before{content:"";display:block;background-image:-moz-linear-gradient(top,rgba(255,255,255,0.0),rgba(255,255,255,1.0));background-image:-webkit-linear-gradient(top,rgba(255,255,255,0.0),rgba(255,255,255,1.0));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(255,255,255,0.0)),to(rgba(255,255,255,1.0)));width:199px;height:50px;position:absolute;bottom:0;left:-1px;z-index:5;}#side_bar h4{position:relative;font-family:'Open Sans',Helvetica,arial,serif;font-style:normal;font-size:20px;display:block;width:100%;height:50px;padding:14px 5px 16px 20px;line-height:20px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;color:rgb(150,150,150);text-shadow:rgb(255,255,255) 1px 1px 0;background-color:rgb(230,230,230);background-image:-moz-linear-gradient(top,rgb(230,230,230),rgb(240,240,240),rgb(230,230,230));background-image:-webkit-linear-gradient(top,rgb(230,230,230),rgb(240,240,240),rgb(230,230,230));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(230,230,230)),color-stop(rgb(240,240,240)),to(rgb(230,230,230)));border-top-right-radius:4px;border-bottom:1px solid rgb(235,235,235);box-shadow:0 1px 2px 0 rgba(0,0,0,0.3),-1px 0 0 0 rgba(255,255,255,0.9);-webkit-box-shadow:0 1px 2px 0 rgba(0,0,0,0.3),-1px 0 0 0 rgba(255,255,255,0.9);z-index:2;}#side_bar ul{list-style:none;margin-bottom:40px;}#side_bar ul li a{display:block;width:100%;color:rgb(120,120,120);font-size:12px;padding:12px 10px 13px 30px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;border-bottom:1px solid rgb(230,230,230);}#side_bar ul li a:hover{background-color:rgb(230,230,230);color:rgb(90,90,90);text-shadow:rgba(255,255,255,0.9) 1px 1px 0;border-bottom:1px solid rgb(200,200,200);box-shadow:0 -1px 0 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 -1px 0 0 rgba(0,0,0,0.1);}#side_bar ul li.active a{background-color:rgb(65,165,210);background-image:-moz-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.5),rgba(65,165,210,0.5)),-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.5),rgba(65,165,210,0.5)),-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(20,100,140,0.1)),color-stop(rgba(5,165,210,0.5)),to(rgba(65,165,210,0.5))),-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));text-shadow:rgba(0,0,0,0.3) 1px 1px 0;color:rgb(255,255,255);border-bottom:1px solid rgba(0,0,0,0.5);box-shadow:inset 2px 0 2px -1px rgba(0,0,0,0.3),inset 0 2px 0 -1px rgba(0,0,0,0.2),-1px 0 0 0 rgba(0,0,0,0.5),1px 0 0 0 rgb(45,145,190);-webkit-box-shadow:inset 2px 0 2px -1px rgba(0,0,0,0.3),inset 0 2px 0 -1px rgba(0,0,0,0.2),-1px 0 0 0 rgba(0,0,0,0.5),1px 0 0 0 rgb(45,145,190);}#main_menu .main-submenu li.seperator,#meta_menu .meta-submenu li.seperator,#system_switch li.seperator{height:0;width:100%;padding:0;border:none;float:left;border-top:1px solid rgb(225,225,225);}#sitemap,#sitemap .menu{float:left;}#sitemap{font-size:10px;color:rgb(125,125,125);text-shadow:rgba(255,255,255,0.5) 1px 1px 0;width:100%;background-color:rgb(210,210,210);background-image:-moz-linear-gradient(top,rgb(220,220,220),rgb(200,200,200));background-image:-webkit-linear-gradient(top,rgb(220,220,220),rgb(200,200,200));background-image:-webkit-gradient(linear,left top,left bottom,from(rgb(220,220,220)),to(rgb(200,200,200)));border-radius:4px;-webkit-border-radius:4px;margin:10px 0 15px 0;box-shadow:0 1px 3px rgba(0,0,0,0.4),inset 0 1px 0 0 rgba(255,255,255,0.5),inset 0 -1px 0 0 rgba(255,255,255,0.1);-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.4),inset 0 1px 0 0 rgba(255,255,255,0.5),inset 0 -1px 0 0 rgba(255,255,255,0.1);}#sitemap .menu{height:100%;background-color:transparent;}#sitemap a:hover{position:relative;text-decoration:underline;}#sitemap li li a:hover:before{content:"•";font-size:140%;line-height:90%;left:-10px;position:absolute;text-decoration:none;}#sitemap ul{list-style:none;}#sitemap .menu li{padding:3px 7px;font-weight:normal;}#sitemap .menu > li{float:left;font-weight:bold;padding:15px 20px 15px 25px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}#sitemap .menu > li:before{content:"";display:block;width:1px;height:100%;min-height:100px;position:absolute;left:5px;top:3px;z-index:5;background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(150,150,150,0.0)),color-stop(10%,rgba(150,150,150,0.5)),to(rgba(150,150,150,0.0)));background-image:-moz-linear-gradient(top,rgba(150,150,150,0.0),rgba(150,150,150,0.5) 10%,rgba(150,150,150,0.0) );background-image:-webkit-linear-gradient(top,rgba(150,150,150,0.0),rgba(150,150,150,0.5) 10%,rgba(150,150,150,0.0));}#sitemap .menu > li.first:before{display:none;}#sitemap h4{display:none;float:left;padding:15px;color:rgb(175,175,175);}#menu_11 li.first a{color:rgba(0,0,0,0.6);text-shadow:rgba(255,255,255,0.2) 1px 1px 0;position:absolute;top:50%;height:10px;margin-top:-20px;background-color:rgb(65,165,210);background-image:-moz-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.3),rgba(65,165,210,0.4)),-moz-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.3),rgba(65,165,210,0.4)),-webkit-linear-gradient(top,rgb(65,165,210),rgb(30,110,150));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(20,100,140,0.1)),color-stop(rgba(5,165,210,0.3)),to(rgba(65,165,210,0.4))),-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));display:inline-block;padding:10px 10px;margin-left:10px;border-radius:4px;-webkit-border-radius:4px;border:1px solid rgba(0,0,0,0.3);box-shadow:0 0 0 1px rgba(255,255,255,0.3),0 1px 0 0 rgba(255,255,255,1.0),inset 0 1px 0 0 rgba(255,255,255,0.3),inset 0 -1px 0 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 0 1px rgba(255,255,255,0.3),0 1px 0 0 rgba(255,255,255,1.0),inset 0 1px 0 0 rgba(255,255,255,0.3),inset 0 -1px 0 0 rgba(0,0,0,0.1);}#menu_11 li.first a:hover{text-decoration:none;background-color:rgb(45,145,190);background-image:-moz-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.3),rgba(65,165,210,0.4)),-moz-linear-gradient(top,rgb(45,145,190),rgb(10,90,130));background-image:-webkit-linear-gradient(left,rgba(20,100,140,0.1),rgba(65,165,210,0.3),rgba(65,165,210,0.4)),-webkit-linear-gradient(top,rgb(45,145,190),rgb(10,90,130));background-image:-webkit-gradient(linear,left top,left bottom,from(rgba(20,100,140,0.1)),color-stop(rgba(5,165,210,0.3)),to(rgba(65,165,210,0.4))),-webkit-gradient(linear,left top,left bottom,from(rgb(65,165,210)),to(rgb(30,110,150)));}#footer{float:left;width:100%;padding-bottom:20px;font-size:11px;color:rgb(125,125,125);}#footer_menu{list-style:none;float:left;}#footer_menu li{float:left;padding:0 5px;}#copyright{float:right;padding:0 5px;}.icons a:before{content:"";display:block;float:left;height:16px;width:16px;z-index:15;}.logout a:before{margin:-1px 6px 2px -4px;background-image:url('http://isbb.org/isbb/media/layout/formandsystem_icons.png');background-position:-240px -32px;opacity:0.85;}.logout:hover a:before{background-position:-240px -48px;opacity:0.8;}.logout a{width:7px;height:13px;overflow:hidden;}