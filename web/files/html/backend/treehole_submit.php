<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:20 PM
 */

include "db.php";

$json_object = json_decode(file_get_contents('php://input'), true);

$content = addslashes($json_object['content']);
$uuid = gen_uuid();

$result = query("insert into treehole(id,content) values ('$uuid','$content');");
echo(json_encode(['msg' => 1, 'id' => $uuid]));