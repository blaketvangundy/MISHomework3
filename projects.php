<?php
require_once("util-db.php");
require_once("model-projects.php");

$pageTitle = "Projects";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']){
    case "Add":
    if (insertProjects($_POST['pName'], $_POST['pBudget'], $_POST['pLocation']));{
      echo '<div class="alert alert-success" role="alert"> Project Added.</div>'}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>'
    }
    break;
  }
}
$projects = selectProjects();
include "view-projects.php";
include "view-footer.php";
?>
