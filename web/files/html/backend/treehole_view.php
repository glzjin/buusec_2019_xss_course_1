<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:20 PM
 */

include "db.php";

$id = addslashes($_GET['id']);

$result = query("select content from treehole where id='$id';");
echo(json_encode(['msg' => 1, 'content' => $result[0]['content']]));