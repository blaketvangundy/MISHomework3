<?php
require_once("util-db.php");
require_once("model-client.php");
$pageTitle = "Clients";
include "view-header.php";
if (isset($_POST['actionType'])) {
  switch($_POST['actionType']){
    case "Add":
    if (insertClients($_POST['cName'], $_POST['cemail'], $_POST['cphone'], $_POST['compname'])){
      echo '<div class="alert alert-success" role="alert"> Client Added.</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
        case "Edit":
    if (updateClients($_POST['cName'], $_POST['cemail'], $_POST['cphone'], $_POST['compname'], $_POST['cid'])){
      echo '<div class="alert alert-success" role="alert"> Client Edited.</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
        case "Delete":
    if (deleteClients($_POST['cid'])){
      echo '<div class="alert alert-success" role="alert">Client Deleted</div>';}
    else{
      echo '<div class="alert alert-danger" role="alert">Error</div>';
    }
    break;
  }
}



$clients = selectClients();
include "view-clients.php";
include "view-footer.php";
?>
