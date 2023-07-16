<html>
<head>
<title>create database</title>
<link rel="stylesheet" type="text/css" href="contactdataback.css">
</head>
<body>

<?php
$CONNECTION = mysqli_connect("localhost","root","","contact");
/*if(!$CONNECTION)
{
die("Couldn't connect");
}
else
{
echo "Connected Successfully"." <br><br>";
}
//Create database
$s = "CREATE DATABASE contact";
mysqli_query($CONNECTION,$s);*/

//Create Table
/*$s1="create table contact(
         U_Name varchar(20) primary key,
         Email_id varchar(20),
         Message varchar(40))";

   mysqli_query($CONNECTION,$s1);
   echo"table created succesfully";*/

$txtname=$_POST['fname'];
$txtemail=$_POST['femail'];
$txtmessage=$_POST['fmessage'];

//Insert a record
$r1="INSERT INTO contact VALUES('$txtname','$txtemail','$txtmessage')";

if(!mysqli_query($CONNECTION,$r1))
{
echo "Record Not Inserted".mysqli_error($CONNECTION);
}
else
{
echo '<h1>Thank You for contacting us<h1> ';
}
mysqli_close($CONNECTION);
?>
</body>
</html>