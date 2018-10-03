<html>
<head>
<title>Использование списков</title>
</head>
<body><center>
<h1>Использование списков</h1>
<FORM METHOD="post" ACTION="9.php">
Выберите любимые фрукты:
<br><br>
<select name="Food[]" multiple="multiple">
<option>Апельсин</option>
<option>Груша</option>
<option>Персик</option>
<option>Яблоко</option>
</select>
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
foreach ($_REQUEST["Food"] as $f)
{
echo $f,"<br>";
}
?>

</body>
</html>
