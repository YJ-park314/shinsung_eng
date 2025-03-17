<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/tail.php');
//     return;
// }

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

    </div>
    <!-- <div id="aside">
        <//?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        <//?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
    </div> -->
</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<?php 
/* 
    <div id="ft">

        <div id="ft_wr">
            <div id="ft_link" class="ft_cnt">
                <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
                <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
                <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
            </div>
            <div id="ft_company" class="ft_cnt">
                <h2>사이트 정보</h2>
                <p class="ft_info">
                    회사명 : 회사명 / 대표 : 대표자명<br>
                    주소  : OO도 OO시 OO구 OO동 123-45<br>
                    사업자 등록번호  : 123-45-67890<br>
                    전화 :  02-123-4567  팩스  : 02-123-4568<br>
                    통신판매업신고번호 :  제 OO구 - 123호<br>
                    개인정보관리책임자 :  정보책임자명<br>
                </p>
            </div>
            <?php
            //공지사항
            // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
            // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
            // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
            echo latest('theme/notice', 'notice', 4, 13);
            ?>
            
            <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
        </div>      
            <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
            <div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>
        
        
        <button type="button" id="top_btn">
            <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
        </button>
        <script>
        $(function() {
            $("#top_btn").on("click", function() {
                $("html, body").animate({scrollTop:0}, '500');
                return false;
            });
        });
        </script>
    </div>

    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
*/
?>

<footer id="footer">
    <div class="wrap">
        <div class="left">
            <ul class="ft-menu">
                <li><a href="/terms.php">이용약관</a></li>
                <li class="divide"></li>
                <li><a href="/personal_info_policy.php">개인정보처리방침</a></li>
                <li class="divide"></li>
                <li><a href="<?php if($is_admin) echo "/bbs/board.php?bo_table=inquiry"; else echo "/bbs/write.php?bo_table=inquiry"; ?>">견적문의</a></li>
            </ul>
            <ul class="ft-info">
                <li>대표자 <span>신현충</span></li>
                <li>대표번호 <span>041-354-1237</span></li>
                <li>사업자등록번호 <span>883-81-01460</span></li>
                <li>주소지 <span>충남 당진시 대덕동 양지말길 8-15</span></li>
                <li>팩스번호 <span>041-354-1232</span></li>
                <li>이메일 <span>ssh660828@naver.com</span></li>
                <li>개인정보책임자 <span>신성호</span></li>
            </ul>
        </div>
        <div class="right">
            <img src="/theme/basic/img/ft_logo.png" alt="신성이엔지 푸터 로고">
        </div>
    </div>
</footer>

<!-- } 하단 끝 -->

<script src="/theme/basic/js/common.js"></script>
<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");