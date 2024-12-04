<?php
require_once("util-db.php");
require_once("model-projects.php");
$pageTitle = "Projects";
include "view-header.php";
$projects = selectProjects();
include "view-projects.php";
include "view-footer.php";
?>
