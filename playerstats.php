<head>









		<title>STATS RECORD</title>
	</head>
	
<body>
<table align='center' width='1000' border='4'>
	<tr>
	<td align='center' bgcolor='red' colspan='25'><h2>PLAYER RECORD</h2></td>
	</tr>
	
	<tr align='center'>
	
	    <th>FULL NAME</th>
		<th>DOB</th>
		<th>DEBUT</th>
		<th>ROLE</th>
		<th>BATTING_STYLE</th>
		<th>BOWLING_STYLE</th>
		<th>COUNTRY</th>
		<th>FORMAT ID</th>
		
		<th>BATSMAN RUNS</th>
		<th>MATCHES PLAYED</th>
		<th>NO OF INNINIGS</th>
		<th>HIGHEST INDIVIDUAL SCORE </th>
		<th>50's</th>
		<th>100's</th>
		<th>WICKETS</th>
		<th>BEST BOWLING FIGURES</th>
		<th>5W</th>
		<th>10W</th>[]
		<th>NO OF RUNS AGAINST</th>
		<th>NO OF OVERS BOWLED</th>
		<th>BATTING AVERAGE</th>
		<th>BOWLING AVERAGE</th>
		<th>ECONOMY</th>
	</tr>
	
	<tr align='center'>
<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

$que = "select P.Full_Name,P.DOB,P.Debut,P.Role,P.Batting_style,P.Bowling_style,P.Country,S.fid,S.btruns,S.matches_played,S.innings,
S.highest_score,S.50s,S.100s,S.no_of_wickets,S.best_bowling,S.5w,S.10w,S.ball_runs,
S.no_of_overs,ROUND(S.btruns/S.innings,2), ROUND(S.ball_runs/S.no_of_wickets,2), ROUND(S.ball_runs/S.no_of_overs,2)
from player P ,stats S where (P.P_ID=S.P_ID)  ORDER BY P.P_ID ";
$run = mysql_query($que);

while ($row=mysql_fetch_array($run))
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
       <td align='center'><?php echo $p_fn; ?></td>
		<td align='center'><?php echo $p_DOB; ?></td>
		<td align='center'><?php echo $p_db; ?></td>
		<td align='center'><?php echo $p_role; ?></td>
		<td align='center'><?php echo $p_btstyle; ?></td>
		<td align='center'><?php echo $p_bwstyle; ?></td>
		<td align='center'><?php echo $p_country; ?></td>

		<td align='center'><?php echo $s_fid; ?></td>
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
	
<?php } ?>


</table> <br><br><br><br><br>

	
	
	
	





</body>
</html>