<?php  
require_once("connection.php"); 
$id=$_POST['id'];
$query = 'select * from feedback_analysis where id = "'.$id.'" ORDER BY created_at DESC';
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query);  
while($data = mysqli_fetch_array($result)) 
{ 
   $table_data[]= array("name"=>$data[0],"text"=>$data[1],"id"=>$data[2],"status"=>$data[3],"created_at"=>$data[4]);

} 
echo json_encode($table_data);
?>