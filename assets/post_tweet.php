<?php
include_once 'time_stamp.php';
include_once 'db.php';
if($_POST)
{

$tweet=$_POST['tweet'];
$time=time();

$query = "INSERT INTO howls (name, age) VALUES ('$tweet', '$time')";
$result=mysqli_query($connection, $query);

echo "<div class='tweet_box'>";
echo "<div class='tweet_user'><img class='user_img' src='assets/includes/wolf.png'></div>";
echo "<div class='tweet_body'>";
?>
<div class='tweet_time'><?php time_stamp($time);?></div>
<?php
echo "<div><b><a href='https://twitter.com/JMRMM76'>JMM</a></b> <span class='uname'>@JMRMM76</span></div>";
echo "<div class='tweet_text fadein'>$tweet</div>";
echo "</div></div>";
}
?>
