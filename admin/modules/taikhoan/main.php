<?php
	$ac=$_GET["ac"];
	if($ac=="them")
	{
		include("modules/taikhoan/them.php");
	}else
	{
		include("modules/taikhoan/sua.php");
	}
		include("modules/taikhoan/lietke.php");
?>