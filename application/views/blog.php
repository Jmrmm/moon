<?php
include("assets/time_stamp.php");
?> 

<!doctype html>
<head>
<title>Site</title>
<link rel="stylesheet" href="assets/css/styles.css">
<link href="css/estilos.css" type="text/css" rel="stylesheet" media="screen" />
<!--mobile-->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script type="text/javascript" >
$(function() {
$("#tweet_submit").click(function() 
{
var tweet = $("#tweet").val();
var dataString = 'tweet='+ tweet;
if(tweet!='')
{
$.ajax({
type: "POST",
url: "assets/post_tweet.php",
data: dataString,
cache: false,
success: function(html){
$("#tweet").val('');
$("#content").prepend(html);
}
});
}return false;
}); });
</script>

</head>

<body>
	<div class="menu">
	<div class="menu2">
		<ul id="menu">
			<li><a href="site">Home</a></li>
			<li><a href="sobre">Sobre</a></li>
			<li><a href="contactos">Contactos</a></li>
			<li><a href="blog">Blog</a></li>
		</ul>
	</div>
	</div>

	<div class="box1">
<div id="container">

<div id="sidebar">
<div id='logo'><img src='assets/includes/moon.gif'></div>
<form action="#" method="POST">
<div><textarea id="tweet" name="tweet" placeholder="Compose new Howl"></textarea></div>
<input type="submit"  value=" Howl " class="btn" id="tweet_submit"/> 
</form>
<div id="flash_result"></div>
</div>

<div id="main">
<div id='heading'>Howls</div>
<div id='content'>
<?php
foreach ($person as $row)
{
$time = $row->age;
echo "<div class='tweet_box'>";
echo "<div class='tweet_user'><img class='user_img' src='assets/includes/wolf.png'></div>";
echo "<div class='tweet_body'>";
?>
<div class='tweet_time'><?php time_stamp($time);?></div>
<?php
echo "<div><b><a href='https://twitter.com/JMRMM76'>JMM</a></b> <span class='uname'>@JMRMM76</span></div>";
echo "<div class='tweet_text'>".utf8_decode($row->name)."</div>";
echo "</div></div>";
}

?>
</div>
</div>

</div>
	</div>
</body>

</html>
