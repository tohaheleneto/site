<?php
date_default_timezone_set('Europe/Moscow'); 
if(isset($_POST['date']))  {
//создано при поддержке николая сусоева


//echo $_POST['date'].'<br>';
$array = date_parse($_POST['date']);
 $day = strftime("%d");
 $month = strftime("%m");
 $year = strftime("%Y");
//echo $array['day'].'<br>';
//echo $array['month'].'<br>';
//echo $day.'<br>';
//echo $month.'<br>';
if (($array['month'] < $month) || (($array['month'] == $month) && ($array['day'] <= $day)))
	echo "твой день рождения уже был в этом году";
else 
{

	$_POST['date'] = substr_replace($_POST['date'], $year, 0, 4);
	$datetime1 = date_create($_POST['date']);
	$datetime2 = new DateTime();
	$res = date_diff($datetime2,$datetime1);
	echo "До твоего дня рождения ". $res->days . " дней"; 
}
}
?>
<html> 
<head> 
<title> День рождения </title>
<meta charset="utf-8">
</head>

 <body> 
 <form method = "post" action="3.php"/> 
 Введите дату рождения 
<input type="date" id="date" name="date"/> 
 <input type= "submit"/> 
 </form>
 </body> 