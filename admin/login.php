<?php
session_start();

include('../config.php');

if ($input->get('do') == 'check') {
    $auser = $input->post('auser');
    $apass = $input->post('apass');
    $sql = "select * from admin WHERE auser='{$auser}' AND apass='{$apass}'";
    $mysqli_result = $db->query($sql);//得到对象
    $row = $mysqli_result->fetch_array(MYSQLI_ASSOC);//转为数组
    if (is_array($row)) {
        $_SESSION['aid'] = $row['aid'];
        header("location:home.php");
    } else {
        die("账号或密码错误");
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>管理员登录</title>
    <meta charset="UTF-8"><!--转码-->
<?php include (PATH . '/header.inc.php')?>
</head>
<body>
<div class="container">
    <div class="row" style="margin-top: 200px;"><!--//上空200-->
        <div class="col-md-3"></div><!--总共十二个模块,左空3-->
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">管理员登录</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="login.php?do=check" method="post">
                        <div class="form-group">
                            <label for="auser" class="col-sm-2 control-label">用户名</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="auser" id="auser"
                                       placeholder="请输入用户名">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apass" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="apass" id="apass"
                                       placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" value="提交登录" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer text-right">版权所有,盗版必究</div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
</body>
</html>