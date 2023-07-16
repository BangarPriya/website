<html>
<head>
<title>connect database</title>
</head>
<body>

<?php
$CONNECTION = mysqli_connect("localhost","root","");
if(!$CONNECTION)
{
die("Couldn't connect");
}
else
{
echo "Connected Successfully"." <br><br>";
}
?>
</body>
</html>