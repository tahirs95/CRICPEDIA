<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$delete_record= $_GET['del1'];
$delete_record2= $_GET['del2'];

$que= "delete from ranking where Country='$delete_record' and Format_id='$delete_record2' ";
if(mysql_query($que))
{
	echo "<script>window.open('view_ranking.php?deleted=Record has been deleted successfully','_self')</script>";
}
?>