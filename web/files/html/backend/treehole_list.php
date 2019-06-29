<?php
/**
 * Created by PhpStorm.
 * User: jinzhao
 * Date: 2019/6/21
 * Time: 10:20 PM
 */

include "db.php";
{
if(isset($_SESSION['is_admin'])) {
    if($_SESSION['is_admin'] === 1)
        $result = query("select id from treehole where is_viewed = 0;");
        echo(json_encode($result));

        foreach($result as $item) {
            $id = addslashes($item['id']);
            query("update treehole set is_viewed = 1 where id='$id';");
        }
    }
}
