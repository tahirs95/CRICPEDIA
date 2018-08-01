<html>
<head>


		<title>STATS RECORD</title>
	</head>

<body>

<form action='search_playerstats.php' method='get' >
 <input type='text' name='search'>
<input type='submit' name='submit' value='SEARCH'>
</form>

<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);
if(isset($_GET['search']))
{
	$search_record1= $_GET['search'];
	$query1="select P.Full_Name,P.DOB,P.Debut,P.Role,P.Batting_style,P.Bowling_style,P.Country,S.fid,S.btruns,S.matches_played,S.innings,
			 S.highest_score,S.50s,S.100s,S.no_of_wickets,S.best_bowling,S.5w,S.10w,S.ball_runs,
			 S.no_of_overs,ROUND(S.btruns/S.innings,2), ROUND(S.ball_runs/S.no_of_wickets,2), ROUND(S.ball_runs/S.no_of_overs,2)
			 from player P ,stats S where (P.P_ID=S.P_ID) AND P.Full_Name='$search_record1'  AND S.fid=20	";
	
	$run1=mysql_query($query1);
	while ($row=mysql_fetch_array($run1))
{
	
	
	$p_fn1=$row[0];
	$p_DOB1=$row[1];
	$p_db1=$row[2];
	$p_role1=$row[3];
	$p_btstyle1=$row[4];
	$p_bwstyle1=$row[5];
	$p_country1=$row[6];
	
	
	$s_fid1=$row[7];
	$s_btruns1=$row[8];
	$s_matches_played1=$row[9];
	$s_innings1=$row[10];
	
	
	$s_highest_score1=$row[11];
	$s_501=$row[12];
	$s_1001=$row[13];
	$s_no_wickets1=$row[14];
	$s_bestbowling1=$row[15];
	$s_5w1=$row[16];
	$s_10w1=$row[17];
	$s_ballruns1=$row[18];
	$s_noofovers1=$row[19];
	$s_btavg1=$row[20];
	$s_ballavg1=$row[21];
	$s_eco1=$row[22];
	
	?>
	<table width='800' bgcolor='Aquamarine' align='center' border='1'>
	<tr align='center'>
	
	<td align='center'><?php echo $p_fn1; ?></td>
		<td align='center'><?php echo $p_DOB1; ?></td>
		<td align='center'><?php echo $p_db1; ?></td>
		<td align='center'><?php echo $p_role1; ?></td>
		<td align='center'><?php echo $p_btstyle1; ?></td>
		<td align='center'><?php echo $p_bwstyle1; ?></td>
		<td align='center'><?php echo $p_country1; ?></td>

		<td align='center'><?php echo $s_fid1; ?></td>
		<td align='center'><?php echo $s_btruns1; ?></td>
		<td align='center'><?php echo $s_matches_played1; ?></td>
		<td align='center'><?php echo $s_innings1; ?></td>
		<td align='center'><?php echo $s_highest_score1; ?></td>
		<td align='center'><?php echo $s_501; ?></td>
		<td align='center'><?php echo $s_1001; ?></td>
		<td align='center'><?php echo $s_no_wickets1; ?></td>
		<td align='center'><?php echo $s_bestbowling1; ?></td>
		<td align='center'><?php echo $s_5w1; ?></td>
		<td align='center'><?php echo $s_10w1; ?></td>
		<td align='center'><?php echo $s_ballruns1; ?></td>
		<td align='center'><?php echo $s_noofovers1; ?></td>
		<td align='center'><?php echo $s_btavg1; ?></td>
		<td align='center'><?php echo $s_ballavg1; ?></td>
		<td align='center'><?php echo $s_eco1; ?></td>
		
		
		
	
	<?php }} ?>
	
	
	<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);
if(isset($_GET['search']))
{
	$search_record2= $_GET['search'];
	$query2="select P.Full_Name,P.DOB,P.Debut,P.Role,P.Batting_style,P.Bowling_style,P.Country,S.fid,S.btruns,S.matches_played,S.innings,
S.highest_score,S.50s,S.100s,S.no_of_wickets,S.best_bowling,S.5w,S.10w,S.ball_runs,
S.no_of_overs,ROUND(S.btruns/S.innings,2), ROUND(S.ball_runs/S.no_of_wickets,2), ROUND(S.ball_runs/S.no_of_overs,2)
from player P ,stats S where (P.P_ID=S.P_ID) AND P.Full_Name='$search_record2' AND S.fid=30	";
	
	$run2=mysql_query($query2);
	while ($row=mysql_fetch_array($run2))
{
	
	
	$p_fn=$row[0];
	$p_DOB=$row[1];
	$p_db=$row[2];
	$p_role=$row[3];
	$p_btstyle=$row[4];
	$p_bwstyle=$row[5];
	$p_country=$row[6];
	
	
	$s_fid=$row[7];
	$s_btruns=$row[8];
	$s_matches_played=$row[9];
	$s_innings=$row[10];
	
	
	$s_highest_score=$row[11];
	$s_50=$row[12];
	$s_100=$row[13];
	$s_no_wickets=$row[14];
	$s_bestbowling=$row[15];
	$s_5w=$row[16];
	$s_10w=$row[17];
	$s_ballruns=$row[18];
	$s_noofovers=$row[19];
	$s_btavg=$row[20];
	$s_ballavg=$row[21];
	$s_eco=$row[22];
	
	?>

	
	
	
		<td align='center'><?php echo $s_btruns; ?></td>
		<td align='center'><?php echo $s_matches_played; ?></td>
		<td align='center'><?php echo $s_innings; ?></td>
		<td align='center'><?php echo $s_highest_score; ?></td>
		<td align='center'><?php echo $s_50; ?></td>
		<td align='center'><?php echo $s_100; ?></td>
		<td align='center'><?php echo $s_no_wickets; ?></td>
		<td align='center'><?php echo $s_bestbowling; ?></td>
		<td align='center'><?php echo $s_5w; ?></td>
		<td align='center'><?php echo $s_10w; ?></td>
		<td align='center'><?php echo $s_ballruns; ?></td>
		<td align='center'><?php echo $s_noofovers; ?></td>
		<td align='center'><?php echo $s_btavg; ?></td>
		<td align='center'><?php echo $s_ballavg; ?></td>
		<td align='center'><?php echo $s_eco; ?></td>
		
		
		
	</tr>
	</table>
	<?php }} ?>
	</body>
</html>

