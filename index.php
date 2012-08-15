<?php
if ($_SERVER['HTTP_HOST'] == '127.0.0.1' || 'localhost')
{
	echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'];
}
elseif ($_SERVER['HTTP_HOST'] == 'thepeakdistrict.org.uk')
{
	echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'];	3
}
elseif ($_SERVER['HTTP_HOST'] == 'dev.thepeakdistrict.org.uk')
{
	echo 'HTTP_HOST ' . $_SERVER['HTTP_HOST'];
}
?>
