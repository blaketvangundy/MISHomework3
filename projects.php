<?php
require_once("util-db.php");
require_once("model-projects.php");

$pageTitle = "Projects";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']){
    case "Add":
    insertProjects($_POST['pName'], $_POST['pBudget'], $_POST['pLocation']);
    break;
  }
}
$projects = selectProjects();
include "view-projects.php";
include "view-footer.php";
?>
