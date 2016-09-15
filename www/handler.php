<?php
$name=$_POST['pname'];
$login=$_POST['plogin'];
$password=$_POST['password'];
$passwordconfirm=$_POST['passwordconfirm'];
$gender=$_POST['gender'];
$frd=$_POST['frd'];
$registration=$_POST['registration'];
try {
    $dbh = new PDO('mysql:host=saitpr;dbname=mybase', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if ($registration=="Зарегистироватся"){
			  $stmt = $dbh->prepare("SELECT * FROM users "); 
              $stmt->execute(); 
              $rez = $stmt->fetchAll(PDO::FETCH_COLUMN, 2);
              if (in_array($login,$rez)) {
			  $logipr=1;}
             If ($password!=$passwordconfirm) {
			  $paspr=1;}}
if ($registration=="Зарегистироватся" and $paspr!=1 and $logipr!=1 ){
  $hide="nohide";
  $nohide="hide";
  $sql = "INSERT INTO `users` (`id`, `name`, `email`, `password`, `passwordconfirm`, `gender`, `friend`) VALUES (NULL, '$name', '$login', md5(trim('$password')), md5(trim('$passwordconfirm')), '$gender', '$frd');";
  $dbh->exec($sql);
    //header('Location: register.php');
	}
	else{
  $nohide="nohide";
  $hide="hide";
  }			  
?>