<html>
<head>
<meta charset="UTF-8">
<title>pROVET</title>
</head>
<body>
<center>
<h1>��������� ����</h1>
</center>
<FORM METHOD="post" ACTION="1.php">

������� ���� ���:
<input name="Name" type="text"> <br> </br>

������� ������:
<input name="pass1" type="password"> <br> </br>

������� �������� ������:
<input name="pass2" type="password"> <br> </br>
<?php
if ($_POST['pass1']!= $_POST['pass2']) 
            {
            echo ("������ �� ���������");
            }
?>
������� ��� @mail:
<input name="Mail" type="text"> <br> </br>
���� ���������:

<input name="SMS" type="text"> <br> </br>
C��������:
<textarea name="Friends" cols="20" rows="5">

</textarea><br> </br>
<input type=SUBMIT value="��������">

</FORM>


</body>
</html>
