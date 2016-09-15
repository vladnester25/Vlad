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
<a class="button7"  href="creat-topic.php">Добавить тему</a>
<? 
try {

    $dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " .$e->getMessage() . "<br/>";
    die();
	}
	$stmt = $dbh->prepare("SHOW TABLES FROM questions"); 
$stmt->execute(); 
$rez=$stmt->fetchAll(PDO::FETCH_COLUMN,0);
$a=count($rez);

for($b=0;$b!==$a;$b++){ ?>
<div id="ikon">
<a href="myadmin-edit.php?<?echo "link=".$rez["$b"] ?>"><img src="images/bd.png"></a>
<p><?echo $rez["$b"];?> </p>
</div>
<?}?>
</div>
<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
22.12.2015
</div>
</body>
</html>