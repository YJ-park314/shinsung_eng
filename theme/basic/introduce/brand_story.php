<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/introduce/brand_story.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual brand-story">
    <div class="vis-con">
        <p class="subtitle">BRAND STORY</p>
        <p>브랜드 스토리입니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="brandStory">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3 class="hidden">Brand Story</h3>
        <div class="wrap">
            <dl class="title-info">
                <dt><strong>주식회사 신성이엔지</strong>는</dt>
                <dd>
                    자동제어반, 계장제어장치, 전동기 제어반, 원격 감시제어시스템, 빌딩제어시스템,
                    수배전반, 분전반 등 전기공사 분야에서 풍부한 경험을 가진 직접 생산 업체입니다.
                </dd>
            </dl>
            <ul class="img-txt-list">
                <li><img src="/theme/basic/img/brand_story_img1.jpg" alt="브랜드 스토리 이미지1"></li>
                <li><img src="/theme/basic/img/brand_story_img2.jpg" alt="브랜드 스토리 이미지2"></li>
                <li>
                    <span>
                        <strong>PLC와 HMI 고기능화에 적합한 프로그램</strong>을 접목하여
                        <strong>산업현장의 고기능화와 생산성 향상</strong>을 실현하고자 합니다. 
                        당사는 <strong>우수한 제품과 기술력</strong>으로 고객의 만족을 이끌어내며, 산업현장
                        기술인들과 협력하여 타사보다 높은 품질의 제품을 제공하기 위해 노력하고 있습니다.
                        <strong>지속적인 연구 개발</strong>을 통해 변화하는 산업 환경에 발맞추어 나가며, 
                        고객의 번영에 기여하는 신성이엔지가 되겠습니다.
                    </span>
                </li>
            </ul>
            <div class="graph-area">
                <p>전년대비 매출 성장률 그래프</p>
                <img src="/theme/basic/img/brand_story_graph.png" alt="매출 그래프 이미지">
            </div>
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');