<?php
function selectClients() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select * From client");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
