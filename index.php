<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="./css/drawer.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js/jquery.jrumble.1.3.min.js"></script>
<!-- InstanceBeginEditable name="js" -->
<!-- InstanceEndEditable -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/css3-mediaqueries.js"></script>
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
    });


    $(function(){
        $('#menu_toggle ul li a').each(function(){
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
<script>
    $(window).on('load resize', function(){
        $(".link_block_inner").each(function(i, elem) {
            $(elem).css("height", $(elem).parent().parent().height() - 20 + "px");
        });
    });

</script>
<!-- InstanceEndEditable -->
</head>
<body class="drawer drawer--right">

    <div id="wrapper">

        <?php include (dirname(__FILE__).'/common/header.html'); ?><!-----------header----------->
        <div id="contents">
        <!-- InstanceBeginEditable name="contents" -->

        <img src="images/top/main.jpg" alt="ねこと一緒に癒しのひととき" id="main_visual" class="mb_20 w_full" />


            <div id="main_desc" class="mb_20">

                <div id="main_desc_text">
                    新潟県内初の猫と遊べるお店。<br />
                    16匹の個性豊かな猫たちが皆様のお越しをお待ちしております。<br />
                    15分からコースがあるので、学校・仕事帰りなど気軽にお立ち寄りくださいませ。
                </div>

                <div id="main_desc_pict">
                    <img src="images/top/desc_pict.png" alt="" />
                </div>

                <div id="main_desc_pict_sp">
                    <img src="images/top/desc_pict_sp.png" alt="" />
                </div>
                <div class="clear"></div>
            </div><!-- #main_desc -->
        <div id="link" class="mb_20">
            <div id="link_readme" class="link_block">
                <img src="images/top/readme_dummy.gif" alt="初めての方へ" class="w_full link_title" />
                <div class="brown_dot link_block_dot">
                    <div class="p_10">
                        <div class="link_block_inner">
                        </div>
                    </div>
                </div>
                <a href="readme.php">
                <img src="images/top/readme.png" alt="初めての方へ" class="w_full link_title" />
                </a>
            </div>

            <div id="link_price" class="link_block">
            <img src="images/top/price_dummy.gif" alt="料金表" id="price_dummy" class="w_full link_title" />
            <img src="images/top/price_dummy_sp.gif" alt="料金表" id="price_dummy_sp" class="w_full link_title" />
                <div class="brown_dot link_block_dot">
                    <div class="p_10">
                        <div class="link_block_inner">
                        </div>
                    </div>
                </div>
                <a href="price.php">
                    <img src="images/top/price.png" alt="料金表" id="price_pict" class="w_full link_title" />
                    <img src="images/top/price_sp.png" alt="料金表" id="price_pict_sp" class="w_full link_title" />
                </a>
            </div>

            <div class="clear"></div>

        </div><!-- #link -->


         <div id="youtube">

            <h2 id="youtube_title" class="mb_10">
                <img src="images/top/youtube_title.png" alt="ねこスタッフ紹介ムービー" class="w_full" />
            </h2>
            <h2 id="youtube_title_sp" class="mb_10">
                <img src="images/top/youtube_title_sp.png" alt="ねこスタッフ紹介ムービー" class="w_full" />
            </h2>

            <div id="youtube_text">
                youtubeにもチャンネルがございます。<br />
                右の動画以外にもありますのでぜひチェックしてみてください。(PCで再生される方、広告が表示されます)<br />
                チャンネル登録&amp;高評価よろしくお願いします。<br />
                ※Internet Explorerをお使いの方は、動画の閲覧は9以上でお願いいたします。
            </div>

            <div id="youtube_movie">
                <div id="youtube_movie_inner">
                <![if !IE]>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/f7VxChkQdxM" frameborder="0" allowfullscreen></iframe>
                <![endif]>
            <!--[if gt IE 8]>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/f7VxChkQdxM" frameborder="0" allowfullscreen></iframe>
            <![endif]-->
            <!--[if lte IE 8]>
            <a href="https://www.youtube.com/watch?v=f7VxChkQdxM">
            <img src="images/top/youtube.jpg" alt="ねこスタッフ紹介ムービー" class="w_full" />
            </a>
            <![endif]-->
                </div>
            </div>

            <div class="clear"></div>
        </div>

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
                   <a href="https://www.facebook.com/nekocolleN/"><img src="images/footer/facebook_icon.png"></a>
                </div>
                <div id="footer_ig" class="footer_sns_icon">
                    <a href="http://instagram.com/nekocolle_niigata"><img src="images/footer/instagram_icon.png"></a>
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
