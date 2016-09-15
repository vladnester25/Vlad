<?
$link=$_GET['link'];
$frd=$_GET['frd'];
$name=$_GET['name'];
$ans=$_POST['ans'];
if (empty($_POST['answerform']))
     {$answerform=0;}
	 else{	 
$answerform=$_POST['answerform'];}

try {

    $dbh = new PDO('mysql:host=saitpr;dbname=questions', 'root', '');
} catch (PDOException $e) {
    print "Error!: " .$e->getMessage() . "<br/>";
    die();
	}
	
$result = $dbh->query("SELECT * FROM $link LIMIT 1 "); 
    foreach ($result as $row) : 
    endforeach; 

$dialog = $dbh->query("SELECT * FROM $link WHERE id=$answerform LIMIT 1"); 

   foreach ($dialog as $rez) : 
   endforeach; 
   if ($ans=="Ответить" and empty($rez['link1']) and empty($rez['link2']) and empty($rez['link2']) ){?>
   <script type="text/javascript">
window.location = "profile.php?id=<?= $name?>&frd=<?=$frd?>"
</script>
<?}
if ($ans=="Ответить"){?>
        <script>
	
		 window.onload=function(){
var el, s;
el=document.getElementById("newEl");
s=el.innerHTML;
s=s+'<div id="profiletext" style="display:block;"><?= $rez['question']?></div>'+'<div style=" display:block"><img src="images/<?= $frd?>2.png"></div>';
el.innerHTML=s;
 

 };
 // window.onload=function(el){
 // el.parentNode.removeChild(el);
 //};
 
 

</script>
<?}?>			  


<html>
<head>
<meta charset="utf-8">
<title>Диалог</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
</script>
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
<span><?= $row['question']?></span> 
</div>
<div id="profileimg">
<img src="images/<?= $frd?>2.png">
</div>
<div id="newEl" ></div>
</div>
<div id="dialog">
<form method="post" action="dialog.php?<?echo"link=$link&frd=$frd&name=$name"?>" >
<br>
 <? if ($answerform==0){?>
<?if(!empty($row['answer1']) or !empty($rez['answer1'])){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" value="<?if (!empty($rez['link1'])){echo $rez['link1'];}else{echo $row['link1'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer1'])){echo $rez['answer1'];}else{echo $row['answer1'];}?></span><br>
 <?}?>
 
<?if(!empty($row['answer2'])){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" required value="<?if (!empty($rez['link2'])){echo $rez['link2'];}else{echo $row['link2'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer2'])){echo $rez['answer2'];}else{echo $row['answer2'];}?></span><br>
<?}?>
<?if(!empty($row['answer3']) or !empty($row['answer3']) ){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" required value="<?if (!empty($rez['link3'])){echo $rez['link3'];}else{echo $row['link3'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer3'])){echo $rez['answer3'];}else{echo $row['answer3'];}?></span><br>
<?} 
  } else{?>
<?if(!empty($rez['answer1']) or !empty($rez['answer1'])){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" value="<?if (!empty($rez['link1'])){echo $rez['link1'];}else{echo $row['link1'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer1'])){echo $rez['answer1'];}else{echo $row['answer1'];}?></span><br>
 <?}?>
 
<?if(!empty($rez['answer2'])){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" required value="<?if (!empty($rez['link2'])){echo $rez['link2'];}else{echo $row['link2'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer2'])){echo $rez['answer2'];}else{echo $row['answer2'];}?></span><br>
<?}?>
<?if(!empty($rez['answer3']) or !empty($row['answer3']) ){?>
     <input type="radio"  name="answerform" placeholder="Введите вопрос" required value="<?if (!empty($rez['link3'])){echo $rez['link3'];}else{echo $row['link3'];}?>" class="dialog"> 
     <span class="fontdialog"><?if (!empty($rez['answer3'])){echo $rez['answer3'];}else{echo $row['answer3'];}?></span><br>
<?}}?> 
  

<input type="submit" value="Ответить" name="ans" id="rg2" ">
</div>
</form>
</div>

<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
0822.12.2015
</div>
</body>
</html>