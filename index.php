<html>
<head>
</head>
<body>
<?php
define("HTTP_SERVER_HOST","localhost");
define("HTTP_REMOTE_SERVER_HOST","infinite-springs-5079.herokuapp.com");
$ff = explode('/',$_SERVER['REQUEST_URI']);

$file_name = $ff[count($ff)-1];
if (fopen("https://".HTTP_REMOTE_SERVER_HOST."/LP/".$file_name.'.php','r')){
	$html = file_get_contents ("https://".HTTP_REMOTE_SERVER_HOST."/LP/".$file_name.'.php');
	if (!$html) {
	    echo "<p>Unable to open remote file.</p>";
	    die();
	}else{
		echo $html;
	}
}else{
	echo "<p>There is now such file.</p>";
	die();
}


?>
<img src="https://<?=HTTP_REMOTE_SERVER_HOST;?>/stats/tracker.php?page=<?=$file_name;?>" style="width:0px;height:0px;">

</body>
<html>