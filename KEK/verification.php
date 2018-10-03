<html>
<head>
<title>Текстовое поле</title>
</head>
<body>
<?php
include_once("bd.php");

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите логин"> Введите логин!</font>';
} 
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="В поле "Логин" введены недопустимые символы!">В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
}
elseif(empty($_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите пароль !">Введите пароль!</font>';
}
elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Пароль слишком короткий!">Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
}
elseif(empty($_POST['password2'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите подтверждение пароля!">Введите подтверждение пароля!</font>';
}
elseif($_POST['password'] != $_POST['password2']) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введенные пароли не совпадают!">Введенные пароли не совпадают!</font>';
}
elseif(empty($_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="Введите E-mail!">Введите E-mail! </font>';
}
elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['email'])) {
echo '<br><font color="red"><img border="0" src="error.gif" alt="E-mail имеет недопустимий формат!">E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
}
?>
</body>
</html>
