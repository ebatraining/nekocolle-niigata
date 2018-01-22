<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>リンク - ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/link.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="./css/drawer.css">
<!-- InstanceEndEditable -->
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
<script>
    $(window).on('load resize', function(){

        if ($("#contents").width() >= 600) {

            var $col1 = 0;
            var $col2 = 0;
            $(".link_block").each(function(i, elem) {
                $(elem).css("position", "absolute");
                $(elem).css("width", "49%");
                $(elem).css("padding-bottom", ($("#contents").width() / 50) + "px");
                var $col = 1;
                var $min = $col1;
                if ($min > $col2) {
                    $col = 2;
                    $min = $col2;
                }
                if ($col == 1) {
                    $(elem).css("left", "0%");
                    $(elem).css("top", $col1 + "px");
                    $col1 = $col1 + $(elem).outerHeight() + 1;
                } else if ($col == 2) {
                    $(elem).css("left", "51%");
                    $(elem).css("top", $col2 + "px");
                    $col2 = $col2 + $(elem).outerHeight() + 1;
                }
            });
            $("#link").css("height", Math.max($col1, $col2) + 20 + "px");
        }
        else
        {
            $(".link_block").each(function(i, elem) {
                $(elem).css("position", "static");
                $(elem).css("width", "100%");
                $(elem).css("padding-bottom", "20px");
                $(elem).css("left", "");
                $(elem).css("top", "");
            });

            $("#link").css("height", "");
        }
    });

</script>
<!-- InstanceEndEditable -->
</head>
<body class="drawer drawer--right">

<div id="wrapper">

<?php include (dirname(__FILE__).'/common/header.html'); ?><!-----------header----------->

    <div id="contents">
    <!-- InstanceBeginEditable name="contents" -->

        <h2 id="page_title">
            <img src="images/link/link_title.png" alt="リンク" class="w_full" />
        </h2>
        <h2 id="page_title_sp">
            <img src="images/link/link_title_sp.png" alt="リンク" class="w_full" />
        </h2>

        <div id="link">
            <div class="link_block">
                <div class="link_block_inner white_paper">
                    <a href="http://uekiah333.hp.gogo.jp">
                    <img src="images/link/capture/ueki.jpg" class="w_full mb_10" alt="うえき動物病院さん" />
                    </a>
                    <div class="link_title">
                    <a href="http://uekiah333.hp.gogo.jp">
                        <strong>うえき動物病院</strong>さん
                    </a>
                    </div>

                    <div class="link_desc">
                    当店でもお世話になっております！！
                    </div>

                </div>
            </div>

          	<div class="link_block">
                <div class="link_block_inner white_paper">
                    <a href="http://ndn2001.com">
                    <img src="images/link/capture/ndn.jpg" class="w_full mb_10" alt="新潟動物ネットワークさん" />
                    </a>
                    <div class="link_title">
                        <a href="http://ndn2001.com">
                            <strong>新潟動物ネットワーク</strong>さん
                        </a>
                    </div>

                    <div class="link_desc">
                        新潟で活動している動物愛護団体さん。<br />
                        毎月里親さんの譲渡会も実施しております！！
                    </div>

                </div>
            </div>

            <div class="link_block">
                <div class="link_block_inner white_paper">
                    <a href="http://www.nekocolle.info/yamagata/">
                    <img src="images/link/capture/neko_colle_yamagata.jpg" class="w_full mb_10" alt="ねこコレ山形店" />
                    </a>
                    <div class="link_title">
                        <a href="http://www.nekocolle.info/yamagata/">
                            <strong>ねこコレ山形店</strong>
                        </a>
                    </div>

                    <div class="link_desc">
                        ねこコレの本店でもある「山形店」<br />
                        ワンちゃん・ネコちゃんのトリミングも行なっております！！
                    </div>

                </div>
            </div>

            <div class="link_block">
                <div class="link_block_inner white_paper">
                    <a href="http://www.sugawara.ac.jp/pet/">
                    <img src="images/link/capture/sendai_pet_school.jpg" class="w_full mb_10" alt="仙台総合ペット専門学校さん" />
                    </a>
                    <div class="link_title">
                        <a href="http://www.sugawara.ac.jp/pet/">
                            <strong>仙台総合ペット専門学校</strong>さん
                        </a>
                    </div>

                    <div class="link_desc">
                        店長の出身校でもある仙台総合ペット専門学校。<br />
						あらゆるジャンルの飼育動物のプロを育てる専門学校です。
                    </div>

                </div>
            </div>

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
