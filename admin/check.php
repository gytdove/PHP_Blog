<?php
/**
 * Created by PhpStorm.
 * User: spongebob
 * Date: 2017/11/2
 * Time: 下午3:28
 */
session_start();
include ('../config.php');

$session_aid = $input->session('aid');
if ($session_aid === false) {
    header("location:login.php");//如果没有 aid 则跳转到登录界面
}

$sql = "select * from admin where aid='{$session_aid}'";
$session_auser_result = $db->query($sql);
$session_user = $session_auser_result->fetch_array(MYSQLI_ASSOC);
