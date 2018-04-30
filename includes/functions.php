<?php 

	function auth($lvl){
		if(!isset($_SESSION['connecte']) || $_SESSION['lvl'] < $lvl)
		{
		header("Location:index.php");
		die();
		}
	}
?>

