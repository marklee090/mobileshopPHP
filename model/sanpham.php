<?php
    require_once "connect.php";
?>

<?php
    function get_dssp_new($limit){
        $sql = "SELECT * FROM sanpham ORDER BY idsp DESC limit ".$limit;
        return pdo_query($sql);
    }

    function get_dssp_best($limit){
        $sql = "SELECT * FROM sanpham WHERE hotsell=1 ORDER BY idsp DESC limit ".$limit;
        return pdo_query($sql);
    }

    function get_dssp_view($limit){
        $sql = "SELECT * FROM sanpham ORDER BY view DESC limit ".$limit;
        return pdo_query($sql);
    }

    function get_dssp_lienquan($iddm,$idsp,$limit){
        $sql = "SELECT * FROM sanpham WHERE iddm=? AND idsp<>? ORDER BY view DESC limit ".$limit;
        return pdo_query($sql,$iddm,$idsp);
    }

    function get_dssp($iddm,$limit){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($iddm>0){
            $sql .=" AND iddm=".$iddm;
        }
        $sql .=" ORDER BY idsp DESC limit ".$limit;
        return pdo_query($sql);
    }

    function get_sp_by_id($idsp){
        $sql = "SELECT * FROM sanpham WHERE idsp=?";
        return pdo_query_one($sql, $idsp);
    }

    function get_img($idsp){
        $sql = "SELECT * FROM sanpham WHERE idsp=?";
        $getimg = pdo_query_one($sql, $idsp);
        return $getimg['hinh'];
    }

    function get_dssp_iphone($iddm,$limit){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($iddm>0){
            $sql .=" AND iddm=1";
        }
        $sql .=" ORDER BY idsp DESC limit ".$limit;
        return pdo_query($sql);
    }

    function get_dssp_macbook($iddm,$limit){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($iddm>0){
            $sql .=" AND iddm=2";
        }
        $sql .=" ORDER BY idsp DESC limit ".$limit;
        return pdo_query($sql);
    }

    function showsp($dssp){
        $html_dssp = '';
        foreach ($dssp as $sp){
        extract($sp);
        if($hotsell == 1){
            $hot = '<div class="best"></div>';
        } else {
            $hot='';
        }
        $link = "index.php?pg=sanphamchitiet&idsp=".$idsp;
        $html_dssp .='   <div class="card col">
                            <a href="'.$link.'"><img src="view/images/'.$hinh.'" class="card-img-top"></a>
                            '.$hot.'
                            <div class="card-body">
                            <h5 class="card-title">'.$tensp.'</h5>
                            <p class="card-text">'.$giasp.' VND</p>
                            <form action="index.php?pg=addcart" method="post">
                                <input type="hidden" name="tensp" value="'.$tensp.'">
                                <input type="hidden" name="hinh" value="'.$hinh.'">
                                <input type="hidden" name="giasp" value="'.$giasp.'">
                                <input type="hidden" name="soluong" value="1">
                                <button type="submit" class="btn btn-dark" name="addcart">Đặt hàng</button>
                            </form>
                            </div>
                        </div>';
    }
    return $html_dssp;
    }

    function showspchitiet($dssp){
        $html_dssp = '';
        foreach ($dssp as $sp){
        extract($sp);
        if($hotsell == 1){
            $hot = '<div class="best"></div>';
        } else {
            $hot='';
        }
        $link = "index.php?pg=sanphamchitiet&idsp=".$idsp;
        $html_dssp .='   <div class="card col-md-3 ">
                            <a href="'.$link.'"><img src="view/images/'.$hinh.'" class="card-img-top"></a>
                            '.$hot.'
                            <div class="card-body">
                            <h5 class="card-title">'.$tensp.'</h5>
                            <p class="card-text">'.$giasp.' VND</p>
                            <form action="index.php?pg=addcart" method="post">
                                <input type="hidden" name="tensp" value="'.$tensp.'">
                                <input type="hidden" name="hinh" value="'.$hinh.'">
                                <input type="hidden" name="giasp" value="'.$giasp.'">
                                <input type="hidden" name="soluong" value="1">
                                <button type="submit" class="btn btn-dark" name="addcart">Đặt hàng</button>
                            </form>
                            </div>
                        </div>';
    }
    return $html_dssp;
    }


// Admin
function showsp_admin($dssp){
    $html_dssp = '';
    $i = 1;
    foreach ($dssp as $sp){
    extract($sp);
    $html_dssp .='<tr>
                    <td>'.$i.'</td>
                    <td>'.$tensp.'</td>
                    <td><img src="'.IMG_PATH_ADMIN.$hinh.'" alt="'.$tensp.'" width="80px"></td>
                    <td>'.$giasp.'</td>
                    <td>'.$view.'</td>
                    <td>
                    <a href="index.php?pg=update_product&idsp='.$idsp.'" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i> Sửa
                    </a>
                    <a href="index.php?pg=delproduct&idsp='.$idsp.'" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i> Xóa
                    </a>
                    </td>
                </tr>';
    $i++;
}
return $html_dssp;
}

function sanpham_insert($tensp, $giasp, $iddm, $hinh){
    $sql = "INSERT INTO sanpham(tensp, giasp, iddm, hinh) VALUES (?,?,?,?)";
    pdo_execute($sql, $tensp, $giasp, $iddm, $hinh);
}

function sanpham_delete($idsp){
    $sql = "DELETE FROM sanpham WHERE  idsp=?";
    if(is_array($idsp)){
        foreach ($idsp as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $idsp);
    }
}
?>
