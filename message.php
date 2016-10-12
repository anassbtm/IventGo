<?php
session_start();
//mysql_connect('localhost','root','');
//mysql_select_db('iventgo');  
include_once("inc/init.php");
//$reg=mysql_query("SELECT * FROM email_waiting"); 
$db->select('email_waiting') ; 
$id=$_GET["id"];
		     //  mysql_query("DELETE FROM email_waiting WHERE id='$id'");
			 $db->delete('email_waiting', "id=".$id."");
	         
header("location:test2.php");

?>
