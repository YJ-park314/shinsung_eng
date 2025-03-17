<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// include_once(G5_URL.'/common.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);

// 카테고리 추출 sql
$row = sql_fetch("select bo_category_list from g5_board where bo_table='".$bo_table."'");
$ctgrArr = explode("|", $row['bo_category_list']);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->
<article id="quotationInquiry" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3>견적문의</h3>
        <div class="wrap">
            <div class="form-area">
                <ul class="input-list">
                    <li>
                        <span class="li-tit">상태</span>
                        <span class="con">
                            <?php echo $view['ca_name'] ?>
                            <!-- <a href="#" class="state-change">완료 처리 하기</a> -->
                        </span>
                    </li>
                    <li>
                        <span class="li-tit">회사명</span>
                        <span class="con"><?php echo $view['wr_1'] ?></span>
                    </li>
                    <li>
                        <span class="li-tit">전화번호</span>
                        <span class="con"><?php echo $view['wr_2'] ?></span>
                    </li>
                    <li>
                        <span class="li-tit">담당자</span>
                        <span class="con"><?php echo $view['wr_3'] ?></span>
                    </li>
                    <li>
                        <span class="li-tit">이메일</span>
                        <span class="con"><?php echo $view['wr_4'] ?></span>
                    </li>
                    <li class="border-line inquiry-body-wrap view">
                        <span class="li-tit">요청 및 문의사항</span>
                        <span class="ctgr"><?php echo $view['wr_5'] ?></span>
                        <span class="subject"><?php echo cut_str(get_text($view['wr_subject']), 70); ?></span>
                        <span class="inquiry-body"><?php echo $view['content'] ?></span>
                    </li>
                    <li>
                        <span class="li-tit">첨부파일</span>
                        <span class="file-link">
                            <a href="<?php echo $view['file'][0]['href'] ?>" download><?php echo $view['file'][0]['source'] ?></a>
                        </span>
                        <!-- <input type="file" multiple class="hidden" name="attaFile" id="attaFile"> -->
                    </li>
                </ul>
            </div>
            <div class="btn-wrap">
                <button type="button" class="btn con bd-blue prev-loca-btn">목록</button>
                <button type="button" class="btn con blue modi-btn">
                <?php if($view['ca_name'] === $ctgrArr[0]) { ?>
                    <span class="ctgr1"><?php echo $ctgrArr[1] ?>로 수정</span>
                <?php } else { ?>
                    <span class="ctgr2"><?php echo $ctgrArr[0] ?>으로 수정</span>
                <?php }; ?>
                </button>
                <?php if ($delete_href) { ?><a href="<?php echo $delete_href ?>" class="btn con red" onclick="del(this.href); return false;">삭제</a><?php } ?>
            </div>
        </div>
    </section>
</article>
<!-- } 게시글 읽기 끝 -->

<script>
    document.querySelector('.prev-loca-btn').addEventListener('click', () => {
        window.location.href = "<?php echo $list_href ?>";
    });

    document.querySelector('.modi-btn').addEventListener('click', () => {
        <?php if($view['ca_name'] === $ctgrArr[0]) { ?>
            window.location.href = "<?php echo $board_skin_url.'/modify_ctgr.php?bo_table='.$bo_table.'&wr_id='.$view['wr_id'].'&ca_name='.$ctgrArr[1] ?>";
        <?php } else { ?>
            window.location.href = "<?php echo $board_skin_url.'/modify_ctgr.php?bo_table='.$bo_table.'&wr_id='.$view['wr_id'].'&ca_name='.$ctgrArr[0] ?>";
        <?php } ?>
    });
</script>