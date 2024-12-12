<?php
require_once("util-db.php");
require_once("model-employees-with-projects.php");
$pageTitle = "Employees with Projects";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']){
    case "Add":
    if (insertEmployeesWithProjects($_POST['pName'], $_POST['pBudget'], $_POST['pLocation'])){
      echo '<div class="alert alert-success" role="alert"> Project Added.</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
        case "Edit":
    if (updateEmployeesWithProjects($_POST['pName'], $_POST['pBudget'], $_POST['pLocation'], $_POST['pid'])){
      echo '<div class="alert alert-success" role="alert"> Project Edited.</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
        case "Delete":
    if (deleteEmployeesWithProjects($_POST['pid'])){
      echo '<div class="alert alert-success" role="alert"> Project Deleted</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}

$employees = selectEmployees();
include "view-employees-with-projects.php";
include "view-footer.php";
?>
