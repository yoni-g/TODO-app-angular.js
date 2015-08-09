<?php
require_once 'connection.php'; // The mysql database connection script
if(isset($_GET['taskID'])){
        $taskID = $_GET['taskID'];
         
        $query="delete from tasks where id='$taskID'";
        $result = $conn->query($query) or die($conn->error.__LINE__);
         
        //$result = $mysqli->affected_rows;
         
        //echo $json_response = json_encode($result);
}
$conn->close();
?>