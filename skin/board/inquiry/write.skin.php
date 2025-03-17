<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 카테고리 추출 sql
$row = sql_fetch("select bo_category_list from g5_board where bo_table='".$bo_table."'");
$ctgrArr = explode("|", $row['bo_category_list']);
?>

<article id="quotationInquiry" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3>견적문의</h3>
        <div class="wrap">
            <!-- 게시물 작성/수정 시작 { -->
            <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-area">
                    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                    <input type="hidden" name="w" value="<?php echo $w ?>">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca ?>">
                    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                    <input type="hidden" name="stx" value="<?php echo $stx ?>">
                    <input type="hidden" name="spt" value="<?php echo $spt ?>">
                    <input type="hidden" name="sst" value="<?php echo $sst ?>">
                    <input type="hidden" name="sod" value="<?php echo $sod ?>">
                    <input type="hidden" name="page" value="<?php echo $page ?>">
                    <?php
                    $option = '';
                    $option_hidden = '';
                    if ($is_notice || $is_html || $is_secret || $is_mail) { 
                        $option = '';
                        if ($is_notice) {
                            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="notice" name="notice"  class="selec_chk" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice"><span></span>공지</label></li>';
                        }
                        if ($is_html) {
                            if ($is_dhtml_editor) {
                                $option_hidden .= '<input type="hidden" value="html1" name="html">';
                            } else {
                                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" class="selec_chk" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html"><span></span>html</label></li>';
                            }
                        }
                        if ($is_secret) {
                            if ($is_admin || $is_secret==1) {
                                $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="secret" name="secret"  class="selec_chk" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret"><span></span>비밀글</label></li>';
                            } else {
                                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
                            }
                        }
                        if ($is_mail) {
                            $option .= PHP_EOL.'<li class="chk_box"><input type="checkbox" id="mail" name="mail"  class="selec_chk" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail"><span></span>답변메일받기</label></li>';
                        }
                    }
                    echo $option_hidden;
                    ?>

                    <!-- 비회원 수정 필요할 경우 -->
                    <?/*php 
                    <div class="bo_w_info write_div">
                        <?php if ($is_name) { ?>
                            <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
                            <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input half_input required" placeholder="이름">
                        <?php } ?>

                        <?php if ($is_password) { ?>
                            <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
                            <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input half_input <?php echo $password_required ?>" placeholder="비밀번호">
                        <?php } ?>

                        <?php if ($is_email) { ?>
                            <label for="wr_email" class="sound_only">이메일</label>
                            <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input email " placeholder="이메일">
                        <?php } ?>
                        

                        <?php if ($is_homepage) { ?>
                            <label for="wr_homepage" class="sound_only">홈페이지</label>
                            <input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input half_input" size="50" placeholder="홈페이지">
                        <?php } ?>
                    </div>

                    <?php if ($option) { ?>
                    <div class="write_div">
                        <span class="sound_only">옵션</span>
                        <ul class="bo_v_option">
                        <?php echo $option ?>
                        </ul>
                    </div>
                    <?php } ?>
                    */?>

                    <ul class="input-list">
                        <?php if ($is_category) { ?>
                        <li class="hidden">
                            <input type="radio" name="ca_name" id="ca_name" value="<?php echo $ctgrArr[0] ?>" checked>
                            <!-- <select name="ca_name" id="ca_name" required>
                                <option value="신규">신규</option>
                                <?//php echo $category_option ?>
                            </select> -->
                        </li>
                        <?php } ?>
                        <li>
                            <label for="wr_1"><span class="required-input">회사명</span></label>
                            <input type="text" name="wr_1" value="<?php echo $write['wr_1'] ?>" id="wr_1" required placeholder="신성이엔지">
                        </li>
                        <li>
                            <label for="wr_2"><span class="required-input">전화번호</span></label>
                            <input type="tel" name="wr_2" value="<?php echo $write['wr_2'] ?>" id="wr_2" required placeholder="'-'를 제외하고 입력">
                        </li>
                        <li>
                            <label for="wr_3"><span>담당자</span></label>
                            <input type="text" name="wr_3" value="<?php echo $write['wr_3'] ?>" id="wr_3" placeholder="홍길동">
                        </li>
                        <li>
                            <label for="wr_4"><span>이메일</span></label>
                            <input type="email" name="wr_4" value="<?php echo $write['wr_4'] ?>" id="wr_4" placeholder="sample@naver.com">
                        </li>
                        <li class="border-line inquiry-body-wrap">
                            <label for="wr_5"><span class="required-input">요청 및 문의사항</span></label>
                            <select name="wr_5" id="wr_5" required>
                                <option value="전기공사">전기공사</option>
                                <option value="원격감시제어">원격감시제어</option>
                                <option value="공장자동화시스템">공장자동화시스템</option>
                                <option value="전동기 제어반">전동기 제어반</option>
                                <option value="수배전반">수배전반</option>
                                <option value="농공단지 직접생산">농공단지 직접생산</option>
                            </select>
                            <input type="text" name="wr_subject" id="wr_subject" placeholder="제목" value="<?php echo $subject ?>" size="50" maxlength="255" required>

                            <!-- 작성 본문 -->
                            <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                                <?php if($write_min || $write_max) { ?>
                                <!-- 최소/최대 글자 수 사용 시 -->
                                <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
                                <?php } ?>
                                <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                                <?php if($write_min || $write_max) { ?>
                                <!-- 최소/최대 글자 수 사용 시 -->
                                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                                <?php } ?>
                            </div>
                        </li>
                        <li>
                            <label for="bf_file_1" class="file-label">
                                <span class="file-guide"><span>첨부파일</span><span class="help">파일이 여러개일 경우 하나로 압축해서 올려주세요.</span></span>
                                <span class="file-drop">
                                    <img src="/theme/basic/img/ico_file_open.png" alt="" class="file-ico">
                                    <ul class="file-list"></ul>
                                </span>
                            </label>
                            <input type="file" name="bf_file[]" id="bf_file_1" class="hidden" title="파일첨부1 : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능">
                        </li>
                    </ul>
                    <div class="terms">
                        <p>신성이엔지는 이용문의 고객에 대한 상담 진행 및 서비스 안내 등을 위해 아래와 같이 개인정보를 수집·이용 및 제공하고자 합니다.<br>내용을 자세히 읽으신 후 동의 여부를 결정하여 주십시오.</p>
                        <ol>
                            <li>항목 : 성명, 이메일, 연락처, 업체명, 요청사항</li>
                            <li>수집목적: 공사 서비스 맞춤 제공, 서비스 안내 및 업계 동향 제공</li>
                            <li>보유, 이용기간: 2년</li>
                        </ol>
                        <p>※위의 개인정보 수집·이용에 대한 동의를 거부할 권리가 있습니다. 그러나 동의를 거부할 경우 맞춤상담 및 서비스 정보 제공에 제한을 받을 수 있습니다.</p>
                        <div class="chk-wrap">
                            <input type="checkbox" name="termsChk" id="termsChk" required><label for="termsChk">개인정보 수집 및 이용 동의</label>
                        </div>
                    </div>
                </div>
                <div class="btn-wrap wrt">
                    <button type="button" class="btn con bd-blue prev-loca-btn">이전</button>
                    <button class="btn con blue">견적문의하기</button>
                </div>
            </form>
        </div>
    </section>
</article>

<!-- } 게시물 작성/수정 끝 -->

