<?php
$var= $_GET['n'];

//$con = mysql_connect('localhost', 'root', 'mysql');
// mysql_select_db("getsport_gs", $con);



      include 'config1.php';
      mysql_set_charset("UTF8");
     $sql="SELECT * FROM gs_jobinfo WHERE id=$var ";
      header('Content-type: text/html; charset=utf-8');
      $result = mysql_query($sql);
  
     while($row = mysql_fetch_assoc($result))
{       
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Bubbler+One" rel="stylesheet">
    
    <title>Getsporty</title>
    <!-- title bar icon-->
    <link rel="icon" type="image/png" href="img/GS Icon1.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->

    <link href="css/compiled.min.css" rel="stylesheet">
    <link href="css/tournament.css" rel="stylesheet">
   
    <style>
        .bg-skin-lp {
            background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20%283%29.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
            background-attachment: fixed;
        }.banner-img-wrap.animated.fadeInLeft {
    padding: 13% 0 0 0;
}
@font-face { font-family: GillSans; src: url('font/GillSans.ttf'); } 
    .cent{
        text-align: -webkit-center;
        }
     .btn-primary1:hover {
    background-color: #ffffff !important;
}
    </style>
     <link href="css/style.css" rel="stylesheet">

</head>

<body class="fixed-sn black-skin bg-skin-lp1" id="bdy">


</div>
        <div class="collapse navbar-collapse mob-nav" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navmob" >
             
               
                <li  class="nav-item last">
                    <a id="link-7" class="nav-link" href="javascript:void(0)" target="_blank" onclick="partner()">Partner With Us!</a>
                </li>     
                              
                </ul>
        </div>
<!-- 03A9F4 -DARKER
4FC3F7 - LIGHTER  -->
    <!--Double navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
            <!-- Breadcrumb-->
<div class="navbar-header trigger">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <img src="img/trigger.png" />
                </button>
            </div>       
            <ul class="navbar-nav mr-auto">
                <li class="">
                       <a class="nav-link navbar-brand" href="#bdy">
                            <div class="hj-logo"><img src="img/logo.png"></div>
                        </a>
                </li>                                
            </ul>           
            <ul class="nav navbar-nav ml-auto flex-row" >
               
                
                <li class="nav-item last">
                    <a id="link-7" class="nav-link" href="javascript:void(0)" onclick="partner()">Partner With Us!</a>
                </li>                                   
            </ul>
        </nav>
    </header>
<div class="blog_body">
<div class="container">

<!-- <div class="panel panel-default panel1">
    <div class="panel-body" style="    display: -webkit-box;">
    <div style="padding:22px ;color:white;">Get our app!!
</div>
<ul>
<li style="position: absolute;
    right: 3%;">
<a class="btn btn-primary1" href="https://play.google.com/store/apps/details?id=getsportylite.darkhoprsesport.com.getsportylite&hl=en" style=" background-color: #ffffff;   margin-top: 10px;"><i class="fa fa-android" aria-hidden="true" style="color:#54c0f1;"></i><span style="color:#54c0f1;"> Download For Android</span><span class="glyphicon glyphicon-user"></span></a>
</li>
</ul>

    </div>
  </div> -->
<!-- toggle div-->
 

<ul class="">
    <li class=""><h5>Job Title  - </h5><?php echo $row['title']; ?> </li>
    <li class=""><h5>Gender  - </h5><?php echo $row['gender']; ?> </li>
    <li class=""><h5>Job  Type - </h5><?php echo $row['type']; ?> </li>
    <li class=""><h5>Job Work Experience  - </h5><?php echo $row['work_experience']; ?> </li>
    <li class=""><h5>Qualification  - </h5><?php echo $row['qualification']; ?> </li>
    <li class=""><h5>Key Requirement  - </h5><?php echo $row['key_requirement']; ?> </li>
    <li class=""><h5>Job PIN  - </h5><?php echo $row['org_pin']; ?> </li>
    <li class=""><h5>Job description  - </h5><?php echo $row['description']; ?> </li>
    <li class=""><h5>sport  - </h5><?php echo $row['sport']; ?> </li>



        <li class=""><h5>Organiser Name  - </h5><?php echo $row['organisation_name']; ?> </li>
        <li class=""><h5>About Organiser   - </h5><?php echo $row['about']; ?> </li>
        <li class=""><h5>Organazition Address  - </h5><?php echo $row['address1']; ?> </li>
        <li class=""><h5>Organazition Address  - </h5><?php echo $row['address2']; ?> </li>
        <li class=""><h5>Organazition City  - </h5><?php echo $row['city']; ?> </li>
        <li class=""><h5>Organazition Pin  - </h5><?php echo $row['pin']; ?> </li>
        <li><h5>Job Link  - </h5>
        <a href="<?php echo $row['job_link']?>"><?php echo $row['job_link']?></a>
         </li>
         <li class=""><h5>Email  - </h5><?php echo $row['email']; ?> </li>
          
</ul>






</div>
</div>

 <footer class="page-footer center-on-small-only">



        <hr>
<div class="foot-logo"><img src="img/logo.png"></div>
        <!--Social buttons-->
        <div class="social-section">
            <ul>
                <li><a class="btn-floating btn-small btn-fb" target="_blank" href="https://www.facebook.com/getsportyindia/"><i class="fa fa-facebook" ></i></a></li>
                <li><a class="btn-floating btn-small btn-tw" target="_blank" href="https://twitter.com/GetSportyIndia"><i class="fa fa-twitter"> </i></a></li>
                <li><a class="btn-floating btn-small btn-linkedin" target="_blank" href="https://www.linkedin.com/company-beta/3746644/"><i class="fa fa-linkedin"> </i></a></li>
            </ul>
        </div>
        <!--/.Social buttons-->

        <!--Copyright-->
        <div class="footer-copyright" id ="Partner">
            <div class="container-fluid">
                © 2017 Copyright: <a href="#"> Design By    Dark Horse Sports </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
 <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script>
    
        <script type="text/javascript" src="js/modernizr.js"></script>
            <script type="text/javascript" src="js/main.min.js"></script>


<script type="text/javascript">
function partner()
{
window.open('http://portal.getsporty.in/index.php/forms/new_registration/','_blank');
}
</script>

    </body>
    </html>


<?php
}?>