<?php
include 'handler1.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>English-Friend</title>
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
         <ol id="active"><a href="index.php">Главная</a></ol>
         <ol id=""><a href="register.php">Регистрация</a></ol>
         <ol id=""><a href="contakt.php">Контакты</a></ol>
      </ul>
   </div>
</div>
<!--Конец аголовка(End heading)-->
<div id="bodyf">
<div id="entry">
<span id="vx">Вход в личный кабинет</span> 
<div id="entry1">
<form  action="index.php" method="post" >
<span class="vx1">Логин:</span><br>
<input type="email" name="login" placeholder="Введите Ваш e-mail" required autofocus class="vx2">
<?
              if ($loginpr==2) {?>
			  <span class="fontregeror">Ведений логин занят</span><br>
              <?}?>
<br>
<span class="vx1">Пароль:</span><br>
<input type="password" name="password" placeholder="Введите Ваш пароль" required class="vx2">
 <?
			   if ($paspr==2) {?>
			 <span class="fontregeror">Веденый пароль не совпадает</span><br>
              <?}?>
<br>
<input type="submit" value="Войти" class="vx3" name="vx" >
<input type="button" value="Регистрация" onclick=" location.href=' http://www.softtime.ru/'  " class="vx3"> 
</form>
</div>
</div>
<div id="content">
<span id="con1">Добро пожаловать!<br></span>
<span id="con2">English-Friend - это помощник изучения разговорного английского языка для новичков, методом диалога с помощью тестов.
В чем суть?<br>
Выбрав понравившегося героя и тему для обсуждения поступает вопрос, ответ на него ведет к новому вопросу и т.д. Таким образом формируется диалог.<br>
Вам скучно?Грустно?Одиноко? Побеседуйте с нашими героями!</span>

</div>
</div>
<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
22.12.2015
</div>
</body>
</html>
