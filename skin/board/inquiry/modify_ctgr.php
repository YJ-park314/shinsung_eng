<?php
    include_once("../../../common.php");
    if($member['mb_level']<9) die();
    $write_table = $g5['write_prefix'].$bo_table;
    $sql = "update {$write_table} set ca_name = '{$ca_name}' where wr_id='{$wr_id}' limit 1";
    sql_query($sql);
    
    $redirect_url = '/bbs/board.php?bo_table='.$bo_table.'&wr_id='.$wr_id;

    alert($ca_name."(으)로 변경되었습니다.", $redirect_url);
    // goto_url($redirect_url);
?>