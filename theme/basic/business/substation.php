<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/business/substation.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual substation">
    <div class="vis-con">
        <p class="subtitle">수배전반</p>
        <p>전력의 안정적 공급과 효율적인 관리를 지원합니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="substation">
    <h2 class="hidden">본문 영역</h2>
    <section class="no-pd-top">
        <h3 class="hidden">수배전반</h3>
        <ul class="tabs">
            <li class="active"><h4><a href="#">주요 구성 요소</a></h4></li>
            <li><h4><a href="#">주요 기능 및 장점</a></h4></li>
        </ul>
        <div class="wrap">
            <div class="short-info">
                <p><span class="color-point">수배전반(Substation Panel)</span>은 전력 시스템의 전력을 분배하고 관리하는 장치로, 전력의 <span class="color-point">안정적</span>이고 <span class="color-point">효율적</span>인 공급을 보장하는 데 중요한 역할을 합니다.</p>
                <p>수배전반은 일반적으로 전력 시스템의 중간 지점에 위치하여 전력을 여러 회로로 나누어 공급하며, 보호, 제어, 모니터링 기능을 제공합니다.</p>
            </div>
            <ul class="tab-con-list">
                <li class="active">
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">전원 차단기</span>
                            <dl>
                                <dt>기본 차단기(Breakers)</dt>
                                <dd>
                                    <span>과전류, 단락 등으로부터 전력 시스템을 보호하는 장치입니다.</span>
                                    <span>필요에 따라 전원을 차단하거나 재개할 수 있습니다.</span>
                                </dd>
                                <dt>개폐기(Switches)</dt>
                                <dd>전력 흐름을 제어하고, 특정 회로를 연결하거나 분리할 수 있는 장치입니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">배전 장치</span>
                            <dl>
                                <dt>퓨즈(Fuses)</dt>
                                <dd>
                                    <span>과전류로부터 회로를 보호하는 장치입니다.</span>
                                    <span>과부하가 발생하면 퓨즈가 끊어져 회로를 차단합니다.</span>
                                </dd>
                                <dt>전압 조정기(Voltage Regulators)</dt>
                                <dd>전압을 일정하게 유지하여 전력 품질을 보장하는 장치입니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">측정 및 모니터링 장치</span>
                            <dl>
                                <dt>전류계(Current Meters)</dt>
                                <dd>회로의 전류를 측정합니다.</dd>
                                <dt>전압계(Voltage Meters)</dt>
                                <dd>회로의 전압을 측정합니다.</dd>
                                <dt>전력 계량기(Power Meters)</dt>
                                <dd>전력 소비량을 측정하고 기록합니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">제어 장치</span>
                            <dl>
                                <dt>PLC(Programmable Logic Controller)</dt>
                                <dd>자동화된 제어 및 모니터링을 위한 프로그래머블 장치입니다.</dd>
                                <dt>HMI(Human-Machine Interface)</dt>
                                <dd>사용자와 제어 시스템 간의 상호작용을 가능하게 하는 장치입니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">보호 장치</span>
                            <dl>
                                <dt>과부하 릴레이(Overload Relays)</dt>
                                <dd>과부하 상태를 감지하여 회로를 보호하는 장치입니다.</dd>
                                <dt>지락 보호기(Earth Fault Relays)</dt>
                                <dd>지락 상태를 감지하여 보호합니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">전원 공급 장치</span>
                            <dl>
                                <dt>정전압 전원 공급 장치</dt>
                                <dd>안정적인 전원 공급을 위한 장치입니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">배선 및 커넥터</span>
                            <dl>
                                <dt>배선</dt>
                                <dd>전력의 흐름을 전달하는 전선 및 케이블입니다.</dd>
                                <dt>커넥터</dt>
                                <dd>전선 간의 연결을 위한 장치입니다.</dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">주요 기능</span>
                            <dl>
                                <dt>전력 분배</dt>
                                <dd>
                                    <span>고압 전력을 저압으로 변환하여 여러 회로로 나누어 공급합니다.</span>
                                    <span>이를 통해 전력의 효율적인 사용이 가능합니다.</span>
                                </dd>
                                <dt>전력 보호</dt>
                                <dd>
                                    <span>차단기, 퓨즈, 과부하 릴레이 등을 통해 전력 시스템을 보호합니다.</span>
                                    <span>이상 상황에서 전력을 차단하여 시스템과 장비를 보호합니다.</span>
                                </dd>
                                <dt>모니터링 및 측정</dt>
                                <dd>전력의 상태를 실시간으로 모니터링하고, 전류, 전압, 전력 소비량 등을 측정하여 데이터를 제공합니다.</dd>
                                <dt>제어 기능</dt>
                                <dd>수배전반의 제어 장치를 통해 전력의 흐름을 조절하고, 회로를 개폐하거나 전압을 조정할 수 있습니다.</dd>
                                <dt>신뢰성 및 안전성 보장</dt>
                                <dd>전력 시스템의 신뢰성과 안전성을 보장하기 위해 다양한 보호 장치와 제어 기능을 갖추고 있습니다.</dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="card-con-wrap">
                        <p class="title">주요 장점</p>
                        <ul class="card-con-list">
                            <li class="color1">
                                <span>효율적인 전력 관리</span>
                                <span>전력을 효율적으로 분배하고 관리하여 에너지 낭비를 줄입니다.</span>
                            </li>
                            <li class="color2">
                                <span>안전성</span>
                                <span>다양한 보호 장치를 통해 전력 시스템의 안전성을 높이고, 고장을 예방합니다.</span>
                            </li>
                            <li class="color3">
                                <span>유연성</span>
                                <span>다양한 전력 요구 사항에 대응할 수 있는 유연한 설계가 가능합니다.</span>
                            </li>
                            <li class="color4">
                                <span>모니터링 및 제어</span>
                                <span>실시간 모니터링과 제어를 통해 전력 시스템의 상태를 최적화하고 문제를 조기에 감지할 수 있습니다.</span>
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