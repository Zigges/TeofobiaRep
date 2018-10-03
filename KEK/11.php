<html>
<head>
<title>Использование скрытого поля</title>
</head>
<body><center>
<h1>Использование скрытого поля</h1>
<FORM METHOD="post" ACTION="11.php">
Нажмите на кнопку для отображения скрытых данных
<input name="Hidden" type="hidden" value="Большой секрет!">
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
echo $_REQUEST["Hidden"];
?>

</body>
</html>
