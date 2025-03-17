<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/index.php');
//     return;
// }

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual main">
    <div class="vis-con">
        <img src="/theme/basic/img/main_vis_logo.png" alt="신성이엔지 비주얼 로고">
        <p>신성이엔지의 우수한 기술력을 만나보세요.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="main">
    <h2 class="hidden">본문 영역</h2>
    <!-- 공사실적 영역 시작 -->
    <section class="main-sec1">
        <h3 class="hidden">공사실적</h3>
        <div class="wrap">
            <div class="txt-area">
                <dl>
                    <dt>우수한 제품과 기술력을 제공합니다.</dt>
                    <dd>
                        <span>신성이엔지만의 높은 품질의 제품과 기술력으로</span>
                        <span>더욱 높은 고객만족을 만들어냅니다.</span>
                    </dd>
                </dl>
                <a href="/bbs/board.php?bo_table=performance" class="btn">VIEW MORE +</a>
            </div>
            <div class="img-area">
                <div class="swiper-container">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <img src="/theme/basic/img/main_performance1.jpg" alt="공사실적 이미지1">
                        </li>
                        <li class="swiper-slide">
                            <img src="/theme/basic/img/main_performance2.jpg" alt="공사실적 이미지2">
                        </li>
                        <li class="swiper-slide">
                            <img src="/theme/basic/img/main_performance3.jpg" alt="공사실적 이미지3">
                        </li>
                    </ul>
                </div>
                <!-- Add Arrows -->
                <a href="#" class="swiper-button-prev arrow"></a>
                <a href="#" class="swiper-button-next arrow"></a>

                <!-- 페이징 -->
	            <div class="swiper-pagination"></div>
            </div>
            <div class="mo-wrap">
                <a href="/bbs/board.php?bo_table=performance" class="btn">VIEW MORE +</a>
            </div>
        </div>
    </section>
    <!-- 공사실적 영역 끝 -->
    <!-- 성장률 영역 시작 -->
    <section class="main-sec2">
        <h3 class="hidden">성장률</h3>
        <div class="wrap">
            <p class="slogan-area">
                <span>신성이엔지는</span>
                <span>꾸준히 성장하고있습니다.</span>
            </p>
            <div class="grow-rate-list">
                <dl>
                    <dt>함께해온 시간</dt>
                    <dd class="year-val"><span>0</span>년</dd>
                </dl>
                <dl>
                    <dt>2019년대비 매출 상승률</dt>
                    <dd class="sales-val"><span>0</span>%</dd>
                </dl>
                <dl>
                    <dt>진행해온 프로젝트</dt>
                    <dd class="project-val"><span>0</span>건 이상</dd>
                </dl>
            </div>
        </div>
    </section>
    <!-- 성장률 영역 끝 -->
    <!-- 인증서 영역 시작 -->
    <section class="main-sec3">
        <h3>인증서</h3>
        <!-- <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서1.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서2.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서3.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서4.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서5.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서6.png" alt="">
                </li>
                <li class="swiper-slide">
                    <img src="/theme/basic/img/인증서7.png" alt="">
                </li>
            </ul>
        </div> -->
    </section>
    <!-- 인증서 영역 끝 -->
    <!-- 사업영역 시작 -->
    <section class="main-sec4">
        <h3 class="hidden">사업영역</h3>
        <div class="wrap">
            <div class="slogan-area">
                <p>전기공사의 혁신</p>
                <p>신성이엔지의 전문 서비스를 만나보세요.</p>
            </div>
        </div>
        <div class="swiper-container">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">01</span>원격감시제어</dt>
                            <dd>
                                원격감시제어(Remote Monitoring and Control, RMC)는 물리적 위치에 관계없이 원거리에서 
                                시스템이나 장비의 상태를 감시하고 제어할 수 있는 기술을 말합니다. 
                                이 기술은 여러 분야에서 활용되며, 특히 산업, 가정 자동화, 교통, 보안, 에너지 관리 등에서 널리 사용됩니다.
                            </dd>
                        </dl>
                        <a href="/business/remote_monitoring.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img2.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">02</span>공장자동화시스템</dt>
                            <dd>
                                공장자동화시스템(Factory Automation System, FAS)은 제조업체가 생산 공정을 자동화하여 효율성을 높이고, 
                                품질을 개선하며, 인건비를 절감하는 시스템입니다. 이러한 시스템은 다양한 기술과 장비를 통합하여 
                                생산 과정을 모니터링하고 제어합니다. 공장자동화시스템은 생산성과 품질을 극대화하고, 인적 오류를 최소화하며, 
                                운영의 일관성을 보장하는 데 핵심적인 역할을 합니다.
                            </dd>
                        </dl>
                        <a href="/business/factory_automation.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img3.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">03</span>전동기 제어반</dt>
                            <dd>
                                전동기 제어반(Motor Control Panel, MCP)은 전동기와 관련된 장비 및 시스템의 작동을 제어하고 
                                모니터링하는 장비입니다. 이 제어반은 전동기의 시작, 정지, 속도 조절, 방향 전환 등을 관리하며, 
                                전동기 시스템의 안전성과 효율성을 유지하는 데 중요한 역할을 합니다.
                            </dd>
                        </dl>
                        <a href="/business/motor_control.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img4.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">04</span>수배전반</dt>
                            <dd>
                                수배전반(Substation Panel)은 전력 시스템의 전력을 분배하고 관리하는 장치로, 
                                전력의 안정적이고 효율적인 공급을 보장하는 데 중요한 역할을 합니다. 
                                수배전반은 일반적으로 전력 시스템의 중간 지점에 위치하여 전력을 여러 회로로 나누어 공급하며, 
                                보호, 제어, 모니터링 기능을 제공합니다.
                            </dd>
                        </dl>
                        <a href="/business/substation.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img5.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">05</span>전기공사</dt>
                            <dd>
                                전기공사(Electrical Construction)는 전기 설비를 설치, 유지보수, 
                                그리고 수정하는 작업을 포함하는 건설 분야입니다. 이 작업은 주로 전기 시스템을 구축하고 운영하기 위해 
                                필요한 모든 작업을 포함하며, 상업, 산업, 주거, 공공 건물 등 다양한 장소에서 수행됩니다. 
                                전기공사는 전력의 안전하고 효율적인 공급과 사용을 보장하는 데 핵심적인 역할을 합니다.
                            </dd>
                        </dl>
                        <a href="/business/electrical_construction.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
                <li class="swiper-slide">
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img6.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">06</span>직접생산업체</dt>
                            <dd>
                                직접생산업체는 중소기업청에서 인증한 중소기업으로, 특정 제품이나 서비스를 직접 생산하거나 
                                제공하는 기업을 의미합니다. 이러한 업체들은 자사 내에서 생산 공정을 관리하며, 
                                품질과 신뢰성을 최우선으로 삼아 경쟁력을 확보하고 있습니다.
                            </dd>
                        </dl>
                        <a href="/business/direct_production.php" class="btn white">VIEW MORE +</a>
                    </div>
                </li>
            </ul>
            <!-- 페이징 -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- <section class="main-sec4-extra">
        <h3 class="hidden">사업영역</h3>
        <div class="sticky-wrap">
            <div class="wrap">
                <div class="slogan-area">
                    <p>전기공사의 혁신</p>
                    <p>신성이엔지의 전문 서비스를 만나보세요.</p>
                </div>
            </div>
            <ul class="sticky-list" style="transform: translateX(0);">
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">01</span>원격감시제어</dt>
                            <dd>
                                원격감시제어(Remote Monitoring and Control, RMC)는 물리적 위치에 관계없이 원거리에서 
                                시스템이나 장비의 상태를 감시하고 제어할 수 있는 기술을 말합니다. 
                                이 기술은 여러 분야에서 활용되며, 특히 산업, 가정 자동화, 교통, 보안, 에너지 관리 등에서 널리 사용됩니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">02</span>공장자동화시스템</dt>
                            <dd>
                                공장자동화시스템(Factory Automation System, FAS)은 제조업체가 생산 공정을 자동화하여 효율성을 높이고, 
                                품질을 개선하며, 인건비를 절감하는 시스템입니다. 이러한 시스템은 다양한 기술과 장비를 통합하여 
                                생산 과정을 모니터링하고 제어합니다. 공장자동화시스템은 생산성과 품질을 극대화하고, 인적 오류를 최소화하며, 
                                운영의 일관성을 보장하는 데 핵심적인 역할을 합니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">03</span>전동기 제어반</dt>
                            <dd>
                                전동기 제어반(Motor Control Panel, MCP)은 전동기와 관련된 장비 및 시스템의 작동을 제어하고 
                                모니터링하는 장비입니다. 이 제어반은 전동기의 시작, 정지, 속도 조절, 방향 전환 등을 관리하며, 
                                전동기 시스템의 안전성과 효율성을 유지하는 데 중요한 역할을 합니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">04</span>수배전반</dt>
                            <dd>
                                수배전반(Substation Panel)은 전력 시스템의 전력을 분배하고 관리하는 장치로, 
                                전력의 안정적이고 효율적인 공급을 보장하는 데 중요한 역할을 합니다. 
                                수배전반은 일반적으로 전력 시스템의 중간 지점에 위치하여 전력을 여러 회로로 나누어 공급하며, 
                                보호, 제어, 모니터링 기능을 제공합니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">05</span>전기공사</dt>
                            <dd>
                                전기공사(Electrical Construction)는 전기 설비를 설치, 유지보수, 
                                그리고 수정하는 작업을 포함하는 건설 분야입니다. 이 작업은 주로 전기 시스템을 구축하고 운영하기 위해 
                                필요한 모든 작업을 포함하며, 상업, 산업, 주거, 공공 건물 등 다양한 장소에서 수행됩니다. 
                                전기공사는 전력의 안전하고 효율적인 공급과 사용을 보장하는 데 핵심적인 역할을 합니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
                <li>
                    <div class="img-area">
                        <img src="/theme/basic/img/main_sec4_img1.jpg" alt="">
                    </div>
                    <div class="txt-area">
                        <dl>
                            <dt><span class="list-num">06</span>직접생산업체</dt>
                            <dd>
                                직접생산업체는 중소기업청에서 인증한 중소기업으로, 특정 제품이나 서비스를 직접 생산하거나 
                                제공하는 기업을 의미합니다. 이러한 업체들은 자사 내에서 생산 공정을 관리하며, 
                                품질과 신뢰성을 최우선으로 삼아 경쟁력을 확보하고 있습니다.
                            </dd>
                        </dl>
                        <button type="button" class="btn white">VIEW MORE +</button>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->
    <!-- 사업영역 끝 -->
    <!-- 로고 영역 시작 -->
    <section class="main-sec5">
        <h3 class="hidden">롤링 배너</h3>
        <div class="slide-track">
            <ul class="logo-slide slide1">
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
            </ul>
        </div>
        <div class="slide-track">
            <ul class="logo-slide slide2">
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
            </ul>
        </div>
        <div class="slide-track">
            <ul class="logo-slide slide3">
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
                <li>shinsung eng coporation</li>
            </ul>
        </div>
    </section>
    <!-- 로고 영역 끝 -->
    <!-- 견적문의 영역 시작 -->
    <section class="main-sec6">
        <h3 class="hidden">견적문의</h3>
        <div class="slogan-area">
            <span>지속적인 연구 개발을 통해</span>
            <span>변화하는 산업 환경에 발맞추어 나가며,</span>
            <span>고객의 번영에 기여하는 신성이엔지가 되겠습니다.</span>
            <!-- <button type="button" class="btn white">견적 문의</button> -->
            <a href=<?php if($is_admin) echo "/bbs/board.php?bo_table=inquiry"; else echo "/bbs/write.php?bo_table=inquiry"; ?> class="btn white">견적 문의</a>
        </div>
    </section>
    <!-- 견적문의 영역 끝 -->
</article>
<script src="/theme/basic/js/main.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.php');