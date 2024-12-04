<?php
require_once("util-db.php");
require_once("model-employees-eith-projects.php");
$pageTitle = "Employees with Projects";
include "view-header.php";
$employees = selectEmployees();
include "view-employees-with-projects.php";
include "view-footer.php";
?>
