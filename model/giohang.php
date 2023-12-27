<?php
function viewcart()
{
    $html_cart = '';
    $stt = 1;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $total = (int)$giasp * (int)$soluong;
        $html_cart .= '<tr>
                        <td>' . $stt . '</td>
                        <td><img src="view/images/' . $hinh . '" alt="" style="width: 150px;"></td>
                        <td>' . $tensp . '</td>
                        <td>' . $giasp . '</td>
                        <td>' . $soluong . '</td>
                        <td>' . $total . '</td>
                        <td><a href="#">Xóa</a></td>
                    </tr>
                    ';
        $stt++;
    }
    return $html_cart;
}

function get_tongdonhang(){
    $tong = 0;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $total = (int)$giasp * (int)$soluong;
        $tong+=$total;
    }
    return $tong;
}
