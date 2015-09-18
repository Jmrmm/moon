<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds s"; 
}
else if($minutes <=60)
{
   
   echo"$minutes m"; 
  
}
else if($hours <=24)
{
   
  echo"$hours h";
 
}
else if($days <=7)
{
 
  echo"$days d";
 
  
}
else if($weeks <=4)
{
 
  echo"$weeks w";

 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }


}
 


} 



?>