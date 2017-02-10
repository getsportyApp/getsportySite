<?php
$con = mysql_connect('localhost','root','mysql');
if($con){
$selected = mysql_select_db('getsport_staging') or die("Could not select databasename");
 
//if($_SERVER['REQUEST_URI']=='getsportysite');

}else{

echo "could not connect";
} 
?>