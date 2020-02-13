<?php

$credentials = parse_ini_file('credentials.ini');

$sqlDatabase = $credentials['sqlDatabase'][0];
$sqlUsername = $credentials['sqlUsername'][0];
$sqlPassword = $credentials['sqlPassword'][0];

echo "<h3>Database URL: </h3><p>" . $sqlDatabase . "</p>";
echo "<h3>Username: </h3><p>" . $sqlUsername . "</p>";
echo "<h3>Password: </h3><p>" . $sqlPassword . "</p>";

?>
