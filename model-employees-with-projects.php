<?php
function selectEmployees() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select * From employee");
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
