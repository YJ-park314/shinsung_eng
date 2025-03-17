<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>

<article id="main" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section class="main-sec1">
        <h3 class="hidden">공사실적</h3>
        <div class="wrap">
            
        </div>
    </section>
    <section class="main-sec2">
        <h3 class="hidden">성장률</h3>
        <div class="wrap">
            성장률
            <p>임시 링크</p>
            <ul>
                <li><a href="/introduce/history.php">History</a></li>
            </ul>
        </div>
    </section>
    <section class="main-sec3">
        <h3 class="hidden">인증서</h3>
        <div class="wrap">
            인증서
        </div>
    </section>
    <section class="main-sec4">
        <h3 class="hidden">사업영역</h3>
        <div class="wrap">
            사업영역
        </div>
    </section>
    <section class="main-sec5">
        <h3 class="hidden">롤링 배너</h3>
        <div class="wrap">
            롤링 배너
        </div>
    </section>
    <section class="main-sec6">
        <h3 class="hidden">견적문의</h3>
        <div class="wrap">
            견적문의
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');