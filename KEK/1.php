<html>
<head>
<meta charset="UTF-8">
PUCJlAH PRIBET
<title>Òåêñòîâîå ïîëå</title>
</head>
<body>
<center>
<h1>Òåêñòîâîå ïîëå</h1>
</center>
<FORM METHOD="post" ACTION="1.php">

Ââåäèòå âàøå èìÿ:
<input name="Name" type="text"> <br> </br>

Ââåäèòå ïàðîëü:
<input name="pass1" type="password"> <br> </br>

Ââåäèòå ïîâòîðíî ïàðîëü:
<input name="pass2" type="password"> <br> </br>
<?php
if ($_POST['pass1']!= $_POST['pass2']) 
            {
            echo ("Ïàðîëè íå ñîâïàäàþò");
            }
?>
Ââåäèòå âàø @mail:
<input name="Mail" type="text"> <br> </br>
Òåìà ñîîáùåíèÿ:

<input name="SMS" type="text"> <br> </br>
Cîîáùåíèå:
<textarea name="Friends" cols="20" rows="5">

</textarea><br> </br>
<input type=SUBMIT value="Ïðîâåðêà">

</FORM>


</body>
</html>
