<form method="post" action="5.php">

<input type="text" name="day">
<input type="submit">

</form>
<?php
if (isset($_POST['day']))
{
	switch ($_POST['day']){
		case 'Понедельник':
		echo "Коммиссия";
		break;
		case 'Вторник':
		echo "сбор справок для военкомата";
		break;
		default:
		echo "вы ошиблись при вводе";
		break;
	}
	
}


?>