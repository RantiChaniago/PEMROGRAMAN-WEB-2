<?php 
session_start();
	if (isset($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];

	if ($user = "RANTI" && $pass = "123") {
		$_SESSION['login'] = $user;
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<center><h2>Klik <a href='pert14_session2.php'>disini (session2.php)</h2><center>";
	}else {
	
	}
}
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="post">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <input class="btn" type="submit" name="login" value="Login">
            </form>
        </div>     
    </body>
</html>