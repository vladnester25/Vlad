<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<!--Заголовок(heading)-->
<div id="header1">
            <div id=logo>
              <img src="images/logo.png" >
            </div>
       <div class="lang">
        
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
<?
try {
    $dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$id=$_GET['id'];
$link=$_GET['link'];
$stmt = $dbh->prepare("SELECT * FROM $link WHERE id = $id LIMIT 1"); 
    $stmt->execute(); 
    $record = $stmt->fetch();
	
?>	
<div id="entry1">
<form method="post" action="">
<br>
 <span class="fontreg">Введите текст вопроса :</span><br>
 <input type="text"  name="question" placeholder="Введите вопрос" required class="reg1" value="<?= !empty($record['question']) ? $record['question'] : '' ?>"> 
 <br>
 <span class="fontreg">Введите ответ 1:</span><br>
 <input type="text"  name="answer1"  placeholder="Введите ответ №1"  autofocus required class="reg1" value="<?= !empty($record['answer1']) ? $record['answer1'] : '' ?>"><br>
  <span class="fontreg">Введите ответ 2:</span><br>
 <input type="text" name="answer2" placeholder="Введите ответ №2"  autofocus class="reg1" value="<?= !empty($record['answer2']) ? $record['answer2'] : '' ?>"><br>
  <span class="fontreg">Введите ответ 3:</span><br>
 <input type="text" name="answer3" placeholder="Введите ответ №3"  autofocus class="reg1" value="<?= !empty($record['answer3']) ? $record['answer3'] : '' ?>"><br>
  <span class="fontreg">Номер следующего вопроса 1:</span><br>
 <input type="text" name="link1" placeholder="Введите номер следующего вопроса №1"  autofocus class="reg1" value="<?= !empty($record['link1']) ? $record['link1'] : '' ?>"><br>
  <span class="fontreg">Номер следующего вопроса 2:</span><br>
 <input type="text" name="link2" placeholder="Введите номер следующего вопроса №2"  autofocus class="reg1" value="<?= !empty($record['link2']) ? $record['link2'] : '' ?>"><br>
  <span class="fontreg">Номер следующего вопроса 3:</span><br>
 <input type="text" name="link3" placeholder="Введите номер следующего вопроса №3"  autofocus class="reg1" value="<?= !empty($record['link3']) ? $record['link3'] : '' ?>"><br>
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
$link1=$_POST['link1'];
$link2=$_POST['link2'];
$link3=$_POST['link3'];

$registration=$_POST['registration'];
    if ($registration=="Добавить запись"){
echo $id;
    //$sql = "INSERT INTO $link (`id`, `question`, `answer1`, `answer2`, `answer3`, `link1`, `link2`, `link3`) VALUES (NULL, '$question', '$answer1', '$answer2', '$answer3', '$link1', '$link2', '$link3');";
     $sql = "UPDATE $link SET question='$question', answer1='$answer1', answer2='$answer2', answer3= '$answer3', link1= '$link1', link2= '$link2', link3= '$link3' WHERE id='$id';";
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