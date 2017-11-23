<?php
/**
 * Created by PhpStorm.
 * User: spongebob
 * Date: 2017/11/2
 * Time: 下午2:59
 */
class db {
    function __construct() {
        $this->mysqli = new mysqli('localhost', 'root', '000000', 'blog');
        if ($this->mysqli->connect_error) {//检查连接是否正常
            die('Connect Error(' . $this->mysqli->connect_error . ')' . $this->mysqli->connect_error);
        }
    }
    function query($sql) {
        return $this->mysqli->query($sql);
    }
}