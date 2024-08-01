<?php
if (isset($_GET["page"])) {
    require_once('../db.php');
    $page = $_GET["page"];
    if ($page == 1 || $page == 'addemployers') {
        require_once("employer/add.php");
        }
        else if ($page == "2") {
            require_once("employer/list.php");
        }
        else if ($page == "3") {
            require_once("employer/delete.php");
        }
        else if ($page == "4") {
            require_once("employer/edit.php");
        }
        else if ($page == "5") {
            require_once("menu/menu.php");
        }
}

?>