<html>
<head>
<title>Текстовое поле</title>
</head>
<body>
<?php

if (isset($_POST['submit'])){
    if(empty($_POST['login']))  {
    echo "Введите логин";
}
	
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo "В поле логин недопустимые символы";
}
elseif(empty($_POST['password'])) {
echo  "Введите пароль!";
}
elseif($_POST['password'] != $_POST['password2']) {
echo "Введённые пароли не совпадают";
}



</body>
</html>
