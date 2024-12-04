<?php
require_once("util-db.php");
require_once("model-employees-with-projects.php");
$pageTitle = "Employees with Projects";
include "view-header.php";
$employees = selectEmployees();
include "view-employees-with-projects.php";
include "view-footer.php";
?>
