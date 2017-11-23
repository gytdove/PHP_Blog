<?php
/**
 * Created by PhpStorm.
 * User: spongebob
 * Date: 2017/11/2
 * Time: 下午3:16
 */

class input
{
    function get($key = false)
    {
        if ($key === false) {
            return $_GET;
        }
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else {
            return false;
        }
    }
    function post($key = false)
    {
        if ($key === false) {
            return $_POST;
        }
        if (isset($_POST[$key])) {
            return $_POST[$key];
        } else {
            return false;
        }
    }
    function session($key = false)
    {
        if ($key === false) {
            return $_SESSION;
        }
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }
}