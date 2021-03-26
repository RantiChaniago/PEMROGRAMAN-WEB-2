<?php 

	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();

		echo "<center><h1>Anda Berhasil LOGOUT</h1></center>";
		echo "<center><h2><a href='pert14_session1.php'>disini</a>untuk LOGIN kembali</h2></center>";

		echo "<center><h2>Anda sekarang tidak bisa masuk kehalaman <a href='pert14_session2.php'>session2.php</a></h2></center>";
	}
 ?>