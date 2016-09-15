<?php 

try {
$dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " .$e->getMessage() . "<br/>";
    die();
	}
 $link=$_GET['link'];

 $result = $dbh->query("SELECT * FROM $link "); 
              
?>
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
          <ul>
             <ol id="active">РУС</ol>
             <ol id=""><a href="contakt-ua.html">УКР</a></ol>
             <ol id="">ENG</ol>
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


 <a class="button7"  href="add-a-note.php?<?echo"link=".$link ?>">Добавить вопрос</a>
  
<table class="table_blur">
  <tr>
  	<th>ID</th>
  	<th>Текст Вопроса</th>
  	<th>Ответ №1</th>
  	<th>Ответ №2</th>
  	<th>Ответ №3</th>
    <th>Номер следующего вопроса №1</th>
  	<th>Номер следующего вопроса №2</th>
	<th>Номер следующего вопроса №3</th>
	<th>Изменения в БД</th>
  </tr>
  <?php foreach ($result as $row) : ?>
  <tr>
  	<td><?= $row['id'] ?></td>
  	<td><?= $row['question'] ?></td>  	
	<td><?= $row['answer1'] ?></td>  
	<td><?= $row['answer2'] ?></td>  
	<td><?= $row['answer3'] ?></td>  
  	<td><?= $row['link1'] ?></td>  	
  	<td><?= $row['link2'] ?></td>  	
	<td><?= $row['link3'] ?></td>  	
 <td>
      
      <a class="button24" href="update.php?link=<?echo "$link"?>&id=<?= $row['id'] ?>"> Изменить </a>
      <a class="button24" onclick="return confirm('Really delete?');" href="?link=<?echo "$link"?>&action=delete&id=<?= $row['id'] ?>"> Удалить</a>
  
    </td>
  </tr>
  <?php endforeach; ?>
  </table>
</div>
 <?$action=$_GET['action'];
   If ($action=="delete"){
   echo $link;
   $id=$_GET['id'];
   echo $id;
   $link=$_GET['link'];
    $dbh->exec("DELETE FROM $link WHERE id=$id");?>
	<script type="text/javascript">
window.location = "myadmin-edit.php?link=<?=$link;?>"
</script>
<?}?>
  
<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
22.12.2015
</div>
</body>

</html>