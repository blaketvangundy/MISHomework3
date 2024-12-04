<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis-4013-blakevangundy-db.mysql.database.azure.com', 'blakevangundy4013', 'R@chel1Bl@ke2', 'homework#3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
