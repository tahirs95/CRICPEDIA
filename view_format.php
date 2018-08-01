<html>
	<head>
		<title>VIEWING FORMAT</title>
	</head>
	
<body>
<a href='add_f.php'> INSERT NEW RECORD </a> <br>
<a href=' logout.php '>   LOG OUT </a>
<table align='center' width='1000' border='4'>
	<tr>
	<td align='center' bgcolor='red' colspan='20'><h2>FORMATS</h2></td>
	</tr>
	
	<tr align='center'>
		<th>Format</th>
		<th>Format_name</th>
	</tr>
	
	<tr align='center'>
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$que = "select * from format";
$run = mysql_query($que);

while ($row=mysql_fetch_array($run))
{
	$f_id=$row[0];
	$f_name=$row[1];
	

?>
		<td align='center'><?php echo $f_id; ?></td>
		<td align='center'><?php echo $f_name; ?></td>
		<td align='center'><a href='del_format.php?  del=<?php echo $f_id ; ?> '>Delete</a> </td>
		<td align='center'><a href='edit_format.php? edit=<?php echo $f_id; ?>' >Edit </a></td>
	</tr>
	
<?php } ?>


</table><br><br><br><br><br>

<form action='view_format.php' method='get' >
 <input type='text' name='search'>
<input type='submit' name='submit' value='SEARCH'>
</form>

<?php
if(isset($_GET['search']))
{
	$search_record= $_GET['search'];
	$query2=" select * from format where Format_id='$search_record'";
	
	$run2=mysql_query($query2);
	while ($row2=mysql_fetch_assoc($run2))
{
	$search_id=$row2['Format_id'];
	$search_fname=$row2['Format_name'];
	?>
	<table width='800' bgcolor='Aquamarine' align='center' border='1'>
	<tr align='center'>
	
	<td align='center'> <?php echo $search_id; ?> </td>
	<td align='center'> <?php echo $search_fname; ?> </td>
	</tr>
	</table>
	<?php }} ?>







</body>
</html>
		