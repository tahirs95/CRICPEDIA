<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$delete_record= $_GET['del'];

$que= "delete from format where Format_id='$delete_record' ";
if(mysql_query($que))
{
	echo "<script>window.open('view_format.php?deleted=Record has been deleted successfully','_self')</script>";
}
?>