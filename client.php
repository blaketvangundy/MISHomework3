<?php
require_once("util-db.php");
require_once("model-client.php");
$pageTitle = "Clients";
include "view-header.php";
$employees = selectClients();
include "view-clients.php";
include "view-footer.php";
?>
