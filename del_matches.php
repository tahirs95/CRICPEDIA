<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$delete_record= $_GET['del'];
$que= "delete from matches where Match_date='$delete_record'";
if(mysql_query($que))
{
	echo "<script>window.open('view_matches.php?deleted=Record has beed deleted successfully','_self')</script>";
}
