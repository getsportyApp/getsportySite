<?php

$var= $_GET['id'];

//$con = mysql_connect('localhost', 'root', 'mysql');
// mysql_select_db("getsport_gs", $con);

      include 'config1.php';
      mysql_set_charset("UTF8");
     $sql="SELECT * FROM gs_resources WHERE id=$var ";
      header('Content-type: text/html; charset=utf-8');
      $result = mysql_query($sql);
  
     while($row = mysql_fetch_array($result))
{       
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link href="css/compiled.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
   
     <link href="css/style.css" rel="stylesheet">

</head>

<body style="background-color: whitesmoke; background-attachment: fixed; background-size: cover;" class="fixed-sn black-skin bg-skin-lp1">


        <br>

<div class="container">
<div class="row">
        <div class="col-sm-12">
        <br>
<a  style="color:black;" href="#"><h2><?php echo $row['title'];?></h2></a>
</div></div>
<br>
        <div class="row">
        <div class="col-sm-12">
        <a href="#"><img class="responsive" src="http://portal.getsporty.in/uploads/resources/<?php echo $row['image']; ?>" class="img-responsive scrollpoint sp-effect5" alt="" width="100%"></a>
        </div>
        </div>

<br>
        <div class="row">
        <div style="color:black;" class="col-sm-12">
        
<h5><?php echo $row['date_created'];?></h5>

        </div>

        </div>
        <br><br>
<div class="row">
<div class="col-sm-12" style=" color:black; font-family: 'Josefin Sans', sans-serif;
    font-size: 21px;">

 <?php if($row['token'] == 0){?><p> <?php echo $row['summary'];?></p>
                             <a href="<?php echo $row['url'];?>">Read more...</a>
                             <?php }else{?>
                              <p><b> <?php echo $row['summary'];?><b></p>
                             <br><br>
                             <p> <?php echo $row['description'];?></p>            <?php }?></div>
</div>

</div>









 <footer class="page-footer center-on-small-only">
<hr>
<div class="foot-logo"><img src="img/logo.png"></div>
        <!--Social buttons-->
        <div class="social-section">
            <ul>
                <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="#"> Design By    Dark Horse Sports </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>



</body>

</html>

<?php
}?>