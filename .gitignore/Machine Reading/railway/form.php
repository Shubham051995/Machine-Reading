<?php
		define('DBHOST','localhost');
        define('DBUSERNAME','root');
        define('DBPASSWORD','');
        define('DBNAME','railway_data');
        define('TWEETTABLE','feedback_analysis');if(isset($_POST)){
		$conn = new mysqli(DBHOST,DBUSERNAME,DBPASSWORD,DBNAME);
		$name= addslashes($_POST['name']);
		$text= addslashes($_POST['text']);
		$id =addslashes ( $_POST['mySelect']);
		$created_date =addslashes ( $_POST['created_date']) ;
		$created_time =addslashes ( $_POST['created_time']) ;
		$created_at = $created_date."".$created_time;
		$sql = "INSERT INTO feedback_analysis".
       "(name,text,id,created_at)".
       "VALUES".
       "('$name','$text','$id','$created_at')";
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
die('not created'.mysqli_error($conn));
}
mysqli_close($conn);
		}
	echo  "<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank for valuable feedback');
    window.location.href='ab.php';
    </SCRIPT>";
	

?>
