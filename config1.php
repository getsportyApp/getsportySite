<?php
$con = mysql_connect('127.0.0.1','root','');
//mysql_set_charset($con, 'utf8');

if($con)
{

$selected = mysql_select_db('getsport_staging') or die("Could not select databasename");
//$selected->set_charset("utf8");

define('UPLOAD_DIR_JOB','../../staging/uploads/job/'); 
define('UPLOAD_DIR','../../staging/uploads/profile/'); 
define('IMAGE_URL','http://192.168.0.122/staging/uploads/profile/');
define('CHANGE_PASSWORD','http://192.168.0.122/user_var/index.php');
}
else
{
echo "could not connect";
} 

?>