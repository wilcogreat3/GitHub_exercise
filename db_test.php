<?php
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {
		die('接続失敗！<br>'.mysqli_connect_error());
	} else {
		echo '接続成功';
	}
	?&gt;t;