<?php
function selectProjects() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT * FROM project");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertProjects($pName, $pbudg, $ploc, $eid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO project (project_name, project_budget, project_location, employee_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $pName, $pbudg, $ploc, $eid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateProjects($pName, $pbudg, $ploc, $eid, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE project SET project_name = ?, project_budget = ?, project_location = ?, employee_id = ? WHERE project_id = ?");
        $stmt->bind_param("sssii", $pName, $pbudg, $ploc, $eid, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteProjects($pid) {
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
