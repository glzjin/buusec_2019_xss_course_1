<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/29
 * Time: 8:43 AM
 */

include "config.php";
include "flag.php";

if(isset($_SESSION['is_admin'])) {
    if($_SESSION['is_admin'] === 1) {
        echo('flag:'.$flag);
        die();
    }
}

die("老铁，你还没登录呢！");
