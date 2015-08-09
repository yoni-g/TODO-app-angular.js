<?php 
require_once 'connection.php'; // The mysql database connection script
if(isset($_GET['taskID'])){
        $status = $_GET['status'];
        $taskID = $_GET['taskID'];
        $query="update tasks set status='$status' where id='$taskID'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
        
        $result = $conn->affected_rows;
        
        $json_response = json_encode($result);
}
$conn->close();
?>