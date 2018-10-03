<html>
<head>
<title>Текстовое поле</title>
</head>
<body><center>
<h1>Текстовое поле</h1>
<FORM METHOD="post" ACTION="le.php">
Введите ваше имя
<input name="Name" type="text">
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>
<?php
echo $_REQUEST ["Name"];
?>
<center>
<h1>Многострочное поле</h1>
<FORM METHOD="post" ACTION="le.php">
Перечислите ваших лучших друзей:
<br>
<textarea name="Friends" cols="50" rows="5">
1.
2.
3.
4.
5.
</textarea>
<br><br>
<input type=SUBMIT value="OK">
</FORM>
</center>

</body>
</html>