<script>
    // 파일 1개만 가능
    const fileInput = document.querySelector('#bf_file_1');
    const fileList = document.querySelector('.file-list');
    const fileIco = document.querySelector('.file-ico');
    const prevLocaBtn = document.querySelector('.prev-loca-btn');
    
    const fileIcoCtrl = () => {
        if(fileInput.value) {
            fileIco.classList.add('dpnone');
        } else {
            fileIco.classList.remove('dpnone');
        }
    }

    fileInput.addEventListener('change', e => {
        let fileObj = e.target.files[0];
        
        fileList.innerHTML = `<li><span class="file-name">${fileObj.name}</span><a href="#" class="file-del">X</a></li>`;
        fileIcoCtrl();
    });

    fileList.addEventListener('click', e => {
        e.preventDefault();

        if(e.target.classList.contains('file-del')) {
            e.target.closest('li').remove();
            fileInput.value = '';
        }

        fileIcoCtrl();
    });

    prevLocaBtn.addEventListener('click', () => {
        history.back();
    });
</script>

<!-- 파일 여러개일 경우 아래 스크립트 활용 -->
<!-- <script>
    const fileInput = document.querySelector('#attaFile');
    const fileList = document.querySelector('.file-list');
    const fileIco = document.querySelector('.file-ico');
    const prevLocaBtn = document.querySelector('.prev-loca-btn');
    let newFileArr = []; // submit에 담길 파일들
    // let fileReader = new FileReader();

    const fileIcoCtrl = () => {
        if(newFileArr.length) {
            fileIco.classList.add('dpnone');
        } else {
            fileIco.classList.remove('dpnone');
        }
    }

    fileList.addEventListener('click', e => {
        e.preventDefault();

        if(e.target.classList.contains('file-del')) {
            let thisLi = e.target.closest('li');
            newFileArr = newFileArr.filter(fl => fl.name !== thisLi.querySelector('.file-name').textContent);

            thisLi.remove();
        }

        fileIcoCtrl();
    });

    fileInput.addEventListener('change', e => {
        let fileObj = e.target.files;
        let fileFlag = false;

        for(i=0; i<fileObj.length; i++) {
            for(u=0; u<newFileArr.length; u++) {
                // console.log(fileObj[i].name);
                // console.log(newFileArr[u].name);
                if(newFileArr[u].name == fileObj[i].name) {
                    fileFlag = true;
                    break;
                }
            }

            if(fileFlag) {
                alert('중복된 파일이 존재합니다.');
                break;
            } else {
                newFileArr.push(fileObj[i]);
                fileList.innerHTML += `<li><span class="file-name">${fileObj[i].name}</span><a href="#" class="file-del">X</a></li>`;
                fileIcoCtrl();
            }
        }

        e.target.value = '';
    });

    prevLocaBtn.addEventListener('click', () => {
        history.back();
    });
</script> -->