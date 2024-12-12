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
function insertClients($cName, $cemail, $cphone, $compname) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO client (client_name, client_email, client_phone, company_name) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss",$cName, $cemail, $cphone, $compname);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateClients($cName, $cemail, $cphone, $compname, $cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE client SET client_name = ?, client_email = ?, client_phone = ?, company_name = ? WHERE client_id = ?");
        $stmt->bind_param("ssssi",$cName, $cemail, $cphone, $compname, $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteClients($cid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM client WHERE client_id = ?");
        $stmt->bind_param("i", $cid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
