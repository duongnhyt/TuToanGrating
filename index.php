<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Tú Toàn Grating</title>
        <link href='https://fonts.googleapis.com/css?family=Judson:400,400italic,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'/>
        <!--<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css' />-->
        <link href="css/styles.css" rel="stylesheet" type="text/css" />

        <!--<link rel="stylesheet" href="./css/main.css" type="text/css">-->
        <script src="./js/jquery-2.1.1.min.js"></script>
        <!--<script language="javascript" src="./js/jquery.js"></script>-->
        <script type="text/javascript">


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
                        });

                $('#btn_doctiep').click(function ()
                {
                    if ($('#btn_doctiep').val() === "Đọc tiếp ...") {
                        $(".tin-tuc").css('height', 'auto');
                        $("#noi-dung-tin").css('height', 'auto');
                        $("#noi-dung-tin").css('margin-bottom', '50px');
                        $('#btn_doctiep').attr('value', "Thu gọn ...");
                    }
                    else {
                        if ($('#btn_doctiep').val() === "Thu gọn ...") {
                            $(".tin-tuc").css('height', '150px');
                            $("#noi-dung-tin").css('height', 'auto');
                            $("#noi-dung-tin").css('margin-bottom', '0px');
                            $('#btn_doctiep').attr('value', "Đọc tiếp ...");
                        }
                    }


                })
            });

        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="logo">Tú Toàn Grating</div>
            <div class="menu">
                <ul>
                    <li><a href="#" class="active">Trang chủ</a></li>
                    <li><a href="Views/FrontEnd/sanpham_view.php">Sản phẩm</a></li>
                    <li><a href="Views/FrontEnd/tamsangrating_view.php">Tấm sàn Grating</a></li>
                    <li><a href="Views/FrontEnd/thangcapmangdien_view.php">Thang máng cáp điện</a></li>
                    <li><a href="Views/FrontEnd/lienhe_view.php">Liên hệ</a></li>
                </ul>
            </div>
            <div class="header">
                <h1>Công ty Cổ phần Cơ khí Xây dựng và Thương mại Tú Toàn Grating</h1>
                <h2>Giới thiệu</h2>
