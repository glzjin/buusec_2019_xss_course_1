<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 11:15 PM
 */

include "db.php";

$json_object = json_decode(file_get_contents('php://input'), true);

$username = addslashes($json_object['username']);
$password = addslashes($json_object['password']);
$result = query("select password from admin where username='$username';");

if(isset($result[0])) {
    if($result[0]['password'] === $password) {
        $_SESSION['is_admin'] = 1;
        echo(json_encode(array('res' => 1, 'msg' => '登录成功！')));
        exit(0);
    }
}

echo(json_encode(array('res' => 0)));
