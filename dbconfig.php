<?php
$host="localhost";
$username="root" ;
$password ="";
$dbnm="contract";
$con= mysqli_connect ($host,$username,$password,$dbnm);
  if(mysqli_connect_error())
  {
	die("Connection problem !! ".mysqli_connect_error() ); 
  }
?>