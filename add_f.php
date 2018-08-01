<html>
    <head>
          <title>FORMAT</title>
          </head>

<body>
<form method='post' action='add_f.php'>
<table width='700' border='3' align='center'> 
<tr>
<th bgcolor='red' colspan='10'>ADD FORMAT RECORD</th>
</tr>

<tr>
<td align='right'> FORMAT ID </td>
<td> <input type ='number_format' name='Format_id'> <font color='blue'> <?php echo @$_GET['f_id']; ?> </font>
</td>
</tr>





<tr>
<td align='right'> FORMAT NAME </td>
<td> <input type ='text' name='Format_name'>  <font color='blue'> <?php echo @$_GET['f_name']; ?> </font>
 </td>
</tr>




<tr>
<td align='center' colspan='6'>
 <input type ='submit' name='submit' value='Submit'>
 </td>
</tr>


</table>
</form>
</body>
</html>


<?php

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('cricpedia',$conn);

if(isset($_POST['submit']))

{
$format_id= $_POST ['Format_id'];
$format_name= $_POST ['Format_name'];


if($format_id=='')
{
	echo "<script>window.open('add_f.php?f_id=Enter FORMAT ID,'_self')</script>";
	exit();
	}

if($format_name=='')
{
	echo "<script>window.open('add_f.php?f_name=Enter FORMAT NAME','_self')</script>";
	exit();
	}

	
	


	

	$que= " insert into format values ('$format_id','$format_name')";
	
	if(mysql_query($que))
	{echo "data has been inserted";}
}
?>