<!--                <center>-->
                <div class="tin-tuc" >
                    <div class="noi-dung-tin" id="noi-ung-tin">
                        <p style="margin-top:11.25pt;margin-right:0mm;margin-bottom:
                           11.25pt;margin-left:0mm;text-align:justify;text-indent:36.0pt;line-height:13.5pt">Công ty TNHH C&#417; Khí Xây D&#7921;ng và
                            Th&#432;&#417;ng M&#7841;i Tú Toàn thành l&#7853;p ngày tháng n&#259;m.
                            Tú Toàn grating &#273;i &#273;&#7847;u trong l&#297;nh v&#7921;c s&#7843;n
                            xu&#7845;t và ch&#7871; t&#7841;o<b> t&#7845;m sàn grating</b>.&nbsp;<b>Sàn
                                grating</b>&nbsp;&#273;&#432;&#7907;c ch&#7871; t&#7841;o t&#7915; các lá thép
                            có &#273;&#7897; dày t&#7915; 2 - 12mm, chi&#7873;u cao t&#7915; 20 - 150mm,&nbsp;<b>grating</b>&nbsp;&#273;&#432;&#7907;c
                            liên k&#7871;t v&#7899;i nhau d&#432;&#7899;i hình th&#7913;c cài r&#259;ng
                            l&#432;&#7907;c ho&#7863;c gi&#7857;ng b&#7857;ng thép xo&#7855;n. S&#7843;n
                            ph&#7849;m<b> grating</b>&nbsp;&#273;&#432;&#7907;c m&#7841; k&#7869;m nhúng
                            nóng nên có th&#7875; ch&#7883;u &#273;&#432;&#7907;c s&#7921; &#259;n mòn
                            &#273;i&#7879;n phân, hóa h&#7885;c trong môi tr&#432;&#7901;ng &#7849;m
                            &#432;&#7899;t.&nbsp;<b>T&#7845;m sàn grating</b>&nbsp;&#273;&#432;&#7907;c
                            dùng trong các nhà máy ch&#7871; bi&#7871;n h&#7843;i s&#7843;n, ch&#7871;
                            bi&#7871;n l&#432;&#417;ng th&#7921;c, th&#7921;c ph&#7849;m, nhà máy ch&#7871;
                            bi&#7871;n th&#7913;c &#259;n gia súc,&nbsp;<b>sàn grating&nbsp;</b>m&#432;&#417;ng
                            thoát n&#432;&#7899;c, n&#7855;p h&#7889; ga, b&#7853;c c&#7847;u thang, ...
                            trong các khu công nghi&#7879;p</p>

                        <p  style="margin-top:11.25pt;margin-right:0mm;margin-bottom:
                            11.25pt;margin-left:0mm;text-align:justify;text-indent:36.0pt;line-height:13.5pt">V&#7899;i thâm niên 12 n&#259;m ho&#7841;t
                            &#273;&#7897;ng trong ngành s&#7843;n xu&#7845;t và ch&#7871; t&#7841;o&nbsp;<b>t&#7845;m
                                sàn grating</b>&nbsp;các lo&#7841;i. Tú Toàn &#273;ã tr&#7903; thành
                            &#273;&#7883;a ch&#7881; tin c&#7853;y cho khách hàng trong l&#297;nh v&#7921;c
                            s&#7843;n xu&#7845;t và cung c&#7845;p&nbsp;<b>t&#7845;m sàn grating</b>. Sàn
                            thép<b> grating</b>&nbsp;(Steel&nbsp;<b>grating</b>),&nbsp;<b>t&#7845;m sàn
                                grating</b>&nbsp;ch&#7889;ng tr&#432;&#7907;t (Anti-slip steel<b>grating</b>),&nbsp;<b>t&#7845;m
                                sàn grating</b>&nbsp;thép n&#7863;ng (Heavy steel&nbsp;<b>grating</b>),
                            b&#7853;c c&#7847;u thang (stair tread),<b>&nbsp;thang máng cáp &#273;i&#7879;n</b>,&nbsp;<b>sàn
                                grating</b>&nbsp;m&#432;&#417;ng thoát n&#432;&#7899;c (Trench cover),
                            n&#7855;p h&#7889; ga, …</p>

                        <p  style="margin-top:11.25pt;margin-right:0mm;margin-bottom:
                            11.25pt;margin-left:0mm;text-align:justify;text-indent:36.0pt;line-height:13.5pt"><b>* L&#297;nh v&#7921;c kinh doanh:</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>S&#7843;n xu&#7845;t ch&#7871; t&#7841;o&nbsp;<b>t&#7845;m
                                sàn grating</b>&nbsp;trên dây chuy&#7873;n hi&#7879;n &#273;&#7841;i.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>Thang máng cáp &#273;i&#7879;n.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>V&#7887; t&#7911; &#273;i&#7879;n, v&#7887;
                            t&#7911; PCCC.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>Gia công l&#7855;p d&#7921;ng k&#7871;t
                            c&#7845;u thép.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>Sàn thao tác,&nbsp;<b>t&#7845;m sàn grating</b>.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>C&#7889;p pha thép.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>L&#432;&#7899;i thép hàn xây d&#7921;ng.</p>

                        <p  style='margin-top:11.25pt;margin-right:0mm;margin-bottom:
                            11.25pt;margin-left:0mm;text-align:justify;text-indent:36.0pt;line-height:13.5pt'><b>* N&#259;ng l&#7921;c s&#7843;n xu&#7845;t :</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>Công ty Tú Toàn có th&#7875; s&#7843;n
                            xu&#7845;t và ch&#7871; t&#7841;o&nbsp;t&#7845;m sàn grating &#273;áp &#7913;ng
                            theo nhu c&#7847;u c&#7911;a khách hàng v&#7873; m&#7851;u mã, kích
                            th&#432;&#7899;c các lo&#7841;i&nbsp;t&#7845;m sàn grating.</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:12.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>S&#7843;n xu&#7845;t và ch&#7871;&nbsp;t&#7841;o
                            t&#7845;m sàn grating,&nbsp;thang máng cáp &#273;i&#7879;n, l&#432;&#7899;i
                            thép, c&#7889;p pha thép, ... v&#7899;i ch&#7845;t l&#432;&#7907;ng cao
                            m&#7851;u m&#7869; &#273;&#7865;p, ch&#7911;ng lo&#7841;i &#273;a d&#7841;ng.</p>

                        <p  style='margin-top:11.25pt;margin-right:0mm;margin-bottom:
                            11.25pt;margin-left:0mm;text-align:justify;text-indent:36.0pt;line-height:13.5pt'><b>* D&#7883;ch v&#7909; bán hàng :</p>

                        <p  style='mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
                            margin-left:70.9pt;text-align:justify;text-indent:-18.0pt;line-height:15.3pt;
                            mso-list:l3 level1 lfo5'><![if !supportLists]><span style='font-size:10.0pt;
                                                     mso-bidi-font-size:9.0pt;font-family:Wingdings;mso-fareast-font-family:Wingdings;
                                                     mso-bidi-font-family:Wingdings;'><span style='mso-list:Ignore'>ü<span
                                        style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span><![endif]>V&#7853;n chuy&#7875;n và giao hàng
                            &#273;&#7871;n t&#7853;n n&#417;i các công trình, các khu công nghi&#7879;p.
                            H&#432;&#7899;ng d&#7851;n s&#7917; d&#7909;ng t&#7841;i ch&#7895; và các
                            d&#7883;ch v&#7909; ch&#259;m sóc khách hàng chu &#273;áo.</p>
                        
                        <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt'><span
                                style='font-size:12.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                "Times New Roman";;mso-no-proof:yes'><![if !vml]><img src="images/san grating.jpg" alt=""/><![endif]></span><span
                                style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                "Times New Roman";'><o:p></o:p></span></p>

                        <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt'><span
                                style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                "Times New Roman";'>&nbsp;<o:p></o:p></span></p>

                        <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt;
                            mso-outline-level:3'><b><i><span style='font-size:11.5pt;font-family:"Arial",sans-serif;
                                      mso-fareast-font-family:"Times New Roman";color:firebrick'>Tú Toàn
                                        Grating -&nbsp;</span></i></b><b><i><span style='font-size:11.5pt;font-family:
                                                                      "Arial",sans-serif;mso-fareast-font-family:"Times New Roman";color:navy'>Uy
                                        tín, ch&#7845;t l&#432;&#7907;ng, giá thành h&#7907;p lý!</span></i></b><b><span
                                    style='font-size:11.5pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                    "Times New Roman";'><o:p></o:p></span></b></p>

                        <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt'><b><span
                                    style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                    "Times New Roman";'>&#272;&#7883;a ch&#7881;:</span></b><span
                                style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                "Times New Roman";'>&nbsp;</span><b><span style='font-size:9.0pt;
                                                    font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                    color:navy'>Vân Tra - An &#272;&#7891;ng - An D&#432;&#417;ng - H&#7843;i
                                    Phòng.</span></b><span style='font-size:9.0pt;font-family:"Arial",sans-serif;
                                                   mso-fareast-font-family:"Times New Roman";'><o:p></o:p></span></p>

                        <p  align=center style='text-align:center'><b><span
                                    style='font-size:9.0pt;line-height:107%;font-family:"Arial",sans-serif;
                                    mso-fareast-font-family:"Times New Roman";'>&#272;i&#7879;n
                                    tho&#7841;i:&nbsp;</span></b><b><span style='font-size:9.0pt;line-height:107%;
                                    font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                                          color:firebrick'>031. 3770578</span></b><b><span style='font-size:9.0pt;
                                line-height:107%;font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                              '>&nbsp;&nbsp; Fax:&nbsp;</span></b><b><span style='font-size:
                                9.0pt;line-height:107%;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                                                             "Times New Roman";color:firebrick'>0973. 668.955 - 0914.668.955</span></b></p>

                    </div>
                    <div class="doc-tiep" ><input id="btn_doctiep" type="button" value="Đọc tiếp ..."/></div>
                </div>


                <!--</center>-->
                <div class="header-button"><a href="#">Sản phẩm nổi bật</a> </div>
            </div>
            <div class="banner-container">

                <div id='wrapper'>
                    <div class="banner-top"></div>
                    <div id='header'></div>
                    <div id='body'>
                        <div id="bigPic">
                            <!--<img src="./images/SlideShow/1.jpg" alt="" />-->
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
                <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt;
                            mso-outline-level:3'><b><i><span style='font-size:11.5pt;font-family:"Arial",sans-serif;
                                      mso-fareast-font-family:"Times New Roman";color:firebrick'>Tú Toàn
                                        Grating -&nbsp;</span></i></b><b><i><span style='font-size:11.5pt;font-family:
                                                                      "Arial",sans-serif;mso-fareast-font-family:"Times New Roman";color:navy'>Uy
                                        tín, ch&#7845;t l&#432;&#7907;ng, giá thành h&#7907;p lý!</span></i></b><b><span
                                    style='font-size:11.5pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                    "Times New Roman";'><o:p></o:p></span></b></p>

                        <p  align=center style='margin-top:11.25pt;margin-right:0mm;
                            margin-bottom:11.25pt;margin-left:0mm;text-align:center;line-height:13.5pt'><b><span
                                    style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                    "Times New Roman";'>&#272;&#7883;a ch&#7881;:</span></b><span
                                style='font-size:9.0pt;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                "Times New Roman";'>&nbsp;</span><b><span style='font-size:9.0pt;
                                                    font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                    color:navy'>Vân Tra - An &#272;&#7891;ng - An D&#432;&#417;ng - H&#7843;i
                                    Phòng.</span></b><span style='font-size:9.0pt;font-family:"Arial",sans-serif;
                                                   mso-fareast-font-family:"Times New Roman";'><o:p></o:p></span></p>

                        <p  align=center style='text-align:center'><b><span
                                    style='font-size:9.0pt;line-height:107%;font-family:"Arial",sans-serif;
                                    mso-fareast-font-family:"Times New Roman";'>&#272;i&#7879;n
                                    tho&#7841;i:&nbsp;</span></b><b><span style='font-size:9.0pt;line-height:107%;
                                    font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                                          color:firebrick'>031. 3770578</span></b><b><span style='font-size:9.0pt;
                                line-height:107%;font-family:"Arial",sans-serif;mso-fareast-font-family:"Times New Roman";
                                                              '>&nbsp;&nbsp; Fax:&nbsp;</span></b><b><span style='font-size:
                                9.0pt;line-height:107%;font-family:"Arial",sans-serif;mso-fareast-font-family:
                                                                             "Times New Roman";color:firebrick'>0973. 668.955 - 0914.668.955</span></b></p>
                <div class="copy-rights">                    
                    Copyright (c) Tú Toàn Grating. Design by <a href="http://fit.nuce.edu.vn/new/bo-mon-cong-nghe-phan-mem/nguyen-hai-duong-105" style="text-decoration: none; color: #33ffff;">ThS. Nguyễn Hải Dương - GV ĐHXD</a>
                    <br>
                        
                </div>
                
                <div style="text-align:center; margin: auto; margin-top: 60px; margin-bottom: 20px;">
                    <a href="" style="text-decoration: none;"> Quản trị</a>
                </div>
            </div>
        </div>
    </body>
</html>
