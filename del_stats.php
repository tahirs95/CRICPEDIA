<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$delete_record= $_GET['del1'];
$delete_record2= $_GET['del2'];
$que= "delete from stats where P_ID='$delete_record' and fid='$delete_record2'";
if(mysql_query($que))
{
	echo "<script>window.open('view_stats.php?deleted=Record has beed deleted successfully','_self')</script>";
}
