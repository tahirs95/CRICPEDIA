<?php
	$conn = mysql_connect("localhost","root","");
	$db = mysql_select_db('cricpedia',$conn);

	$edit_record1= $_GET['edit1'];
	$edit_record2= $_GET['edit2'];


	$que= "select * from ranking where Country='$edit_record1' and Format_id='$edit_record2' ";

	$run= mysql_query($que);

	while ($row=mysql_fetch_array($run))
	{
		$edit_country=$row[0];
		$edit_format=$row[1];
		$edit_rating=$row[2];
		$edit_points=$row[3];	

	}
?>

<html>
    <head>
        <title> 
			UPDATING RANKING
		</title>
		
		<style>
			div.relative 
			{
				position: relative;
				width: 800px;
				height: 200px;
				top:110px;
				left:220px;
			}
			
			div.head
			{
				position: relative;
				width: 1100px;
				height: 30px;
				left:0px;
				top: 60px;
				text-align:left;
				padding-left: 250px;
				padding-top: 20px;
			}
			
			div.absolute1 
			{
				position: absolute;
				top: 0px;
				left:0;
				right: 0;
				width: 1100px;
				height: 100px;
				padding-left: 7px;
				border-radius: 10px;
				border: 3px solid #625E5E;
			}

			div.absolute2
			{
				position: absolute;
				top: 128px;
				left: 0px;
				right: 100px;
				width: 1100px;
				height: 490px;
				padding-left: 7px;
				border-radius: 10px;
				padding-right: 7px;
				margin-right:100px;
				
			}

			body
			{
				background: url(img/x.jpg) no-repeat;
				background-size: 1700px 500px;
			}
			
			td 
			{
				padding-top: .5em;
				padding-bottom: .5em;
			}
			
			th
			{
				font-size:18px;	
			}
			#k
			{
				position: absolute;
				left: 123px;
				bottom: 0px;
				top: -25px;
				padding-left: 100px;
				width: 50px;
				height: 100px;
			}
			
			header
			{
				overflow:hidden;
			}

			table 
			{
				border-collapse: collapse;
				width: 100%;
				border-spacing: 15px;
				right:100px;
			}
			
			#o
			{
				color: #4F6B83;
				display: inline;
			}
			
			#f
			{
				color: #178DC9;
				display: inline;
			}
			
			h1
			{
				padding-left: 5px;
				padding-right: 17px;
			}
			
			form
			{
				padding-left:180px;
			}
			
			#ds
			{
				position:relative;
				left: 225px;
				width:600px;
				top:25px;
			}
			

			#ds a
			{
				text-decoration:none;
				color:white;
			}
			
			#ds a:hover 
			{ 
				color: #17CCED;
				text-decoration:underline;
			}
		</style>
		
    </head>

	<body>
<div id="ds">
		<a href='admin_page.php'> Back to home </a> <br>
	</div>
		<div class="head">
		
			<div id="k">
				<img src="IMG/logo.jpg" alt="error" style="width:100px;height:108px;">
			</div>
		
		</div>
		
		<div class="relative">
	
			<div class="absolute1">
				<h1>
					Admin <div id="o">/</div> Ranking <div id="o">/</div> <div id="f">Update ranking</div>
				<br><hr></h1>
			</div>
		
			<div class="absolute2"> 
				<form method='post' action='edit_ranking.php?edit_form=<?php echo $edit_country; ?>  &
				 edit_form2=<?php echo $edit_format ;?>'>
				 <br><br>
				<table width='99%'> 
					
					<tr>
						<th align='right'> COUNTRY </th>
						<td>
							<input type ='text' name='Country1'  value='<?php echo $edit_country ; ?>'  > 
						</td>
					</tr>

					<tr>
						<th align='right'> FORMAT </th>
				 
						<td>
							 <select name='Format1'>
							 <option value='<?php echo $edit_format ; ?>'> <?php echo $edit_format ; ?></option>
							 <option value='10'> 10 </option>
							 <option value='20'> 20 </option>
							 <option value='30'> 30 </option>
							 </select>
					
						</td>
					</tr>

					<tr>
						<th align='right'> RATING </th>
						<td>
							<input type ='number_format' name='Rating1'  value='<?php echo $edit_rating; ?>'>  
						</td>
					</tr>

					<tr>
						<th align='right'> POINTS </th>
						<td>
							<input type ='number_format' name='Points1' value='<?php echo $edit_points ; ?>'  >
						</td>
					</tr>

					<tr>
						<td align='center' colspan='6'>
							<input type ='submit' name='update' value='Update'>
						</td>
					</tr>

				</table>
				</form>
			</div>
		</div>
	</body>
</html>

<?php
if(isset($_POST['update']))
{
	$edit_record1= $_GET['edit_form'];
	$edit_record2= $_GET['edit_form2'];
	
	$edit_country1= $_POST['Country1'];
	$edit_format1= $_POST['Format1'];
	$edit_rating1= $_POST['Rating1'];
	$edit_points1= $_POST['Points1'];
	
	
	$query1= "update ranking set Country='$edit_country1', Format_id='$edit_format1',
			  Rating='$edit_rating1', Points='$edit_points1' where Country='$edit_record1' and 
			  Format_id=$edit_record2	";
	
	if(mysql_query($query1))
	{
		echo "<script>window.open('view_ranking.php?updated=Record has been updated successfully','_self')</script>";
	}	
}

?>
