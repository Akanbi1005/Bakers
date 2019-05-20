<?php
$url != 'index.php';

if ($_SERVER['HTTP_REFERER'] == $url) {
    header('Location: login.php'); //redirect to some other page
    exit();
}

?>
<?php
    session_start();
	session_unset();
	session_destroy();

	header("Location: login.php");
	exit();
?>