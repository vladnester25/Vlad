<?php
try {
    $dbh = new PDO('mysql:host=saitpr;dbname=mybase', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$login = !empty($_POST['login']) ? trim($_POST['login']):'';
$password = !empty($_POST['password']) ? md5(trim($_POST['password'])):'';
$vx=$_POST['vx'];
$stmt = $dbh->prepare("SELECT * FROM users WHERE email='$login' AND password='$password' LIMIT 1  "); 
$stmt->execute(); 
$rez=$stmt->fetch();

$result = $dbh->query("SELECT * FROM users WHERE email='$login' AND password='$password' LIMIT 1"); 
foreach ($result as $row):
$a=$row['name'];
$b=$row['friend'];
endforeach;



if ($rez['email']=="admin@gmail.com" and $rez['password']=="7730d3b95af16f9f076545928740d37c" ){
header('Location:myprofile.php');
die();
}

if ($vx=="Войти"){
			  $stmt = $dbh->prepare("SELECT * FROM users "); 
              $stmt->execute(); 
              $rez = $stmt->fetchAll(PDO::FETCH_COLUMN, 2);
			  
			  
			  $stmt = $dbh->prepare("SELECT * FROM users "); 
              $stmt->execute(); 
              $rez1 = $stmt->fetchAll(PDO::FETCH_COLUMN, 3);
			  
              if (in_array($login,$rez)){
			  $loginpr=1;}else{$loginpr=2;}
			  
			  If (in_array($password,$rez1)) {
			  $paspr=1;}else {$paspr=2;}
			    
			  if($loginpr==1 and $paspr==1){
			  
			  header("Location:profile.php?id=$a&frd=$b");
			  
			 }
             }

?>