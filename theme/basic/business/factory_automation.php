<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/business/factory_automation.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual factory-automation">
    <div class="vis-con">
        <p class="subtitle">공장자동화시스템</p>
        <p>제조업의 경쟁력을 높이고, 시장 요구에 신속하게 대응할 수 있는 중요한 기술로 자리 잡고 있습니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="factoryAutomation">
    <h2 class="hidden">본문 영역</h2>
    <section class="no-pd-top">
        <h3 class="hidden">공장자동화시스템</h3>
        <ul class="tabs">
            <li class="active"><h4><a href="#">주요 구성 요소</a></h4></li>
            <li><h4><a href="#">주요 기능 및 장점</a></h4></li>
        </ul>
        <div class="wrap">
            <div class="short-info">
                <p><span class="color-point">공장자동화시스템(Factory Automation System, FAS)</span>은 제조업체가 생산 공정을 자동화하여 <span class="color-point">효율성</span>을 높이고, <span class="color-point">품질을 개선</span>하며, <span class="color-point">인건비를 절감</span>하는 시스템입니다.</p>
                <p>이러한 시스템은 다양한 기술과 장비를 통합하여 생산 과정을 모니터링하고 제어합니다.</p>
                <p>공장자동화시스템은 <span class="color-point">생산성과 품질을 극대화</span>하고, <span class="color-point">인적 오류를 최소화</span>하며, <span class="color-point">운영의 일관성</span>을 보장하는 데 핵심적인 역할을 합니다.</p>
            </div>
            <ul class="tab-con-list">
                <li class="active">
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">주요 구성 요소</span>
                            <dl>
                                <dt>제어 시스템 - PLC(Programmable Logic Controller)</dt>
                                <dd>공장 자동화에서 가장 중요한 장치로, 다양한 입력 신호를 처리하고, 장비나 기계의 작동을 제어합니다.</dd>
                                <dt>제어 시스템 - DCS(Distributed Control System)</dt>
                                <dd>공장 전체의 생산 공정을 분산된 제어 시스템으로 관리하며, 대규모 공장이나 복잡한 공정에 적합합니다.</dd>
                                <dt>제어 시스템 - SCADA(Supervisory Control and Data Acquisition)</dt>
                                <dd>공장 전체의 상태를 모니터링하고 제어하는 시스템으로, 원거리 제어와 데이터 수집을 담당합니다.</dd>
                                <dt>센서(Sensors)</dt>
                                <dd>다양한 물리적 변수(온도, 압력, 습도, 위치 등)를 측정하여 제어 시스템에 데이터를 제공합니다.</dd>
                                <dt>액추에이터(Actuators)</dt>
                                <dd>
                                    <span>제어 시스템의 명령에 따라 기계적 동작을 수행하는 장치입니다.</span>
                                    <span>예를 들어, 모터, 밸브, 서보 드라이브 등이 있습니다.</span>
                                </dd>
                                <dt>인공지능 및 머신러닝(AI & Machine Learning)</dt>
                                <dd>
                                    <span>데이터 분석 및 예측 유지보수, 품질 검사를 자동화하는 데 활용됩니다.</span>
                                    <span>AI는 생산 공정을 최적화하고, 결함을 미리 감지하는 데 도움을 줍니다.</span>
                                </dd>
                                <dt>인터페이스 및 시각화(User Interfaces & Visualization)</dt>
                                <dd>
                                    <span>작업자와 제어 시스템 간의 상호작용을 돕는 화면 및 소프트웨어입니다.</span>
                                    <span>HMI(Human-Machine Interface)는 작업자가 공정 상태를 모니터링하고 조작할 수 있도록 합니다.</span>
                                </dd>
                                <dt>통신 네트워크(Communication Networks)</dt>
                                <dd>
                                    <span>다양한 자동화 장비와 시스템 간의 데이터 전송을 위한 네트워크입니다.</span>
                                    <span>이더넷, 필드버스, 무선 통신 등이 사용됩니다.</span>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">주요 기능</span>
                            <dl>
                                <dt>자동화 및 제어</dt>
                                <dd>기계 및 장비의 작동을 자동으로 제어하여 생산 공정을 효율적으로 관리합니다.</dd>
                                <dt>실시간 모니터링</dt>
                                <dd>생산 공정의 상태를 실시간으로 감시하여 문제를 조기에 발견하고 대응할 수 있습니다.</dd>
                                <dt>데이터 수집 및 분석</dt>
                                <dd>생산 데이터, 품질 데이터 등을 수집하고 분석하여 공정 개선과 예측 유지보수를 지원합니다.</dd>
                                <dt>품질 관리</dt>
                                <dd>제품의 품질을 자동으로 검사하고, 불량품을 식별하여 생산 품질을 유지합니다.</dd>
                                <dt>에너지 관리</dt>
                                <dd>에너지 사용을 모니터링하고, 에너지 효율을 최적화하여 비용을 절감합니다.</dd>
                                <dt>예측 유지보수</dt>
                                <dd>장비의 상태를 분석하여 고장이 발생하기 전에 유지보수를 계획하고 수행합니다.</dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="card-con-wrap">
                        <p class="title">주요 장점</p>
                        <ul class="card-con-list">
                            <li class="color1">
                                <span>생산성 향상</span>
                                <span>자동화된 공정으로 생산 속도와 효율성을 높입니다.</span>
                            </li>
                            <li class="color2">
                                <span>비용 절감</span>
                                <span>인건비를 절감하고, 자원 낭비를 줄입니다.</span>
                            </li>
                            <li class="color3">
                                <span>품질 일관성</span>
                                <span>자동화된 검사와 제어로 제품 품질을 일정하게 유지합니다.</span>
                            </li>
                            <li class="color4">
                                <span>안전성 향상</span>
                                <span>위험한 작업을 자동화하여 작업자의 안전을 보장합니다.</span>
                            </li>
                            <li class="color5">
                                <span>유연성</span>
                                <span>다양한 제품을 빠르게 전환할 수 있는 능력을 제공합니다.</span>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');