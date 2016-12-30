<?php
	include_once 'checker.php';

	if (checkUDID($_SERVER['HTTP_X_UNIQUE_ID']) == 'YES')
		header('Location: http://test.damar1st.de/packages.gz');
?>
