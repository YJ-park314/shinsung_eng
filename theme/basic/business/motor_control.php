<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/business/motor_control.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual motor-control">
    <div class="vis-con">
        <p class="subtitle">전동기 제어반</p>
        <p>안정적이고 효율적인 전동기 운영을 지원합니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="motorControl">
    <h2 class="hidden">본문 영역</h2>
    <section class="no-pd-top">
        <h3 class="hidden">전동기 제어반</h3>
        <ul class="tabs">
            <li class="active"><h4><a href="#">주요 구성 요소</a></h4></li>
            <li><h4><a href="#">주요 기능 및 장점</a></h4></li>
        </ul>
        <div class="wrap">
            <div class="short-info">
                <p><span class="color-point">전동기 제어반(Motor Control Panel, MCP)</span>은 전동기와 관련된 <span class="color-point">장비 및 시스템의 작동을 제어</span>하고 <span class="color-point">모니터링</span>하는 장비입니다.</p>
                <p>이 제어반은 전동기의 시작, 정지, 속도 조절, 방향 전환 등을 관리하며, 전동기 시스템의 <span class="color-point">안전성</span>과 <span class="color-point">효율성</span>을 유지하는 데 중요한 역할을 합니다.</p>
            </div>
            <ul class="tab-con-list">
                <li class="active">
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">전동기 제어기</span>
                            <dl>
                                <dt>스타터(Starters)</dt>
                                <dd>
                                    <span>전동기를 시작하고 정지시키는 장치로, 전동기의 전류를 제어합니다.</span>
                                    <span>일반적으로 직접 기동 스타터(Direct-on-line Starter), 스타터-토크 제한기(Star-Delta Starter) 등이 사용됩니다.</span>
                                </dd>
                                <dt>드라이브(Drives)</dt>
                                <dd>전동기의 속도와 토크를 조절하는 장치로, 인버터(Inverter), 서보 드라이브(Servo Drive) 등이 포함됩니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">차단기 및 보호장치</span>
                            <dl>
                                <dt>차단기(Circuit Breakers)</dt>
                                <dd>전동기의 과전류나 단락에 대비하여 전원을 차단하는 장치입니다.</dd>
                                <dt>과부하 릴레이(Overload Relays)</dt>
                                <dd>전동기의 과부하 상태를 감지하여 전원을 차단하는 장치입니다.</dd>
                                <dt>서지 보호기(Surge Protectors)</dt>
                                <dd>전압 서지로부터 전동기 및 제어 시스템을 보호합니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">스위치 및 버튼</span>
                            <dl>
                                <dt>시작/정지 버튼(Start/Stop Buttons)</dt>
                                <dd>전동기의 시작 및 정지를 제어하는 버튼입니다.</dd>
                                <dt>속도 조절기(Speed Controllers)</dt>
                                <dd>전동기의 속도를 조절하는 장치입니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">계측기 및 표시기</span>
                            <dl>
                                <dt>전류계(Current Meters)</dt>
                                <dd>전동기의 전류를 측정하는 장치입니다.</dd>
                                <dt>전압계(Voltage Meters)</dt>
                                <dd>전동기의 전압을 측정하는 장치입니다.</dd>
                                <dt>상태 표시등(Indicator Lights)</dt>
                                <dd>전동기의 작동 상태를 시각적으로 표시합니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">연락 및 제어 시스템</span>
                            <dl>
                                <dt>PLC(Programmable Logic Controller)</dt>
                                <dd>전동기 제어 로직을 프로그래밍하여 자동화된 제어를 가능하게 합니다.</dd>
                                <dt>HMI(Human-Machine Interface)</dt>
                                <dd>사용자가 전동기의 상태를 모니터링하고 제어할 수 있는 인터페이스를 제공합니다.</dd>
                            </dl>
                        </li>
                        <li>
                            <span class="info-title">전원 공급 장치</span>
                            <dl>
                                <dt>전원 공급 장치(Power Supply Units)</dt>
                                <dd>제어반의 전원을 안정적으로 공급하는 장치입니다.</dd>
                            </dl>
                        </li>
                    </ul>
                </li>
                <li>
                    <ul class="main-info-list">
                        <li>
                            <span class="info-title">주요 기능</span>
                            <dl>
                                <dt>전동기 제어</dt>
                                <dd>전동기의 시작, 정지, 방향 전환, 속도 조절 등을 관리하여 다양한 작동 모드를 지원합니다.</dd>
                                <dt>안전 보호</dt>
                                <dd>과전류, 과부하, 단락 등의 상태를 감지하고 이를 차단하여 전동기 및 관련 장비를 보호합니다.</dd>
                                <dt>모니터링 및 진단</dt>
                                <dd>전동기의 상태를 실시간으로 모니터링하고, 문제 발생 시 경고를 발생시켜 조기에 문제를 진단할 수 있습니다.</dd>
                                <dt>자동화</dt>
                                <dd>PLC와 같은 제어 시스템을 통해 전동기의 작동을 자동화하고, 복잡한 제어 로직을 구현할 수 있습니다.</dd>
                                <dt>통신 및 데이터 기록</dt>
                                <dd>HMI나 SCADA 시스템을 통해 원거리에서 전동기의 상태를 모니터링하고 데이터를 기록하여 분석할 수 있습니다.</dd>
                            </dl>
                        </li>
                    </ul>
                    <div class="card-con-wrap">
                        <p class="title">주요 장점</p>
                        <ul class="card-con-list">
                            <li class="color1">
                                <span>안전성 보장</span>
                                <span>보호 장치와 안전 기능을 통해 전동기와 관련 장비의 안전성을 높입니다.</span>
                            </li>
                            <li class="color2">
                                <span>효율성 향상</span>
                                <span>전동기 제어반을 통해 전동기의 작동을 효율적으로 관리하고 최적화할 수 있습니다.</span>
                            </li>
                            <li class="color3">
                                <span>자동화</span>
                                <span>자동화된 제어를 통해 작업의 일관성을 유지하고 인적 오류를 줄일 수 있습니다.</span>
                            </li>
                            <li class="color4">
                                <span>유연성</span>
                                <span>다양한 작동 모드와 제어 기능을 제공하여 다양한 응용에 적합합니다.</span>
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