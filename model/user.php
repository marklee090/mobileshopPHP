<?php
require_once "connect.php";
function user_insert($username, $password, $email)
{
    $sql = "INSERT INTO khachhang(username, password, email) VALUES (?, ?, ?)";
    pdo_execute($sql, $username, $password, $email);
}

function checkuser($username, $password)
{
    $sql = "SELECT * FROM khachhang WHERE username = ? AND password = ?";
    return pdo_query_one($sql, $username, $password);
}

function user_update($username, $password, $email,$diachi,$phone,$vaitro,$idkh){
    $sql = "UPDATE khachhang SET password=?,username=?,email=?,diachi=?,phone=?,vaitro=? WHERE idkh=?";
    pdo_execute($sql, $password, $username, $email, $diachi, $phone, $vaitro==1, $idkh);
}

function get_user($idkh)
{
    $sql = "SELECT * FROM khachhang WHERE idkh = ?";
    return pdo_query_one($sql, $idkh);
}