<?
$frd=$_GET['frd'];
$name=$_GET['id'];
?>
<html>
<head>
<meta charset="utf-8">
<title>Мой профиль</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
         <ol id="active"><a href="profile.php?<?echo "id=$name&frd=$frd" ?>">Главная</a></ol>
         <ol id=""><a href="index.php">Выход</a></ol>
      </ul>
   </div>
</div>
<!--Конец аголовка(End heading)-->
<div id="bodyf">
<div class="curled">

<div id="profiletext">
<span >Привет, <?=$name?>, меня зовут <?=$frd?>,я постараюсь помоч тебе изуть английский язык,<br> мы будем вести с тобой диалог  на выбраную тобой тему,список тем ты  можеш посмотреть ниже.<br>Давай выбирай скорей , не будем терять время зря!!</span>
</div>
<div id="profileimg">
<img src="images/<?= $frd?>1.png">
</div>
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
<div id="ikon1">
<div id="ikon">
<a href="dialog.php?<?echo "link=".$rez["$b"]."&frd=$frd&name=$name" ?>"><img src="images/bd.png"></a>
<p><?echo $rez["$b"];?> </p>
</div>
</div>
<?}?>
</div>
</div>

<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
22.12.2015
</div>
</body>
</html>
