<?php
function selectAssignmentsByEmployee($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select assignment_id, assignment_role, start_date, end_date From employee e join assignment a on a.employee_id = e.employee_id WHERE a.employee_id=?");
        $stmt->bind_param("i", $eid);
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
