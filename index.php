<?php
$currentHost = $_SERVER['HTTP_HOST'];
echo $_SERVER['HTTP_HOST'];
echo '<h1>Home page</h1>';
echo '<a href="git1.php">git1</a>';
echo '<a href="git2.php">git2</a>';
echo '<br />Made a change';
echo '<br />' . $currentHost;

?>