<?php
include 'handler.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Регистрация</title>
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
         <ol id="active"><a href="register.php">Регистрация</a></ol>
         <ol id=""><a href="contakt.php">Контакты</a></ol>
      </ul>
   </div>
</div>
<!--Конец аголовка(End heading)-->
<div id="bodyf">
<div id="<?= $nohide ?>">
 <span class="fontregss">Поздравляем Вы успешно зарегистрированы!</span>
</div>
<div  id="<?php if ($registration=="Зарегистироватся"){echo $hide;}else{echo Register;}?>" >
<span id="vx">Регистрация</span> 
<div id="entry1">
<form method="post" action="register.php" >
<br>
 <span class="fontreg">Введите Ваше имя :</span><br>
 <input type="text"  name="pname" placeholder="Введите Ваше имя" required class="reg1"> 
 <br>
 <span class="fontreg">Введите Ваш e-mail :</span><br>
 <input type="email" name="plogin" placeholder="Введите Ваш логин" required autofocus class="reg1"><br>
              <?
              if ($logipr==1) {?>
			  <span class="fontregeror">Ведений логин занят</span><br>
              <?}?>
 <span class="fontreg">Введите Ваш пароль :</span><br>
 <input type="password" name="password" placeholder="Введите Ваш пароль" required class="reg1">
 <br>
 <span class="fontreg">Подтвердите пароль :</span><br>
  <input type="password" name="passwordconfirm" placeholder="Введите Ваш пароль" required class="reg1"><br>
               <?
			   if ($paspr==1) {?>
			 <span class="fontregeror">Веденый пароль не совпадает</span><br>
              <?}?>
  <span class="fontreg">Выбирите свой пол :</span><br>
<figure id="gender1">
  <label for="Male">Муж.<br></label>
  <figcaption><input type="radio" name="gender" value="Male"  id="Male" required> </figcaption>
</figure>
   <figure id="gender1">
      <label for="Female">Жен.<br></label>
      <figcaption><input type="radio" name="gender" value="Female" id="Female" required></figcaption>
   </figure><br>
   <span class="fontreg">Выбирите себе друга для общения :</span><br>
     <figure class="fri">
     <label for="Bugs"> <img src="images/Bugs.png"></label>
     <figcaption><input type="radio" name="frd" value="Bugs" id="Bugs" required></figcaption>
    </figure>
       <figure class="fri">
        <label for="Daffy"> <img src="images/Daffy.png"></label>
        <figcaption><input type="radio" name="frd" value="Daffy" id="Daffy" required></figcaption>
       </figure>
          <figure class="fri">
            <label for="tweety"> <img src="images/tweety.png"></label>
            <figcaption><input type="radio" name="frd" value="tweety" id="tweety" required></figcaption>
          </figure>
            <figure class="fri">
              <label for="lola"> <img src="images/lola.png"></label>
               <figcaption><input type="radio" name="frd" value="lola" id="lola" required></figcaption>
            </figure><br>
<input type="submit" value="Зарегистироватся" name="registration" id="rg2">

</form>
</div>
</div>
</div>
<div id="footer">
© Нестеренко Владислав<br>
<a href="http://www.diit.edu.ua/">http://www.diit.edu.ua/</a><br>
08.10.2015
</div>
</body>
</html>