<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/way.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<article id="way" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3>찾아오시는 길</h3>
        <div class="wrap">
            <p class="slogan">신성이엔지는 열과 성을 다하여 귀사의 번영에 일조하겠습니다.</p>
            <ul class="addr-area">
                <li class="addr">
                    <a href="https://www.google.com/maps/dir//%EC%B6%A9%EC%B2%AD%EB%82%A8%EB%8F%84+%EB%8B%B9%EC%A7%84%EC%8B%9C+%EC%96%91%EC%A7%80%EB%A7%90%EA%B8%B8+8-15/data=!4m8!4m7!1m0!1m5!1m1!1s0x357af8e955bf7065:0x8abb225ed3e4c6ad!2m2!1d126.6364781!2d36.8773159?entry=ttu&g_ep=EgoyMDI0MTAwOC4wIKXMDSoASAFQAw%3D%3D" target="blank">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>충남 당진시 대덕동 양지말길 8-15</span>
                    </a>
                </li>
                <li>
                    <strong>대표전화</strong><span>041-354-1237</span>
                </li>
            </ul>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.544507211451!2d126.6339031764072!3d36.87732016334763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357af8e955bf7065%3A0x8abb225ed3e4c6ad!2z7Lap7LKt64Ko64-EIOuLueynhOyLnCDslpHsp4Drp5DquLggOC0xNQ!5e0!3m2!1sko!2skr!4v1728547061257!5m2!1sko!2skr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');