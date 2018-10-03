<html>
<head>
<title>Использование выключателей</title>
</head>
<body><center>
<h1>Использование выключателей</h1>
<FORM METHOD="post" ACTION="kok.php">
Ты пидор?
<input name="Check1" type="checkbox" value="Да">Да
<input name="Check2" type="checkbox" value="Пидора ответ">Пидора ответ
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
if (isset ($_REQUEST["Check1"]))
echo $_REQUEST["Check1"],"<br>";
if (isset ($_REQUEST["Check2"]))
echo $_REQUEST["Check2"],"<br>";
?>

</body>
