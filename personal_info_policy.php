<?php
include_once('common.php');

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/personal_info_policy.php');
    return;
}

if (G5_IS_MOBILE) {
    require_once(G5_THEME_PATH.'/personal_info_policy.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<?php
include_once(G5_PATH.'/tail.php');
?>