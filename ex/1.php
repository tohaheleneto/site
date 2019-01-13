<head>
<meta charset="utf-8">
</head>
<body>
<?php if(isset($_POST ['name'])) 
	$name = $_POST['name']; 
else $name=""; 
?>
<?php
date_default_timezone_set('Europe/Moscow'); 
 $hour = strftime("%H");
 if ($hour >= 5 && $hour < 12 ) 
	{ echo "Доброе утро $name"; }
 elseif (($hour >=12) && ($hour < 18))
	{ echo "Добрый день $name"; } 
 elseif ($hour >=18 && $hour < 24) 
	{ echo "Добрый вечер $name"; } 
 else 
	{ echo "Добрый ночи $name"; } ?>
</body>