<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- InstanceBeginEditable name="doctitle" -->
<title>料金表 - ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/price.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="./css/drawer.css">
<!-- InstanceEndEditable -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="js/jquery.jrumble.1.3.min.js"></script>
<script src="./js/iscroll.js"></script>
<script src="./js/drawer.min.js"></script>
<script>
    $(document).ready(function() {
    $(".drawer").drawer();
    });
    </script>
    <!-- InstanceBeginEditable name="js" -->
    <!-- InstanceEndEditable -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <![endif]-->
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
            <img src="images/price/price_title.png" alt="料金表" class="w_full" />
        </h2>
        <h2 id="page_title_sp">
            <img src="images/price/price_title_sp.png" alt="料金表" class="w_full" />
        </h2>

        <div id="normal" class="plan mb_20 brown_dot">
        	<div id="normal_inner" class="plan_inner">

            	<h3 id="normal_title" class="plan_title"><img src="images/price/normal_title.png" alt="通常料金(お一人様)" class="w_full" /></h3>

                <div id="normal_list" class="plan_list_block">

                    <ul class="price_list">
                        <li><span>15分&nbsp;400円</span></li>
                        <li><span>30分&nbsp;600円</span></li>
                        <li><span>45分&nbsp;800円</span></li>
                        <li><span>60分&nbsp;10,00円</span></li>
                    </ul>

                    <div class="clear"></div>

                	以降15分毎に＋200円

                </div>

                <img src="images/price/normal_pict.png" alt="" id="normal_pict" />

            </div><!-- #normal_inner -->
        </div><!-- #normal -->

		<div id="weekday" class="plan mb_20 brown_dot">
        	<div id="weekday_inner" class="plan_inner">

            	<h3 id="weekday_title" class="plan_title"><img src="images/price/weekday_title.png" alt="平日限定コース(お一人様)" class="w_full" /></h3>

                <div id="weekday_list" class="plan_list_block">

                    <dl class="price_d_list">
                        <dt><span>2時間&nbsp;1,000円</span></dt>
                        <dd><span>(最終受付&nbsp;17:00)</span></dd>
                        <dt><span>3時間&nbsp;1,500円</span></dt>
                        <dd><span>(最終受付&nbsp;16:00)</span></dd>
                        <dt><span>4時間&nbsp;2,000円</span></dt>
                        <dd><span>(最終受付&nbsp;15:00)</span></dd>
                    </dl>

                    <div class="clear"></div>

                </div>

                <img src="images/price/weekday_pict.png" alt="" id="weekday_pict" />

        	</div><!-- #weekday_inner -->
        </div><!-- #weekday -->

		<div id="kids" class="plan mb_20 brown_dot">
        	<div id="kids_inner" class="plan_inner">

            	<h3 id="kids_title" class="plan_title"><img src="images/price/kids_title.png" alt="小学校6年生以下のお子様へ(H28,4,1からリニューアル）" class="w_full" /></h3>

                <div id="kids_list">
                    <dl class="price_d_list">
                        <dt><span>対象年齢</span></dt>
                        <dd><span>小学校6年生(12歳)まで</span></dd>
                        <dt><span>サービス内容</span></dt>
                        <dd>
                            <ul>
                                <li>通常コース(15分コースを除く)のご利用で20%オフ</li>
                                <li>ねこのカリカリゴハン1袋付</li>
                            </ul>
                        </dd>
                    </dl>
                </div><!-- #kids_list -->

                <div id="kids_pict">
                	<img src="images/price/kids_pict_1.png" alt="" />
                </div>

                <div class="clear"></div>

                <div class="caution">
                	<p>※必ず保護者様とご一緒に入室してください</p>
                    <p>
                    	※乳幼児もコチラのコースでのご案内になります
                    </p>
                    <p>
                    	※お子様のご利用時間は保護者様と同コース・同時間となります<br />
                    	(ご利用時間が一緒でも別々のコースはご利用いただけません)
                    </p>
                    <p>
                    	※平日限定コース・各種クーポン・15分コース・メンバーズ割引との併用はできません
                    </p>
                </div>


        	</div><!-- #kids_inner -->
        </div><!-- #kids -->

        <div id="meal" class="item mb_20">
        	<h3 id="meal_title" class="item_title">
            	<img src="images/price/meal_title.png" alt="ねこのカリカリゴハン" class="w_full" />
            </h3>
        	<h3 id="meal_title_sp" class="item_title_sp">
            	<img src="images/price/meal_title_sp.png" alt="ねこのカリカリゴハン" class="w_full" />
            </h3>

            <ul class="price_list">
            	<li><span>1袋&nbsp;100円</span></li>
            </ul>

            <h4 id="meal_change_title" class="item_title">
            	<img src="images/price/meal_change.png" alt="ねこおやつ販売変更について" class="w_full" />
            </h4>
            <h4 id="meal_change_title_sp" class="item_title_sp">
            	<img src="images/price/meal_change_sp.png" alt="ねこおやつ販売変更について" class="w_full" />
            </h4>

            今までの『ねこおやつ（大・小）』の販売は終了し、『ねこのカリカリゴハン』と名称変更いたしました。<br />
			中身に大きな変更はございませんが、今までの「小」よりも多く、「大」よりも少ない量での販売となります。<br />
			価格は今までの「小」と同じ100円（税込）です。

        </div><!-- #meal -->

        <div id="juice" class="item mb_20">

        	<h3 id="juice_title" class="item_title">
            	<img src="images/price/juice_title.png" alt="缶ジュース" class="w_full" />
            </h3>
            <h3 id="juice_title_sp" class="item_title_sp">
            	<img src="images/price/juice_title_sp.png" alt="缶ジュース" class="w_full" />
            </h3>

        	<ul class="price_list">
            	<li class="juice_l"><span>コーラ</span></li>
                <li><span>Qoo(アップル・オレンジ)</span></li>
                <li class="juice_l"><span>爽健美茶</span></li>
                <li><span>ジョージアオリジナルコーヒー</span></li>
            </ul>
       		<p id="juice_price">各種&nbsp;100円</p>

            <img src="images/price/juice_service.png" alt="" id="juice_service" class="w_full" />
            <img src="images/price/juice_service_sp.png" alt="" id="juice_service_sp" class="w_full" />


        </div><!-- #juice -->

        <div id="food" class="pt_20 caution">
            <p>※当店での飲食物の販売は行なっておりません</p>
            <p>※飲料水の持ち込みは可能ですが、フタができるものでお願いいたします</p>
            <p>※食べ物に関してはねこのいる部屋に持ち込まないようお願いします</p>
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
