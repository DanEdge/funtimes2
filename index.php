<?php
if ($_SERVER['HTTP_HOST'] == '127.0.0.1' || 'localhost')
{
	echo $_SERVER['HTTP_HOST'];
}
elseif ($_SERVER['HTTP_HOST'] == 'thepeakdistrict.org.uk')
{
	echo $_SERVER['HTTP_HOST'];
}
elseif ($_SERVER['HTTP_HOST'] == 'dev.thepeakdistrict.org.uk')
{
	echo $_SERVER['HTTP_HOST'];
}
?>
