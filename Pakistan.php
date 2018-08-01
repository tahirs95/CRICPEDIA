<html>
	<head>
		<title>Pakistan</title>
		
		<style>
		div.relative 
{
    position: relative;
    width: 1330px;
    height: 600px;
	top:110px;
	left:117px;
}

div.head
{
	position: relative;
	width: 1335px;
    height: 30px;
	left:-10px;
	top: 60px;
	text-align:left;
	background: #2D2C2C;
	padding-left: 250px;
	padding-top: 20px;
}

div.absolute1 
{
    position: absolute;
    top: 0px;
	left:0;
    right: 0;
    width: 1000px;
    height: 100px;
	padding-left: 7px;
	border-radius: 10px;
	border: 3px solid #625E5E;
}

div.absolute2
{
    position: absolute;
    top: 123px;
	left: 0px;
    right: 0;
    width: 1000px;
    height: 660px;
	background: white;
	padding-left: 7px;
	border-radius: 10px;
	padding-top: 5px;
	border: 3px solid #625E5E;
}

body
{
	background: url(img/x.jpg) no-repeat;
	background-size: 1700px 500px;
}

#i
{
	font-size: 20px;
	color: #969B9E;
}

#f
{
	color: #2F87D5;
	display: inline;
}

#o
{
	color: #4F6B83;
	display: inline;
}

#l
{
	position: relative;
	width: 250px;
	margin-left: 720px;
}

#g
{
	position: absolute;
	width: 500px;
	top: 50px;
	padding-left: 20px;
}

.p
{
	
	color: #5C5F63;
}

#w
{
	padding-left: 20px;
}

.j
{
	color: #6F6C6C;
}

.v
{
	color: #5C5F63;
}

div.absolute3
{
    position: absolute;
		top: 0px;
		left: 1030px;
		right: 0;
		width: 290px;
		height: 500px;
		padding-left: 7px;
		border-radius: 10px;
		border: 3px solid;
		background: url(IMG/mob.jpg) no-repeat;
		background-size: 300px 500px;
}

div.absolute4
{
    position: absolute;
    top: 800px;
	left:0px;
    right: 0;
    width: 1330px;
    height: 40px;
	color: #505356;
	padding-left: 7px;
}

header
{
	overflow:hidden;
}


li 
{
    float: left;
	text-decoration: none;
	list-style-type: none;
	padding-right:10px;
}

table 
{
    border-collapse: collapse;
    width: 100%;
}

th, td 
{
    text-align: left;
    padding: 8px;
}

.d a 
{
    display: block;
    color: white;
    padding-bottom: 20px;
    text-decoration: none;
	bottom: 40px;
}

div.c
{
	position: relative;
	left: 120px;
	top: 10px;
	width: 1330px;
    height: 100px;
}

#k
{
	position: absolute;
	left: 27px;
	bottom: 0px;
	top: -25px;
	padding-left: 100px;
	width: 50px;
	height: 100px;
}

#u
{
	position: absolute;
	left: 1360px;
	bottom: 5px;
	padding-left: 0px;
	width: 0px;
}

#x
{
	position: absolute;
	top: 20px;
	height: 50px;
	left:230px;
	text-indent: 40px;
}

#q
{
	padding-left: 17px;
	padding-right: 25px;
}

h1
{
	padding-left: 5px;
	padding-right: 17px;
}

#z a
{
	text-decoration:none;
	font-size:20px;
}

#z a
{
	text-decoration:none;
	color: #579DD1;
}
			
#z a:hover 
{ 
				color:#1C9DA3;
				text-decoration:underline;
			}
			
		
		</style>
	</head>

<body>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		Countries
	</title>
	
	<link rel="stylesheet" href="css/1.5.css"/>
</head>
<body>
	<div class="c">
		<img src="IMG/caltex.jpg" alt="error" style="width:1330px;">
	</div>
	
	<div class="head">
			<div id="k">
				<img src="IMG/logo.jpg" alt="error" style="width:100px;height:108px;">
			</div>
			
			<div id="u">
				<a href="admin_login.php"><img src="IMG/login.jpg" alt="error" style="width:105px;height:30px;"></a>
			</div>
		<header>
			<nav>
				<ul class="n">
					<h3>
						<div id="x">
						<li class="d"><a href="f.php">HOME</a></li>
						<li class="d"><a href="countries.html">COUNTRIES</a></li>
						<li class="d"><a href="matches.php">MATCHES</a></li>
						<li class="d"><a href="ranking.php">RANKINGS</a></li>
						</div>
					</h3>	
				</ul>
			</nav>
		</header>
	</div>
	
	<div class="relative">
	
		<div class="absolute1">
			<h1>
				Countries <div id="o">/</div> Pakistan <div id="o">/</div> <div id="f">Player</div>
			<br><hr></h1>
		</div>
		
		<div class="absolute2">

<?php
$conn = mysql_connect("localhost","root","");
$db = mysql_select_db('cricpedia',$conn);

	$query1="select * from player where Country='Pakistan'";
	
	$run1=mysql_query($query1);
	while ($row=mysql_fetch_array($run1))
{
	
	
	$p_id=$row[0];
    $p_fn1=$row[1];
	
	
	?>
	
		<div id="z">
		<a href='p_s1.php? stats=<?php echo $p_id; ?>' > <?php echo $p_fn1; ?></a><h1> </h1><br>
		</div>
		
	
	<?php } ?>
	
	</div>
	
	<div class="absolute3">
			
		</div>
		
		<div class="absolute4">
			<footer>
				<h5><b>SITEMAP    |    FEEDBACK    |    ABOUT US    |    PRIVACY POLICY    |    TERM OF USE</b></h5>
			</footer>
		</div>
	</div>
</body>
</html>













