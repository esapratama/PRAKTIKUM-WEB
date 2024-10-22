<!DOCTYPE html>
<html>
<body>

<?php
session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Session variables are set.";
?>

</body>
</html>