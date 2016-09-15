<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>English-Friend</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<!--Заголовок(heading)-->
<div id="header1">
            <div id=logo>
              <img src="images/logo.png" >
            </div>
       <div class="lang">
          <ul id="a12">
         <ol id=""><a href="myprofile.php">Главная</a></ol>
         <ol><a href="index.php">Выход</a></ol>
      </ul>
       </div>
   <div class="navigation">
      <ul id="a12">
         <ol id=""><a href="myprofile.php">Главная</a></ol>
         <ol><a href="index.php">Выход</a></ol>
      </ul>
   </div>
</div>
<!--Конец аголовка(End heading)-->
<div id="bodyf">
<div id="Register">
<span id="vx">Добавления вопроса</span> 
<div id="entry1">
<form method="post" action="" >
<br>
 <span class="fontreg">Введите текст вопроса :</span><br>
 <input type="text"  name="question" placeholder="Введите вопрос" required class="reg1"> 
 <br>
 <span class="fontreg">Введите ответ 1  :</span><br>
 <input type="text"  name="answer1"  placeholder="Введите ответ №1"  autofocus required class="reg1"><br>
  <span class="fontreg">Введите ответ 2  :</span><br>
 <input type="text" name="answer2" placeholder="Введите ответ №2"  autofocus class="reg1"><br>
  <span class="fontreg">Введите ответ 3  :</span><br>
 <input type="text" name="answer3" placeholder="Введите ответ №3"  autofocus class="reg1"><br>
 <input type="submit" value="Добавить запись" name="registration" id="rg2">
<?php
try {
    $dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$question=$_POST['question'];
$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];
 $link=$_GET['link'];
$registration=$_POST['registration'];
    if ($registration=="Добавить запись"){
    $sql = "INSERT INTO $link (`id`, `question`, `answer1`, `answer2`, `answer3`) VALUES (NULL, '$question', '$answer1', '$answer2', '$answer3');";
    $dbh->exec($sql);
	 $link=$_GET['link'];
    //header('Location:intex.html');
	?>
	<script type="text/javascript">
window.location = "myadmin-edit.php?link=<?=$link;?>"
</script>
<?}?>

</form>
</div>
</div>
</div>
<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
22.12.2015
</div>
</body>
</html>