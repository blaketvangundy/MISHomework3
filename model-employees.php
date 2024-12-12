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
function insertEmployees($eName, $ePosition) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO employee (employee_name, employee_position) VALUES (?, ?)");
        $stmt->bind_param("ss",$eName, $ePosition);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmployees($eName, $ePosition, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE employee SET employee_name = ?,employee_position = ? WHERE employee_id = ?");
        $stmt->bind_param("ssi", $eName, $ePosition, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmployees($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM employee WHERE employee_id = ?");
        $stmt->bind_param("i", $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
