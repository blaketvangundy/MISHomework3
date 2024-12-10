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

function insertProjects($pName, $pbudg, $ploc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO project (project_name, project_budget, start_date, end_date, project_location) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $pName, $pbudg, $pstart, $pend, $ploc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateProjects($pName, $pbudg, $pstart, $pend, $ploc, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE project SET project_name = ?, project_budget = ?, start_date = ?, end_date = ?, project_location = ? WHERE project_id = ?");
        $stmt->bind_param("sssssi", $pName, $pbudg, $pstart, $pend, $ploc, $pid);
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
