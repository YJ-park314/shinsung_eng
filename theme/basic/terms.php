<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/terms.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<article id="terms" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3>이용약관</h3>
        <div class="wrap">
            본문내용
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');