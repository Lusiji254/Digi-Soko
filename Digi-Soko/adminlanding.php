<?php 
	include('db.php');
	session_start();
	if(!isset($_SESSION["email"]))
	{
		header("location:Veg.LogIn.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<link rel="stylesheet" type="text/css" href="landing.css">
	<script type="text/javascript">
		function togglemenu(){

			document.getElementById('sidebar').classList.toggle('active');
		}
	</script>
</head>
<body>
	<header>
	<div class="profile_info">
			
				<strong><?php echo $_SESSION['email']; ?></strong>
					<small>
						<i  style="color: #888;"></i> 
						<br>
						<a href="welcome.php?logout='1'" style="color: red;">logout</a>
					</small>

				
			</div>
			</header>

<div id="sidebar" onclick="togglemenu()">
	<div class="toggle-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul>
		<li><a href="product_profile.php">Market</a></li>
		<li><a href="requests_edits.php">Requests</a></li>
		<li><a href="">Orders</a></li>
		<li><a href="convo.html">Conversation</a></li>
		
	</ul>
</div>
	
	
		</div>
	</div>
</body>
</html>