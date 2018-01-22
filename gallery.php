<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- InstanceBeginEditable name="doctitle" -->
<title>フォトギャラリー - ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
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
            var $col3 = 0;

            $("#gallery ul li").each(function(i, elem) {
                $(elem).css("width", "32%");
                $(elem).css("padding-bottom", ($("#contents").width() / 50) + "px");

                var $col = 1;
                var $min = $col1;
                if ($min > $col2) {
                    $col = 2;
                    $min = $col2;
                }
                if ($min > $col3) {
                    $col = 3;
                    $min = $col3;
                }

                if ($col == 1) {
                    $(elem).css("left", "0%");
                    $(elem).css("top", $col1 + "px");
                    $col1 = $col1 + $(elem).height() + 1;
                } else if ($col == 2) {
                    $(elem).css("left", "34%");
                    $(elem).css("top", $col2 + "px");
                    $col2 = $col2 + $(elem).height() + 1;
                } else {
                    $(elem).css("left", "68%");
                    $(elem).css("top", $col3 + "px");
                    $col3 = $col3 + $(elem).height() + 1;
                }
            });

            $("#gallery").css("height", Math.max($col1, $col2, $col3) + 20 + "px");
        }
        else
        {
            var $col1 = 0;
            var $col2 = 0;
            $("#gallery ul li").each(function(i, elem) {
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
                    $col1 = $col1 + $(elem).height() + 1;
                } else if ($col == 2) {
                    $(elem).css("left", "51%");
                    $(elem).css("top", $col2 + "px");
                    $col2 = $col2 + $(elem).height() + 1;
                }
            });
            $("#gallery").css("height", Math.max($col1, $col2) + 20 + "px");
        }

    });

    $(document).ready(function(){

// 画像クリックイベント
        $(".pict").click(function () {

// 画像表示用のタグの挿入
            $modal_html = "";
            $modal_html += "<div id=\"modal_bg\">";
            $modal_html += "<div id=\"modal_bg_inner\">";
            $modal_html += "<img id=\"modal_pict\" src=\"" + $(this).attr("src") + "\" alt=\"\" />";
            $modal_html += "</div>";
            $modal_html += "</div>";

            $("body").append($modal_html);


            //モーダルウィンドウを表示
            $("#modal_bg,#modal_pict").fadeIn("slow");

            modalResize();


            //モーダルウィンドウがクリックされたら閉じる
            $("#modal_bg,#modal_pict").click(function(){
                $("#modal_bg,#modal_pict").fadeOut("slow");
                $("#modal_bg,#modal_pict").remove() ;
            });

        });

            // ウィンドウリサイズイベント
        $(window).resize(modalResize);

        // 幅、高さの調整
        function modalResize(){

            var $w = $(window).width();
            var $h = $(window).height();

            var $mw = $("#modal_pict").width();
            var $mh = $("#modal_bg_inner").height();

            //取得した値をcssに追加する
            $("#modal_bg").css({
                "width" : $w + "px",
                "height" : $h + "px"
            });

            $("#modal_bg_inner").css({
                "padding-top": (($h - $mh) / 2) + "px"
            });
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
                <img src="images/gallery/gallery_title.png" alt="フォトギャラリー" class="w_full" />
            </h2>
            <h2 id="page_title_sp">
                <img src="images/gallery/gallery_title_sp.png" alt="フォトギャラリー" class="w_full" />
            </h2>

            <div id="gallery">

                <ul>
                    <li><img src="images/gallery/pict/1.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/2.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/3.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/4.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/5.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/6.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/7.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/8.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/9.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/10.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/11.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/12.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/13.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/14.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/15.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/16.jpg" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/17.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/18.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/19.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/20.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/21.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/22.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/23.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/24.png" alt="フォトギャラリー" class="w_full pict" /></li>
                    <li><img src="images/gallery/pict/25.png" alt="フォトギャラリー" class="w_full pict" /></li>
                </ul>

            </div><!-- #gallery -->

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
<!-- InstanceEnd -->
</html>
