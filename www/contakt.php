<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Контакты</title>
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
         <ol id=""><a href="index.php">Главная</a></ol>
         <ol id=""><a href="register.php">Регистрация</a></ol>
         <ol id="active"><a href="contakt.php">Контакты</a></ol>
      </ul>
   </div>
</div>
<!--Конец аголовка(End heading)-->
<div id="bodyf">

<div id="contakt"> 
<img src="images/email.png" id="imemail"><br>
<span id="con2">Если у Вас появились вопросы, пожалуйста, обращайтесь к нам , и Мы с удовольствием ответим на все Ваши вопросы.</span>

</div>

<div id="email">
<span id="vx">Возник вопрос ?</span> 
<div id="email1">
<form method="post" action="" >
<br>
 <span class="fontreg">Введите Ваше имя :</span><br>
 <input type="text"  name="name" placeholder="Введите Ваше имя" required class="em1"> 
 <br>
 <span class="fontreg">Введите Ваш e-mail :</span><br>
 <input type="email" placeholder="Для ответа на Ваш вопрос"  class="em1" name="email" ><br>

 <span class="fontreg">Задайте вопрос :</span><br>
 <textarea placeholder="Введите свой вопрос" class="em2" name="text" wrap="soft"></textarea>
<input type="submit"  name="sandemail" value="Отправить" id="rg2">
</form>
<?php


if ($_POST['sandemail']=="Отправить"){
$res = mail("nesterenko15953@gmail.com","Вопрос с сайта","С сайта была получен вопрос с такими данными:\n Имя:$_POST[name];\n E-mail для ответа:$_POST[email];\n Вопрос:$_POST[text];\n");
}
?>
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
