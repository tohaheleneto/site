<HTML>

<HEAD>

<TITLE>

test

</TITLE>

</HEAD>

<BODY>

<FORM method="POST" action="9.php">

Knopka

<TEXTAREA name="data" cols="5" rows="1">

</TEXTAREA>

<BR>

<BR>

<BR>

<INPUT type="submit" name="knopka" value="press" />

</FORM>








<?php
if( isset( $_POST['data'] ) )
	{
$arr = $_POST['data'] * 1;



echo "result<br>";
echo base_convert($arr , 10 , 2); # изменять как надо

}

?>
</BODY>

</HTML>