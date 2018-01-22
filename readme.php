<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta NAME="ROBOTS" CONTENT="NOINDEX,NOFOLLOW,NOARCHIVE">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>初めての方へ - ねこコレ 新潟市役所前店</title>
<!-- InstanceEndEditable -->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon.ico">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- InstanceBeginEditable name="css" -->
<link href="css/readme.css" rel="stylesheet" type="text/css" media="all" />
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
<!-- InstanceEndEditable -->
</head>
<body class="drawer drawer--right">

    <div id="wrapper">

        <?php include (dirname(__FILE__).'/common/header.html'); ?><!-----------header----------->

        <div id="contents">
            <!-- InstanceBeginEditable name="contents" -->

            <h2 id="page_title">
                <img src="images/readme/readme_title.png" alt="初めての方へ" class="w_full" />
            </h2>
            <h2 id="page_title_sp">
                <img src="images/readme/readme_title_sp.png" alt="初めての方へ" class="w_full" />
            </h2>
        <div id="promise" class="mb_20">

            <div id="promise_title_block">

                <h3 id="promise_title"><img src="images/readme/promise_title.png" alt="page_title僕たちとのお約束" /></h3>
                <h3 id="promise_title_sp"> <img src="images/readme/promise_title_sp.png" alt="僕たちとのお約束" /></h3>
            </div><!-- #promise_title_block -->
            <div id="promise_list_block">
                <div id="promise_list_block_inner">
                    <div id="promise_list_block_inner_2">
                    	<div id="promise_list_block_inner_3">
                            <ul>
                                <li>ねこたちの抱っこはご遠慮ください</li>
                                <li>写真撮影の際はフラッシュをお切りください</li>
                                <li>万が一店内でお怪我・お召し物の汚れ等があった場合、責任を負いかねます</li>
                                <li>周りのお客様の迷惑となる場合、退室をお願いすることがございます。</li>
                                <li>飲酒をしてのご来店はお断りいたします</li>
                            </ul>
                            <div id="promis_message_block">
                                <img src="images/readme/promise_message.gif" alt="約束ごとを守っていただき、人も猫も幸せな空間になるようご協力お願い申し上げます" />
                            </div>
                    	</div><!-- #promise_list_block_inner_3 -->
                    </div><!-- #promise_list_block_inner_2 -->
                </div><!-- #promise_list_block_inner -->
            </div><!-- #promise_list_block -->
        </div><!-- #promise -->
        <div id="cloth" class="mb_20">
            <img src="images/readme/cloth.png" alt="" id="cloth_pict" />
                お帰りの際にコロコロをご準備しております。<br />
                どうぞご利用ください。<br />
                万が一に備え、「汚れてはいけない・毛をつけたくない」大切な衣服を着てくることはオススメできません。
            <div class="clear"></div>
        </div><!-- #cloth -->
        <div id="regist_no">
            <div id="regist_no_title_block">
                <h3 id="regist_no_title"><img src="images/readme/regist_no_title.png" alt="動物取扱番号" /></h3>
            </div>
            <dl id="regist_no_list">
                <dt><span>登録番号</span></dt>
                <dd id="regist_no_list_no" class="dot_line_1"><span>新動セ（動）第16-05-007号</span></dd>
            	<dt><span>登録年月日</span></dt>
                <dd id="regist_no_list_dt" class="dot_line_2"><span>平成28年6月30日</span></dd>
                <dt><span>有効期限</span></dt>
                <dd id="regist_no_list_remit" class="dot_line_3"><span>平成33年6月29日</span></dd>
                <dt><span>動物取扱業の種別</span></dt>
                <dd id="regist_no_list_kind" class="dot_line_4"><span>展示</span></dd>
                <dt><span>取扱責任者</span></dt>
                <dd id="regist_no_list_leadar"><span>池田寛明</span></dd>
            </dl>
        </div><!-- #regist_no -->
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
                    <a href="https://www.facebook.com/nekocolleN/"> <img src="images/footer/facebook_icon.png"></a>
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
