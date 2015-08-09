<?php
require_once 'connection.php'; // The mysql database connection script
$status = '%';

$query="select ID, TASK, DATE, STATUS from tasks where status like '$status' order by STATUS, DATE";
$result = $conn->query($query) or die($conn->error.__LINE__);
 
$arr = array();
if($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 $arr[] = $row;
 }
}
 
# JSON-encode the response
echo $json_response = json_encode($arr);

$conn->close();
?>