<?php 
// Start the session
session_start();

//jika ada session 
if ($_SESSION['level']=='admin'){
	//maka diarahkan ke halaman admin
	header("Location: halamanutama/");
} elseif ($_SESSION['level']=='mahasiswa') {
	header("Location: ../mhs/halamanutama/");
}
//jika tidak, 
else {
	//maka akan diaraahkan ke halaman login
	header("Location: login/");
}
?>