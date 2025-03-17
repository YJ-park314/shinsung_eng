<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<article id="performance" class="no-vis-pd">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3>공사실적</h3>
        <div class="wrap">
            <div id="bo_list">
                <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                    <input type="hidden" name="stx" value="<?php echo $stx ?>">
                    <input type="hidden" name="spt" value="<?php echo $spt ?>">
                    <input type="hidden" name="sca" value="<?php echo $sca ?>">
                    <input type="hidden" name="sst" value="<?php echo $sst ?>">
                    <input type="hidden" name="sod" value="<?php echo $sod ?>">
                    <input type="hidden" name="page" value="<?php echo $page ?>">
                    <input type="hidden" name="sw" value="">

                    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
                    <div id="bo_btn_top">
                        <ul class="btn_bo_user">
                            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn bd-blue" title="글쓰기">글쓰기</a></li><?php } ?>
                        </ul>
                    </div>
                    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

                    <!-- 리스트 시작 -->
                    <?php if(count($list) == 0) { ?>
                    <div class="no-data">게시물이 없습니다.</div>
                    <?php } else { ?>
                    <ul class="performance-list">
                        <?php
                        for ($i=0; $i<count($list); $i++) {
                            if ($i%2==0) $lt_class = "even";
                            else $lt_class = "";

                            $file = get_file($bo_table, $list[$i]['wr_id']);
                        ?>
                        <li class="item">
                            <span class="img-area">
                                <a href="<?php echo $list[$i]['href'] ?>">
                                <?php
                                if(get_editor_image($list[$i]['wr_content'], false)[1][0]) { // 에디터 이미지 체크
                                    $img_src = get_editor_image($list[$i]['wr_content'], false)[1][0]; //첫번쨰 이미지 등록 
                                    echo '<img src="'.$img_src.'" alt="">';
                                } else {
                                    echo '<i class="fa fa-regular fa-image"></i>';
                                }
                                ?>
                                </a>
                            </span>
                            <span class="txt-area">
                                <span class="num dpnone"></span>
                                <span class="date"><?php echo str_replace('-', '.' ,$list[$i]['wr_1']) ?></span>
                                <span class="tit">
                                    <a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject'] ?></a>
                                </span>
                            </span>
                        </li>
                        <?php } ?>
                    <?php } ?>
                    </ul>
                    <!-- 리스트 끝 -->

                    <!-- 페이지 -->
                    <?php echo $write_pages; ?>
                    <!-- 페이지 -->
                </form>
            </div>
        </div>
    </section>
</article>

<?php if($is_checkbox) { ?>
<noscript>
    <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
    function all_checked(sw) {
        var f = document.fboardlist;

        for (var i=0; i<f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]")
                f.elements[i].checked = sw;
        }
    }

    function fboardlist_submit(f) {
        var chk_count = 0;

        for (var i=0; i<f.length; i++) {
            if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                chk_count++;
        }

        if (!chk_count) {
            alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
            return false;
        }

        if(document.pressed == "선택복사") {
            select_copy("copy");
            return;
        }

        if(document.pressed == "선택이동") {
            select_copy("move");
            return;
        }

        if(document.pressed == "선택삭제") {
            if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                return false;

            f.removeAttribute("target");
            f.action = g5_bbs_url+"/board_list_update.php";
        }

        return true;
    }

    // 선택한 게시물 복사 및 이동
    function select_copy(sw) {
        var f = document.fboardlist;

        if (sw == "copy")
            str = "복사";
        else
            str = "이동";

        var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

        f.sw.value = sw;
        f.target = "move";
        f.action = g5_bbs_url+"/move.php";
        f.submit();
    }

    // 게시판 리스트 관리자 옵션
    jQuery(function($){
        $(".btn_more_opt.is_list_btn").on("click", function(e) {
            e.stopPropagation();
            $(".more_opt.is_list_btn").toggle();
        });
        $(document).on("click", function (e) {
            if(!$(e.target).closest('.is_list_btn').length) {
                $(".more_opt.is_list_btn").hide();
            }
        });
    });
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
