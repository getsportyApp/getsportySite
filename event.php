<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
// include('liveapp/getSportyLite/config1.php');
// include('liveapp/getSportyLite/liteservice.php');


include('liveapp/getSportyLite/config1.php');
include('liveapp/getSportyLite/liteservice.php');


$var= $_GET['n'];

//$con = mysql_connect('localhost', 'root', 'mysql');
// mysql_select_db("getsport_gs", $con);
      // include 'config1.php';
  mysql_set_charset("UTF8");
  $sql="SELECT * FROM gs_eventinfo WHERE id=$var ";
      // header('Content-type: text/html; charset=utf-8');
  $result = mysql_query($sql);
  while($row = mysql_fetch_assoc($result))
{
// if(!isset($id))
// {
//   $where = 'WHERE `token` IN ('.$token.') AND `status` = 1 ORDER BY `date_created` DESC';
// }else
// { 
//   $where = "WHERE `id` = '$id' ";
// }
// $req = new liteservice();
// $res = $req->getBlogData($where);

?>


<meta name="twitter:dnt" content="on">
<meta property="og:url" content="http://getsporty.in/event.php?n=<?php echo $row['id'];?>" />
<meta property="og:image" content="http://getsporty.in/portal/uploads/event/<?php echo $row['image']; ?>">
<meta property="og:title" content="<?php echo $row['name']; ?>" /> 
<meta property="og:description" content="<?php echo $row['description']; ?>" />  
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@getsporty" />
<meta name="twitter:title" content="<?php echo $row['name']; ?>" />
<meta name="twitter:description" content="<?php echo $row['description']; ?>" />
<meta name="twitter:image" content="http://getsporty.in/portal/uploads/event/<?php echo $row['image']; ?>" /> 

   
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Bubbler+One" rel="stylesheet">
    
    <title>Getsporty</title>
    <!-- title bar icon-->
    <!-- <link rel="icon" type="image/png" href="img/GS Icon1.png"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="css/compiled.min.css" rel="stylesheet">
    <link href="css/social.css" rel="stylesheet">
   
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
                     <a id="link-7" class="nav-link" href="javascript:void(0)" onclick="partner()">Register With Us!</a>
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
                       <a class="nav-link navbar-brand" href="">
                            <div class="hj-logo"><img src="img/logo.png"></div>
                        </a>
                </li>                                
            </ul>           
            <ul class="nav navbar-nav ml-auto flex-row" >
               
                
                <li class="nav-item last">
                    <a id="link-7" class="nav-link" href="javascript:void(0)" onclick="partner()">Register With Us!</a>
                </li>                                   
            </ul>

           
                
        </nav>

    </header>
<div class="blog_body">
<div class="container">

<?php 
//print_r($row);
?> 
<img src="http://getsporty.in/portal/uploads/event/<?php echo $row['image']; ?> " style="width:40%;margin-left: 30%; ">
<ul class="">
    <li class="">
    <h5>
     Event Name  -
        <small class="text-muted"><?php echo $row['name']; ?> </small>
      </h5>
    </li>
    <li class="">
          <h5>
    Event Type  -
        <small class="text-muted"><?php echo $row['type']; ?> </small>
      </h5>

    </li>
    <li class="">
    <h5>
    Event Fee Type - 
        <small class="text-muted"><?php echo $row['feetype']; ?></small>
      </h5>
       </li>
    <li class="">
    <h5>
      Event Address  - 
        <small class="text-muted"><?php echo $row['address_1']; ?>  </small>
      </h5>


    </li>
    <li class="">
    <h5>
    Event Address  - 
        <small class="text-muted"><?php echo $row['address_2']; ?></small>
      </h5> 
    </li>
    <li class="">
    <h5>
    Event Location  -
        <small class="text-muted"><?php echo $row['location']; ?></small>
      </h5>

    </li>
    <li class="">
    <h5>
   Event PIN  - 
        <small class="text-muted"><?php echo $row['PIN']; ?> </small>
      </h5>

       </li>
    <li class="">
    <h5>
     Event description  - 
        <small class="text-muted"><?php echo $row['description']; ?>  </small>
      </h5>

    </li>
    <li class="">
    <h5>
    sport  -
        <small class="text-muted"><?php echo $row['sport_name']; ?> </small>
      </h5>

    </li>
    <li class="">
    <h5>
    Terms and Condition  -
        <small class="text-muted"><?php echo $row['terms_cond1']; ?> </small>
      </h5>
    </li>


        <li class="">
    <h5>
     Organiser Name  - 
        <small class="text-muted"><?php echo $row['organizer_name']; ?> </small>
      </h5>


        </li>
        <li class="">
    <h5>
     Organazition Address  - 
        <small class="text-muted"><?php echo $row['organizer_address_line1']; ?> </small>
      </h5>

        </li>
        <li class="">
    <h5>
    Organazition Address  -
        <small class="text-muted"><?php echo $row['organizer_address_line2']; ?></small>
      </h5>

        </li>
        <li class="">
    <h5>
    Organazition City  - 
        <small class="text-muted"><?php echo $row['organizer_city']; ?></small>
      </h5>

        </li>
        <li class="">
    <h5>
     Organazition Pin  - 
        <small class="text-muted"><?php echo $row['organizer_pin']; ?> </small>
      </h5>

        </li>
        <li>
    <h5>
     Event Link  - 
        <small class="text-muted"><a href="<?php echo $row['event_links']?>"><?php echo $row['event_links']?></a></small>
      </h5>
   
        
         </li>
         <li class="">
    <h5>
     Event Start Date  -
        <small class="text-muted"><?php echo $row['start_date']; ?> </small>
      </h5>

        </li>
          <li class="">
    <h5>
    Event End Date  -
        <small class="text-muted"><?php echo $row['end_date']; ?> </small>
      </h5>


          </li>
           <li class="">
    <h5>
      Event Entry Date  -
        <small class="text-muted"><?php echo $row['entry_start_date']; ?>  </small>
      </h5>


          </li>
            <li class="">
    <h5>
     Event Event End Date  -
        <small class="text-muted"><?php echo $row['entry_end_date']; ?> </small>
      </h5>

            </li>
             <li class="">
    <h5>
     Event Eligibility  -
        <small class="text-muted"><?php echo $row['eligibility1']; ?></small>
      </h5>
        
            </li>
</ul>



<div id="fixedsocial">

 <div class="fb-share-button" data-href="http://getsporty.in/event.php?n=<?php echo $row['id']; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>



     <div class="twitterflat"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="<?php echo $row['name']; ?>" data-url="http://getsporty.in/event.php?n=<?php echo $row['id']; ?>" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div> 
  
  
  <div class="linkedinflat">
  <a href=" https://www.linkedin.com/shareArticle?mini=true&url=http://getsporty.in/event.php?n=<?php echo $row['id']; ?>&title=<?php echo $row['name'];?>
&summary=<?php echo $row['description']; ?>&source=LinkedIn" ><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
  </div>

   <div class="g-plusflat">
   <script src="https://apis.google.com/js/platform.js" async defer></script>
     <!-- Place this tag where you want the share button to render. -->
     <div class="g-plus" data-action="share" data-height="24"></div> 
  </div>
</div>

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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    </body>
    </html>


<?php
}?>