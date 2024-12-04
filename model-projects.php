<?php
function selectProjects() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select * From project");
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
