<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/business/direct_production.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual direct-production">
    <div class="vis-con">
        <p class="subtitle">농공단지 직접생산</p>
        <p>품질과 신뢰성을 최우선으로 서비스를 제공합니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="directProduction">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3 class="hidden">농공단지 직접생산</h3>
        <div class="wrap">
            <div class="short-info">
                <p><span class="color-point">직접생산업체</span>는 중소기업청에서 인증한 중소기업으로, 특정 제품이나 서비스를 <span class="color-point">직접 생산</span>하거나 <span class="color-point">제공</span>하는 기업을 의미합니다.</p>
                <p>이러한 업체들은 자사 내에서 생산 공정을 관리하며, <span class="color-point">품질</span>과 <span class="color-point">신뢰성</span>을 최우선으로 삼아 경쟁력을 확보하고 있습니다.</p>
            </div>
            <ul class="main-info-list">
                <li>
                    <span class="info-title">품질 보장</span>
                    <dl>
                        <dt>체계적 품질 관리</dt>
                        <dd>
                            <span>직접생산업체는 내부 생산 시스템을 통해 품질 관리를 철저히 수행합니다.</span>
                            <span>이는 소비자가 믿고 구매할 수 있는 제품의 일관된 품질을 보장합니다.</span>
                        </dd>
                        <dt>공식 인증</dt>
                        <dd>중소기업청의 인증을 통해 신뢰성을 강화하며, 소비자는 인증된 제품을 통해 높은 품질을 경험할 수 있습니다.</dd>
                    </dl>
                </li>
                <li>
                    <span class="info-title">신뢰성</span>
                    <dl>
                        <dt>정부 인증 시스템</dt>
                        <dd>직접생산업체는 엄격한 심사를 통해 인증을 받으므로, 소비자는 해당 업체의 신뢰성을 자연스럽게 확보하게 됩니다.</dd>
                        <dt>투명한 운영 구조</dt>
                        <dd>중소기업청의 기준을 준수함으로써, 기업 운영의 투명성을 높이고 소비자와의 신뢰를 구축합니다.</dd>
                    </dl>
                </li>
                <li>
                    <span class="info-title">지역 경제 기여</span>
                    <dl>
                        <dt>사회적 책임</dt>
                        <dd>많은 직접생산업체는 지역 사회에 뿌리를 두고 운영되며, 제품 소비는 지역 경제의 활성화에 기여합니다.</dd>
                    </dl>
                </li>
                <li>
                    <span class="info-title">다양한 제품 선택</span>
                    <dl>
                        <dt>차별화된 제품 라인업</dt>
                        <dd>직접생산업체는 고객의 개별적인 취향과 필요를 반영하여 독창적이고 다양한 제품을 제공합니다.</dd>
                        <dt>고객 중심의 서비스</dt>
                        <dd>고객 피드백을 즉각적으로 반영하여 제품과 서비스를 지속적으로 개선할 수 있는 유연성을 지니고 있습니다.</dd>
                    </dl>
                </li>
                <li>
                    <span class="info-title">지속 가능한 소비</span>
                    <dl>
                        <dt>환경적 책임</dt>
                        <dd>직접생산업체는 친환경적인 생산 방식을 채택하여 지속 가능한 소비를 지향합니다.</dd>
                        <dt>지역 순환 경제</dt>
                        <dd>지역에서 생산된 제품의 소비를 통해 물류 비용을 절감하고, 탄소 발자국을 줄이는 데 기여합니다.</dd>
                    </dl>
                </li>
            </ul>
            <div class="card-con-wrap">
                <p class="title">신성이엔지를 이용해야하는 이유</p>
                <ul class="card-con-list">
                    <li class="color2">
                        <span>신뢰할 수 있는 제품 선택</span>
                        <span>정부 인증을 통해 품질과 신뢰성을 확보한 제품을 제공받을 수 있습니다.</span>
                    </li>
                    <li class="color3">
                        <span>지역 사회와의 연결 강화</span>
                        <span>소비자는 직접생산업체의 제품을 선택함으로써 지역 경제에 긍정적인 영향을 미치고, 지역 사회의 발전에 기여합니다.</span>
                    </li>
                    <li class="color4">
                        <span>품질과 혁신</span>
                        <span>신성이엔지는 혁신적인 아이디어와 고객의 다양한 요구를 반영하여 제품을 개발하고, 독창적이고 매력적인 제품을 제공합니다.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');