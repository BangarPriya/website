<html>
<head>
<title>create database</title>
<link rel="stylesheet" type="text/css" href="contactdataback.css">
</head>
<body>

<?php
$CONNECTION = mysqli_connect("localhost","root","","feedback");
/*if(!$CONNECTION)
{
die("Couldn't connect");
}
else
{
echo "Connected Successfully"." <br><br>";
}
//Create database
$s = "CREATE DATABASE feedback";
mysqli_query($CONNECTION,$s);*/

//Create Table
/*$s1="create table feedback(
         U_Name varchar(20) primary key,
         Email_id varchar(40),
         Opinion varchar(40))";

   mysqli_query($CONNECTION,$s1);
   echo"table created succesfully";*/

$txtname=$_POST['fname'];
$txtemail=$_POST['femail'];
$txtopinion=$_POST['fopinion'];

//Insert a record
$r1="INSERT INTO feedback VALUES('$txtname','$txtemail','$txtopinion')";

if(!mysqli_query($CONNECTION,$r1))
{
echo "Record Not Inserted".mysqli_error($CONNECTION);
}
else
{
echo '<h1>Thank You<h1> ';
}
mysqli_close($CONNECTION);
?>
</body>
</html>