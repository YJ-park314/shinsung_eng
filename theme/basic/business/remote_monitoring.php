<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/business/remote_monitoring.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual remote-monitoring">
    <div class="vis-con">
        <p class="subtitle">원격감시제어</p>
        <p>효율적인 운영, 비용 절감, 사고 예방 등 여러 가지 장점을 제공합니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="remoteMonitoring">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3 class="hidden">원격감시제어</h3>
        <div class="wrap">
            <div class="short-info">
                <p><span class="color-point">원격감시제어(Remote Monitoring and Control, RMC)</span>는 물리적 위치에 관계없이 원거리에서 시스템이나 장비의 상태를 감시하고 제어할 수 있는 기술을 말합니다.</p>
                <p>이 기술은 여러 분야에서 활용되며, 특히 산업, 가정 자동화, 교통, 보안, 에너지 관리 등에서 널리 사용됩니다.</p>
            </div>
            <ul class="main-info-list">
                <li>
                    <span class="info-title">주요 구성 요소</span>
                    <dl>
                        <dt>센서(Sensors)</dt>
                        <dd>
                            <span>장비나 시스템의 상태를 측정하는 장치입니다.</span>
                            <span>예를 들어, 온도, 압력, 습도, 위치 등을 감지할 수 있습니다.</span>
                        </dd>
                        <dt>통신 시스템(Communication Systems)</dt>
                        <dd>
                            <span>센서가 수집한 데이터를 중앙 시스템으로 전송하는 역할을 합니다.</span>
                            <span>일반적으로 무선 통신(Wi-Fi, Bluetooth, LTE 등)이나 유선 통신(이더넷, 직렬 포트 등)을 사용합니다.</span>
                        </dd>
                        <dt>중앙 제어 시스템(Central Control System)</dt>
                        <dd>
                            <span>수집된 데이터를 분석하고, 필요시 장비나 시스템을 제어하는 역할을 합니다.</span>
                            <span>이 시스템은 서버, 클라우드 플랫폼, 또는 로컬 컴퓨터일 수 있습니다.</span>
                        </dd>
                        <dt>제어 장치(Control Devices)</dt>
                        <dd>
                            <span>중앙 제어 시스템의 명령에 따라 장비나 시스템을 직접 조작하는 장치입니다.</span>
                            <span>예를 들어, 전원 차단, 설정 변경, 경고 발송 등을 할 수 있습니다.</span>
                        </dd>
                        <dt>사용자 인터페이스(User Interface)</dt>
                        <dd>
                            <span>사용자가 시스템의 상태를 모니터링하고 제어 명령을 입력할 수 있는 플랫폼입니다.</span>
                            <span>보통 웹 애플리케이션, 모바일 앱, 또는 전용 소프트웨어 형태로 제공됩니다.</span>
                        </dd>
                    </dl>
                </li>
                <li>
                    <span class="info-title">주요 기능</span>
                    <dl>
                        <dt>실시간 모니터링</dt>
                        <dd>장비나 시스템의 상태를 실시간으로 모니터링하여 이상 징후를 조기에 발견할 수 있습니다.</dd>
                        <dt>원격 제어</dt>
                        <dd>
                            <span>물리적으로 현장에 있지 않더라도 원거리에서 장비를 제어할 수 있습니다.</span>
                            <span>예를 들어, 기계의 작동을 멈추거나 설정을 조정할 수 있습니다.</span>
                        </dd>
                        <dt>데이터 기록 및 분석</dt>
                        <dd>수집된 데이터를 기록하고 분석하여 장비의 성능을 평가하거나 예측 유지보수를 할 수 있습니다.</dd>
                        <dt>알림 및 경고</dt>
                        <dd>시스템의 이상 상태를 감지하면 자동으로 경고를 보내 사용자에게 문제를 알려줍니다.</dd>
                    </dl>
                </li>
            </ul>
            <div class="card-con-wrap">
                <p class="title">활용사례</p>
                <ul class="card-con-list">
                    <li class="color1">
                        <span>산업 분야</span>
                        <span>생산라인의 장비를 원격으로 모니터링하고 제어하여 효율성을 높이고, 고장을 예방합니다.</span>
                    </li>
                    <li class="color2">
                        <span>가정 자동화</span>
                        <span>스마트 홈 시스템을 통해 가전제품, 조명, 난방 등을 원격으로 관리합니다.</span>
                    </li>
                    <li class="color3">
                        <span>교통 관리</span>
                        <span>교통 신호등이나 교량의 상태를 원격으로 모니터링하여 원활한 교통 흐름을 유지합니다.</span>
                    </li>
                    <li class="color4">
                        <span>에너지 관리</span>
                        <span>전력 사용을 모니터링하고 원격으로 제어하여 에너지 효율성을 높입니다.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</article>

<?php
include_once(G5_THEME_PATH.'/tail.php');