<?php 
include 'includes/config.php';
include 'includes/header.php';



 if (isset($_POST['submit'])) { 



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] | !$_POST['email'] ) {

 		die('Nu ai completat toate campurile, mergi <a href="register.php">inapoi</a>.');

 	}




 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];


 $check = mysql_query("SELECT Name FROM players WHERE Name = '$usercheck'")
or die(mysql_error());
 $check2 = mysql_num_rows($check);
 if ($check2 != 0) {

 		die('Scuze, numele <b>'.$_POST['username'].'</b> este deja utilizat, mergi <a href="register.php">inapoi</a>. ');

}


	$getlogin = "login";
 	if ($_POST['pass'] != $_POST['pass2']) {

 		die('Parolele nu corespund, mergi <a href="register.php">inapoi</a>. ');

 	}
 	$insert = "INSERT INTO players (Name, Password, Email)

 			VALUES ('".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."')";

 	$add_member = mysql_query($insert);
 	?>


<center>
 
 <h1>Inregistrat</h1>

 <p>Multumim, te-ai inregistrat. Acum te poti loga pe server sau pe <a href="login.php">site</a>.</p>
 
 </center>
 <?php 
 } 

 else 
 {	
 ?>


 <center>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

 <table border="0">

 <tr><td><h6>Username:</h6></td><td>

 <input type="text" name="username" maxlength="15">

 </td></tr>

 <tr><td><h6>Password:</h6></td><td>

 <input type="password" name="pass" maxlength="15">

 </td></tr>

 <tr><td><h6>Confirm Password:</h6></td><td>

 <input type="password" name="pass2" maxlength="15">

 </td></tr>
 <tr><td><h6>Email:</h6></td><td>

 <input type="email" name="email" maxlength="40">

 </td></tr>

 <tr><td colspan='2' align="center"><br><input type="submit" name="submit" 
value="Register"></td></tr> </table>

 </form>
 </center>


 <?php
 }
 ?> 