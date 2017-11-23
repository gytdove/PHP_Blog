<?php
/**
 * Created by PhpStorm.
 * User: spongebob
 * Date: 2017/11/2
 * Time: 下午3:08
 */
/**
 * 程序的配置文件
 */
define("PATH",dirname(__FILE__));

include (PATH.'/core/db.class.php');
$db = new db();//实例化

include (PATH.'/core/input.class.php');
$input = new input();