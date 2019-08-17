<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="admin-style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Home Admin</title>
</head>
<body>
		<ul id="nav">
		<li><a href="#">Link1</a></li>
		<li><a href="#">Link2</a></li>
		<li><a href="#">Link3</a></li>
		<li id="notification_li">
		<a href="#" id="notificationLink">Notifications</a>
			<span id="notification_count">3</span>

			<div id="notificationContainer">
			<div id="notificationTitle">Notifications</div>
			<div id="notificationsBody" class="notifications"></div>
			<div id="notificationFooter"><a href="#">See All</a></div>
			</div>

		</li>
		<li><a href="#">Link4</a></li>
		</ul>
		<script>
			$(document).ready(function()
			{
			$("#notificationLink").click(function()
			{
			$("#notificationContainer").fadeToggle(300);
			$("#notification_count").fadeOut("slow");
			return false;
			});

			//Document Click hiding the popup 
			$(document).click(function()
			{
			$("#notificationContainer").hide();
			});

			//Popup on click
			$("#notificationContainer").click(function()
			{
			return false;
			});

			});
		</script>
</body>
</html>