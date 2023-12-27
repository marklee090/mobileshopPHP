<?php
require_once "connect.php";

function danhmuc_all()
{
    $sql = "SELECT * FROM danhmuc ORDER BY stt ASC";
    return pdo_query($sql);
}

function showdm($dsdm) {
    $html_danhmuc = '';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link = 'index.php?pg=sanpham&iddm=' . $iddm;
        $html_danhmuc .= '<a href="' . $link . '">' . $tendm . '</a>';
    }
    return $html_danhmuc;
}

// Admin

function showdm_admin($dsdm,$iddm) {
    $html_danhmuc = '';
    foreach ($dsdm as $dm) {
        extract($dm);
        if($id==$iddm) {
            $s="selected";
         } else {
            $s="";
         }
        $html_danhmuc .= '<option value="'.$iddm.'"'.$s.'>'.$tendm.'</option>';
    }
    return $html_danhmuc;
}
