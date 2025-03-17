<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/introduce/history.php');
//     return;
// }

// $g5['title'] = 'history';
include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual history">
    <div class="vis-con">
        <p class="subtitle">HISTORY</p>
        <p>신성이엔지의 회사 연혁을 소개해드립니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="history">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3 class="hidden">History</h3>
        <img src="/theme/basic/img/history_tree.svg" alt="회사 연혁 이미지" class="history-tree">
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');