<?php
require_once("util-db.php");
require_once("model-assignments-by-project.php");
$pageTitle = "Assignments by Project";
include "view-header.php";
$assignments = selectAssignmentsByProject($_POST['pid']);
include "view-assignments-by-project.php";
include "view-footer.php";
?>
