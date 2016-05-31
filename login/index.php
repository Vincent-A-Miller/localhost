<?php
$username = "codeword";
$password = "youbetterknowthepassword";
$nonsense = "LOUD NOISES";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<html>
<head>
  <title>India : Miller</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/custom.css" >

  <script src="../dist/ajax/jquery.min.js"></script>
  <script src="../dist/js/bootstrap.min.js"></script>
</head>
<body>

<a href = "http://10.183.1.9"  target = "_blank">
  </a>
 <!-- -->
 
 
 
Congrats, you get absolutely NOTHING!
</body>
</html>


<?php
      exit;
   } else {
      echo "Put the Cookie Down!";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Nope.";
      exit;
   } 
     	 else if ($_POST['keypass'] != $password) {
     header ('http://10.183.1.9');
      echo "WRONG!";
       exit;
   }
   
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } 

}
?>
<style type="text/css">

div.content{
font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18pt;
}

-->
</style>
<div class="content">
<center>
<img src = "blu icon.png" height = "200">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label>USER NAME<input type="text" name="user" id="user" /> </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>PASSWORD <input type="password" name="keypass" id="keypass" /> </label>
<input type="submit" id="submit" value="Login" />
</form>
</center>
</div>
