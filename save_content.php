<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data['content'];


    require 'config.php';
    $sql = "INSERT INTO posts (content) VALUES ('$content')";

    if ($conn->query($sql) === TRUE) {
        $response = array('success' => true, 'id' => $conn->insert_id);
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'error' => $conn->error);
        echo json_encode($response);
    }
    $conn->close();
} else {
   
    echo 'Invalid request method!';
}
?>
