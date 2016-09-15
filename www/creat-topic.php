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
<span id="vx">Добавления новой темы</span> 
<div id="entry1">
<form method="post" action="" >
<br>
 <span class="fontreg">Введите название темы :</span><br>
 <input type="text"  name="question" placeholder="Введите название темы" required class="reg1"> 
 <br>

 <input type="submit" value="Добавить запись" name="registration" id="rg2">
<?php
try {
    $dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$question=$_POST['question'];

$registration=$_POST['registration'];
    if ($registration=="Добавить запись"){
    $sql = "CREATE TABLE
        $question
     (
        `id` INT(10) UNSIGNED NULL AUTO_INCREMENT,
        `question` VARCHAR(400) NULL,
        `answer1` VARCHAR(400) NULL,
		`answer2` VARCHAR(400) NULL,
		`answer3` VARCHAR(400) NULL,
		`link1` INT(10) UNSIGNED NULL ,
		`link2` INT(10) UNSIGNED NULL ,
		`link3` INT(10) UNSIGNED NULL,
        PRIMARY KEY(`id`)

    )
";
    $dbh->exec($sql);
	 $link=$_GET['link'];
    //header('Location:intex.html');
	?>
	<script type="text/javascript">
window.location = "myprofile.php"
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