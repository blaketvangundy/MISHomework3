<?php
function selectAssignmentsByProject($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select p.project_id, project_name, project_budget, start_date, end_date From project p join assignment a on a.project_id = p.project_id WHERE a.project_id=?");
        $stmt->bind_param("i", $pid);
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
