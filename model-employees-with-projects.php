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

function selectProjectsbyEmployee($eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("Select p.project_id, project_name, project_budget, start_date, end_date From project p join assignment a on a.project_id = p.project_id WHERE a.employee_id=?");
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
function insertEmployeesWithProjects($pName, $pbudg, $ploc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO project (project_name, project_budget, project_location) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $pName, $pbudg, $ploc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateEmployeesWithProjects($pName, $pbudg, $ploc, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE project SET project_name = ?, project_budget = ?, project_location = ? WHERE project_id = ?");
        $stmt->bind_param("sssi", $pName, $pbudg, $ploc, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteEmployeesWithProjects($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM project WHERE project_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
