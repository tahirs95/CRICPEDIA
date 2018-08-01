<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$edit_record= $_GET['edit'];


$que= "select * from format where Format_id='$edit_record'";

$run= mysql_query($que);

while ($row=mysql_fetch_array($run))
{
	$edit_id=$row[0];
	$edit_fname=$row[1];

}
?>

<html>
    <head>
          <title> UPDATING RANKING</title>
          </head>

<body>

                                                   
<form method='post' action='edit_format.php?edit_form=<?php echo $edit_id; ?>'>
 
<table width='700' border='3' align='center'> 
<tr>
<th bgcolor='red' colspan='10'>UPDATING RANKING RECORD</th>
</tr>

<tr>
<td align='right'> FORMAT ID</td>
<td>
 <input type ='number_format' name='Format_id1'  value='<?php echo $edit_id ; ?>'  > 
</td>
</tr>





<tr>
<td align='right'> FORMAT NAME </td>
<td> <input type ='text' name='Format_name1'  value='<?php echo $edit_fname; ?>'>  
 </td>
</tr>

<tr>
<td align='center' colspan='6'>
 <input type ='submit' name='update' value='Update'>
 </td>
</tr>




</table>
</form>
</body>
</html>

<?php
if(isset($_POST['update']))
{
	$edit_record= $_GET['edit_form'];
	
	$edit_id1= $_POST['Format_id1'];
	$edit_fname1= $_POST['Format_name1'];

	
	
	$query1= "update format set Format_id='$edit_id1', Format_name='$edit_fname1' where 
	Format_id='$edit_record'";
	
	if(mysql_query($query1))
{
	echo "<script>window.open('view_format.php?updated=Record has been updated successfully','_self')</script>";
}
	
}

?>