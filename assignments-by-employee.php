<?php
require_once("util-db.php");
require_once("model-assignments-by-employee.php");
$pageTitle = "Assignments by Employee";
include "view-header.php";
$assignments = selectAssignmentsByEmployee($_POST['eid']);
include "view-assignments-by-employee.php";
include "view-footer.php";
?>
