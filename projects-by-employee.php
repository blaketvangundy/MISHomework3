<?php
require_once("util-db.php");
require_once("model-projects-by-employee.php");
$pageTitle = "Projects by Employee";
include "view-header.php";
$projects = selectProjectsByEmployee($_GET['id']);
include "view-projects-by-employee.php";
include "view-footer.php";
?>
