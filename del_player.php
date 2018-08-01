<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$delete_record= $_GET['del'];
$que= "delete from player where P_ID='$delete_record'";
if(mysql_query($que))
{
	echo "<script>window.open('view_player.php?deleted=Record has beed deleted successfully','_self')</script>";
}