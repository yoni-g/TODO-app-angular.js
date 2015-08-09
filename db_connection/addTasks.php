<?php
require_once 'connection.php'; // The mysql database connection script
if(isset($_GET['task'])){
        $task = $_GET['task'];
        $status = "0";
        $date = $_GET['date'];
                 echo $created;
        $query="INSERT INTO tasks(task,date,status) VALUES ('$task', '$date', '$status')";
        $result = $conn->query($query) or die($conn->error.__LINE__);
         
        $result = $mysqli->affected_rows;
         
        echo $json_response = json_encode($result);
}
$conn->close();
?>