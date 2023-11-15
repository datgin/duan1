<?php
include "header.php";
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "add_dm":{
            include "./danhmuc/add.php";
            break;
        }
        case "list_dm": {
                include "./danhmuc/list.php";
                break;
            }
    }
}else{
    include "home.php";
}
include "footer.php";
?>