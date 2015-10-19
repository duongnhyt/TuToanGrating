<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Tú Toàn Grating</title>
        <link href='https://fonts.googleapis.com/css?family=Judson:400,400italic,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'/>
        <!--<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css' />-->
        <link href="../../css/styles.css" rel="stylesheet" type="text/css" />

        <!--<link rel="stylesheet" href="./css/main.css" type="text/css">-->
        <script src="../../js/jquery-2.1.1.min.js"></script>
        <!--<script language="javascript" src="./js/jquery.js"></script>-->
<!--        <script type="text/javascript">
            var currentImage;
            var currentIndex = -1;
            var interval;
            function showImage(index) {
                if (index < $('#bigPic img').length) {
                    var indexImage = $('#bigPic img')[index]
                    if (currentImage) {
                        if (currentImage != indexImage) {
                            $(currentImage).css('z-index', 2);
                            clearTimeout(myTimer);
                            $(currentImage).fadeOut(250, function () {
                                myTimer = setTimeout("showNext()", 3000);
                                $(this).css({'display': 'none', 'z-index': 1})
                            });
                        }
                    }
                    $(indexImage).css({'display': 'block', 'opacity': 1});
                    currentImage = indexImage;
                    currentIndex = index;
                    $('#thumbs li').removeClass('active');
                    $($('#thumbs li')[index]).addClass('active');
                }
            }

            function showNext() {
                var len = $('#bigPic img').length;
                var next = currentIndex < (len - 1) ? currentIndex + 1 : 0;
                showImage(next);
            }

            var myTimer;

            $(document).ready(function () {
                myTimer = setTimeout("showNext()", 3000);
                showNext(); //loads first image
                $('#thumbs li').bind('click', function (e) {
                    var count = $(this).attr('rel');
                    showImage(parseInt(count) - 1);
                });

                $('#bigPic').hover(
                        function ()
                        {
                            clearTimeout(myTimer);
                        },
                        function ()
                        {
                            myTimer = setTimeout("showNext()", 3000);
                            showNext();
                        })
            });

//                $(document).ready(function () {
//
//                    $('.banner-middle img:gt(0)').hide();
//                    setInterval(function () {
//                        $('.banner-middle :first-child').fadeOut()
//                                .next('img').fadeIn()
//                                .end().appendTo('.banner-middle');
//                    },
//                            1000);
//
//                })
        </script>-->
    </head>
    <body>
        <div class="wrapper">
            <div class="logo">Tú Toàn Grating</div>
            <div class="menu">
                <ul>
                    <li><a href="../../index.php" >Trang chủ</a></li>
                    <li><a href="sanpham_view.php" >Sản phẩm</a></li>
                    <li><a href="tamsangrating_view.php" class="active">Tấm sàn Grating</a></li>
                    <li><a href="thangcapmangdien_view.php">Thang máng cáp điện</a></li>
                    <li><a href="lienhe_view.php" >Liên hệ</a></li>
                </ul>
            </div>
            <div class="header">
                <h1>Công ty Cổ phần Cơ khí Xây dựng và Thương mại Tú Toàn Grating</h1>
                <h2>Tấm sàn Grating </h2>
                <div class="header-button"><a href="#">Sản phẩm nổi bật</a> </div>
            </div>
            <div class="banner-container">
                <div id='wrapper'>
                    <div class="banner-top"></div>
                    <div id='header'></div>
                    <div id='body'>
                        <div id="bigPic">
                            <img src="images/BigPic/12167018_517913078384758_571706247_n.jpg" alt=""/>
                            <img src="images/BigPic/12167557_517913068384759_2066824853_n.jpg" alt=""/>                            
                            <img src="images/BigPic/12167615_517913075051425_2016102299_n.jpg" alt=""/>
                            <img src="images/BigPic/12167740_517913065051426_2078457957_n.jpg" alt=""/>
                        </div>

                        <div class="banner-bottom"></div>
                        <div align="center">
                            <ul id="thumbs">
                                <li class='active' rel='1'><img src="images/icon/1.jpg" alt=""/></li>                                
                                <li rel='2'><img src="images/icon/2.jpg" alt=""/></li>                                
                                <li rel='3'><img src="images/icon/3.jpg" alt=""/></li>                                
                                <li rel='4'><img src="images/icon/4.jpg" alt=""/></li>
                            </ul>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                    <div id='push'></div>
                </div>

            </div>
        </div>
        
        <div class="footer">
            <div class="wrapper">
                <div class="copy-rights">
                    Copyright (c) Tú Toàn Grating. Design by <a href="http://fit.nuce.edu.vn/new/bo-mon-cong-nghe-phan-mem/nguyen-hai-duong-105" style="text-decoration: none; color: #33ffff;">ThS. Nguyễn Hải Dương - GV ĐHXD</a>
                    <br>
                        <a href="">Đăng nhập</a>
                </div>
            </div>
        </div>
    </body>
</html>
