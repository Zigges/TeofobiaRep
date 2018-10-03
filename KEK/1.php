<html>
<head>
<meta charset="UTF-8">
<title>Текстовое поле</title>
</head>
<body>
<center>
<h1>Текстовое поле</h1>
</center>
<FORM METHOD="post" ACTION="1.php">

Введите ваше имя:
<input name="Name" type="text"> <br> </br>

Введите пароль:
<input name="pass1" type="password"> <br> </br>

Введите повторно пароль:
<input name="pass2" type="password"> <br> </br>
<?php
if ($_POST['pass1']!= $_POST['pass2']) 
            {
            echo ("Пароли не совпадают");
            }
?>
Введите ваш @mail:
<input name="Mail" type="text"> <br> </br>
Тема сообщения:

<input name="SMS" type="text"> <br> </br>
Cообщение:
<textarea name="Friends" cols="20" rows="5">

</textarea><br> </br>
<input type=SUBMIT value="Проверка">

</FORM>


</body>
</html>
