<html>
<head>


		<title>STATS RECORD</title>
	</head>

<body>

<table align='center' width='1000' border='4'>
	<tr>
	<td align='center' bgcolor='red' colspan='20'><h2>PLAYER</h2></td>
	</tr>
	
	<tr align='center'>
	
	    <th>PLAYER NAME</th>
		
		
	</tr>
	
	<tr align='center'>

<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

	$query1="select * from player";
	
	$run1=mysql_query($query1);
	while ($row=mysql_fetch_array($run1))
{
	
	
	$p_id=$row[0];
    $p_fn1=$row[1];
	
	
	?>
	<table width='800' bgcolor='Aquamarine' align='center' border='1'>
	<tr align='center'>
	
		
		<td align='center'><a href='p_s1.php? stats=<?php echo $p_id; ?>' > <?php echo $p_fn1; ?> </a></td>
		
		
	
	<?php } ?>
	</table>
	
	
	
	</body>
</html>













