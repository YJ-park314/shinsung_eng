<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/head.php');
//     return;
// }

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<script src="/js/swiper/swiper.min.js"></script>
<link rel="stylesheet" href="/js/swiper/swiper.min.css">
<link rel="stylesheet" href="/theme/basic/css/custom.css">

<!-- 상단 시작 { -->
<header id="header">
    <div class="wrap">
        <h1>
            <a href="/">
                <span class="hidden">(주)신성이엔지</span>
            </a>
        </h1>
        <a href="#" class="ham-menu">
            <span></span>
        </a>
        <nav id="gnb">
            <h2 class="hidden">글로벌네비게이션</h2>
            <div class="gnb-inner">
                <ul class="depth1">
                    <li class="has-2dpt">
                        <h3><a href="/introduce/history.php"><span>회사소개</span><span class="show-depth2">+</span></a></h3>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li><a href="/introduce/history.php">History</a></li>
                                <li><a href="/introduce/brand_story.php">Brand story</a></li>
                                <li><a href="/introduce/certificate.php">인증서</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-2dpt">
                        <h3><a href="/business/electrical_construction.php"><span>사업영역</span><span class="show-depth2">+</span></a></h3>
                        <div class="depth2-wrap">
                            <ul class="depth2">
                                <li><a href="/business/electrical_construction.php">전기공사</a></li>
                                <li><a href="/business/remote_monitoring.php">원격감시제어</a></li>
                                <li><a href="/business/factory_automation.php">공장자동화시스템</a></li>
                                <li><a href="/business/motor_control.php">전동기제어반</a></li>
                                <li><a href="/business/substation.php">수배전반</a></li>
                                <li><a href="/business/direct_production.php">농공단지 직접생산</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <h3><a href="/bbs/board.php?bo_table=performance">공사실적</a></h3>
                    </li>
                    <li>
                        <h3><a href=<?php if($is_admin) echo "/bbs/board.php?bo_table=inquiry"; else echo "/bbs/write.php?bo_table=inquiry"; ?>>견적문의</a></h3>
                        <span></span>
                    </li>
                    <li>
                        <h3><a href="/way.php">찾아오시는 길</a></h3>
                    </li>
                </ul>
                <a href="#" class="close-gnb"><span class="bar"></span></a>
            </div>
        </nav>
    </div>
</header>
<!-- } 상단 끝 -->


<hr>



<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container">
        