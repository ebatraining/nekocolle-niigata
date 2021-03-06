<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- InstanceBeginEditable name="doctitle" -->
<title>アクセス - ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->
    
<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/access.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="./css/drawer.css">
<!-- InstanceEndEditable -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js/jquery.jrumble.1.3.min.js"></script>
<!-- InstanceBeginEditable name="js" -->
<!-- InstanceEndEditable -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script><script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<script src="./js/iscroll.js"></script>
<script src="./js/drawer.min.js"></script>
<script>
    $(document).ready(function() {
    $(".drawer").drawer();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#logo,#logo_sp,.footer_sns_icon img').jrumble();
        $('#menu_welcome').jrumble();

        $('#logo,#logo_sp,.footer_sns_icon img').hover(function(){
        $(this).trigger('startRumble');
        }, function(){
            $(this).trigger('stopRumble');
        });

    $("#menu_toggle").click(function () {
          $(this).toggleClass("toggle_close");
    $("#menu_list ul").toggle();
    });

    $('#menu_list ul li a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
            $(this).parent('li').addClass('current');
        } else {
            $(this).parent('li').removeClass('current');
        }
    });
    });
</script>
<!-- InstanceBeginEditable name="jsScript" -->
<!-- InstanceEndEditable -->
</head>
<body class="drawer drawer--right">

    <div id="wrapper">

        <?php include (dirname(__FILE__).'/common/header.html'); ?><!-----------header----------->

        <div id="contents">
            <!-- InstanceBeginEditable name="contents" -->

            <h2 id="page_title">
                <img src="images/access/access_title.png" alt="アクセス" class="w_full" />
            </h2>
            <h2 id="page_title_sp">
                <img src="images/access/access_title_sp.png" alt="アクセス" class="w_full" />
            </h2>

        <div id="access" class="p_20 white_paper">
            <h3 id="access_logo" class="access_title mt_0 mb_20">
                <img src="images/access/access_logo.png" alt="ねこコレ 新潟市役所前店" />
            </h3>

            <div id="address_block">
                <h4 id="address_title" class="access_title mt_0">
                    <span class="dot_line_1 mb_10"><span class="icon">住所</span></span>
                </h4>
                <div class="mb_10">
                新潟県新潟市中央区東中通り1番町86－15<br />
                関本ビル3階&nbsp;<a id="access_map_link" href="https://www.google.co.jp/maps/place/%E3%81%AD%E3%81%93%E3%82%B3%E3%83%AC%E6%96%B0%E6%BD%9F%E5%B8%82%E5%BD%B9%E6%89%80%E5%89%8D%E5%BA%97/@37.91742,139.037612,17z/data=!4m3!3m2!1s0x5ff4c9e9f85a74e9:0xc65779686024f831!4b1">MAP</a>
                </div>
                <div class="caution">
                    <p>※1Fがお花屋さん、2Fがカフェになっています</p>
                </div>
            </div><!-- #address_block -->

            <div id="access_appearance">
                <img src="images/access/appearance.png" alt="ねこコレ 外観" class="w_full" />
            </div>

            <div class="clear"></div>

            <div id="access_block" class="mb_20">

                <h4 id="access_title" class="access_title mt_0">
                    <span class="dot_line_2 mb_10"><span class="icon">交通アクセス</span></span>
                </h4>

                <![if !IE]>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3147.5568339119504!2d139.037612!3d37.91742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4c9e9f85a74e9%3A0xc65779686024f831!2z44Gt44GT44Kz44Os5paw5r2f5biC5b255omA5YmN5bqX!5e0!3m2!1sja!2sjp!4v1492568627632" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <![endif]>
                <!--[if gt IE 7]>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3147.5568339119504!2d139.037612!3d37.91742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4c9e9f85a74e9%3A0xc65779686024f831!2z44Gt44GT44Kz44Os5paw5r2f5biC5b255omA5YmN5bqX!5e0!3m2!1sja!2sjp!4v1492568627632" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <![endif]-->

                <ul>
                    <li>「新潟市役所前」バス停から徒歩7分</li>
                    <li>「白山駅」から徒歩20分</li>
                    <li>提携駐車場 無し（近隣に有料駐車場有り）</li>
                </ul>

            </div><!-- #access_block -->

            <div id="tel_block" class="mb_20">

                <div id="tel_pict">
                    <img src="images/access/access_pict_1.png" alt="" class="w_full" />
                </div>

            	<h4 id="tel_title" class="access_title mt_0">
                    <span class="dot_line_3 mb_10"><span class="icon">電話番号</span></span>
                </h4>

                080-1844-1446
                <div class="caution">
                	<p>※電話での対応はOPEN～19:30となりますのでご了承ください</p>
                </div>

                <div class="clear"></div>

            </div><!-- #tel_block -->

            <div id="working_block">

                <div id="working_pict">
                    <img src="images/access/access_pict_2.png" alt="" class="w_full" />
                </div>

                <h4 id="working_title" class="access_title mt_0">
                    <span class="dot_line_4 mb_10"><span class="icon">営業時間・休業日</span></span>
                </h4>

                <ul>
                    <li>月～金<br />11:00～20:00(最終受付 19:30)</li>
                    <li>土・日・祝日<br />10:00～20:00(最終受付 19:30)</li>
                </ul>

              	<div class="caution">
                    <p>※基本的には毎日営業いたします（年始はお休み、不定休)</p>
                    <p>※緊急の際は、営業時間が前後する場合がございます</p>
                </div>

                <div class="clear"></div>

            </div><!-- #working_block -->

        </div><!-- #access -->

        <!-- InstanceEndEditable -->
        </div><!-- #contents -->
        <div class="clear"></div>
    </div><!-- #wrapper -->
    <footer id="footer">
        <div id="footer_inner" class="footer_wrapper pb_10">
            <address id="footer_contact">
                <strong>ねこコレ新潟市役所前店</strong>
                <p id="footer_address">新潟市中央区東中通り1番町86-15</p>
                <p>関本ビル3F</p>
                <p id="footer_tel">080-1844-1446</p>
                <p id="footer_holiday">定休日&nbsp;不定休</p>
                <p id="footer_parking">駐車場&nbsp;無し</p>
            </address><!-- #footer_contact -->
        </div>
    <div id="footer_sns">
        <div id="footer_sns_inner"  class="footer_wrapper">
            <div id="footer_sns_inner_2">
                    <div id="footer_sns_message">
                        <img src="images/footer/sns_message.gif" alt="クーポンや日々の写真はこちらから♪" />
                    </div><!-- #footer_sns_message -->
                <div id="footer_tw" class="footer_sns_icon">
                    <a href="https://twitter.com/nekocolleN"><img src="images/footer/twitter_icon.png"></a>
                </div>
                <div id="footer_fb" class="footer_sns_icon">
                    <a href="https://www.facebook.com/nekocolleN/">
                        <img src="images/footer/facebook_icon.png">
                    </a>
                </div>
                <div id="footer_ig" class="footer_sns_icon">
                    <a href="http://instagram.com/nekocolle_niigata">
                        <img src="images/footer/instagram_icon.png">
                    </a>
                </div>

                <div class="clear"></div>
            </div><!-- #footer_sns_inner -->
        </div>
    </div><!-- #footer_sns -->

    <div id="footer_copy">
        <div class="footer_wrapper">
            Copyright &copy;2017 ねこコレ 新潟市役所前店 <br />All Rights Reserved.
        </div>
    </div>
    </footer><!-- #footer -->
</body>
<!-- InstanceEnd --></html>
