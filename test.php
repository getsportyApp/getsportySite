<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Latest Jobs">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dosis|Bubbler+One" rel="stylesheet">
  <title>Getsporty</title>
    <!-- title bar icon-->
  <link rel="icon" type="image/png" href="img/GS Icon1.png">
    <!-- Font Awesome -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!-- CSS -->
  <link href="css/compiled.min.css" rel="stylesheet">
    <style>

      .post-module {
  position: relative;
  z-index: 1;
  display: block;
  background: #FFFFFF;
  min-width: 270px;
  height: 350px;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.post-module:hover,
.hover {
  -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
}
.post-module:hover .thumbnail img,
.hover .thumbnail img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  opacity: .6;
}
.post-module .thumbnail {
  background: #000000;
  height: 350px;
  overflow: hidden;padding: 0;
}
.post-module .thumbnail .date {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 1;
  background: #f2b202;
  width: 55px;
  height: 55px;
  padding: 12.5px 0;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  color: #FFFFFF;
  font-weight: 700;
  text-align: center;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.post-module .thumbnail .date .day {
 font-size: 18px;
    line-height: 31px;
    color: #fff;
}
.post-module .thumbnail .date .month {
  font-size: 12px;
  text-transform: uppercase;
}
.post-module .thumbnail img {
  display: block;
  width: 120%;
  -webkit-transition: all 0.3s linear 0s;
  -moz-transition: all 0.3s linear 0s;
  -ms-transition: all 0.3s linear 0s;
  -o-transition: all 0.3s linear 0s;
  transition: all 0.3s linear 0s;
}
.post-module .post-content {
  position: absolute;
  bottom: 0;
  background: #FFFFFF;
  width: 100%;
    padding: 0 30px;
  -webkti-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
  transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
}
.post-module .post-content .category {
  position: absolute;
  top: -34px;
  left: 0;
  background: #f2b202;
  padding: 10px 15px;
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
}
.post-module .post-content .title {
  margin: 0;
  padding: 0 0 10px;
  color: #222 !important;
  font-size: 24px !important;
  font-weight: 700;    margin: 40px 0 0 !important;
}
.post-module .post-content .sub_title {
  margin: 0;
  padding: 0 0 20px;
  color: #f2b202;
  font-size: 20px;
  font-weight: 400;
}
.post-module .post-content .description {
  display: none;
  color: #666666;
  font-size: 14px;
  line-height: 1.8em;
}
.post-module .post-content .post-meta {
  margin: 0px 0px 10px;
  color: #999999;
}
.post-module .post-content .post-meta .timestamp {
  margin: 0 16px 0 0;
}
.post-module .post-content .post-meta a {
  color: #999999;
  text-decoration: none;
}
.hover .post-content .description {
  display: block !important;
  height: auto !important;
  opacity: 1 !important;
}

.container .column {
     width: 100%;
    /* padding: 0 25px; */
    -webkti-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;
}
.container .column .demo-title {
  margin: 0 0 15px;
  color: #666666;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
}
.container .info {
  width: 300px;
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 24px;
  font-weight: bold;
  color: #333333;
}
.container .info span {
  color: #666666;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #f2b202;
}





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
                     <a id="link-7" style="background-color:#fff; color:#03a9f4;" class="nav-link" href="javascript:void(0)" onclick="partner()">Register With Us!</a>
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
                    <a id="link-7" style="background-color:#fff; color:#03a9f4;" class="nav-link" href="javascript:void(0)" onclick="partner()">Register With Us!</a>
                </li>                                    
            </ul>

           
                
        </nav>

    </header>
<div class="blog_body">
<div class="container">

<div class="panel panel-default panel1">
    <div class="panel-body" style="    display: -webkit-box;">
    <div style="padding:22px ;color:white;">Get our app!!
</div>
<ul>
<li style="position: absolute;
    right: 3%;">
<a class="btn btn-primary1" href="https://play.google.com/store/apps/details?id=getsportylite.darkhoprsesport.com.getsportylite&hl=en" style=" background-color: #ffffff;   margin-top: 10px;"><i class="fa fa-android" aria-hidden="true" style="color:#000;"></i><span style="color:#000;"> Download For Android</span><span class="glyphicon glyphicon-user"></span></a>
</li>
</ul>

    </div>
  </div>
<!-- toggle div-->




            <div class="box-body">
              <table id="myTable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                 <!--  <th>#</th>
                  <th>#</th> -->
                </tr>
                </thead>
                <tbody>

  <?php for($i=1; $i<101 ; $i++) { ?>
        
          <tr>

          <td>


      

<div class="col-md-4">
        <div class="column"> 
          
       
          <div class="post-module"> 
     
            <div class="thumbnail">
              <div class="date"> <a href="#0">
                <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </a> </div>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" class="img-responsive" alt=""> </div>
         
            <div class="post-content">
              <div class="category"><?php echo $i;?></div>
              <h1 class="title">Lorem Ipsum</h1>
              <h2 class="sub_title">LEAD COORDINATOR</h2>
              <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
            </div>
          </div>
        </div>
      </div>
</td>

        <!--   <td>

        <div class="col-md-4">
        <div class="column"> 
          
        
          <div class="post-module"> 
          
            <div class="thumbnail">
              <div class="date"> <a href="#0">
                <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </a> </div>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" class="img-responsive" alt=""> </div>
          
            <div class="post-content">
              <div class="category"><?php// echo $i;?></div>
              <h1 class="title">Lorem Ipsum</h1>
              <h2 class="sub_title">LEAD COORDINATOR</h2>
              <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
            </div>
          </div>
        </div>
      </div>



          </td>
          <td>


        <div class="col-md-4">
        <div class="column"> 
          
      
          <div class="post-module"> 
         
            <div class="thumbnail">
              <div class="date"> <a href="#0">
                <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </a> </div>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" class="img-responsive" alt=""> </div>
          
            <div class="post-content">
              <div class="category"><?php //echo $i;?></div>
              <h1 class="title">Lorem Ipsum</h1>
              <h2 class="sub_title">LEAD COORDINATOR</h2>
              <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
            </div>
          </div>
        </div>
      </div>




          </td> -->
          
          </tr>

        <?php  } ?>

                </tbody>
                <tfoot>
               <tr>
                  <th>#</th>
                  <!-- <th>#</th>
                  <th>#</th> -->
                </tr>
                </tfoot>
              </table>
            </div>




<!--       <div class="container" style="margin-top:30px">
        <div class="row">
         
          <div id="lod" class="loader1"></div>
            <div class="blog-main-posts">
              <div class="row">
                  <div id="id2"></div>
                </div>
              </div> 
        </div>
           
      </div>
          
        
      <div class="row mt-0">
        <nav class="blog-pag">
          <ul class="pagination pag2 m-0" id="paginate">
          
          </ul>
        </nav>
      </div>  -->

 





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
<!--  <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script> -->
        <script type="text/javascript" src="js/compiled.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
            <script type="text/javascript" src="js/main.min.js"></script>




   
 <script type="text/javascript">
    var data = '';
      jQuery(document).ready(function() {
         $.ajax({url: "https://getsporty.in/liveapp/getSportyLite/litecontroller.php?act=job_list_api",crossDomain: true ,success: function(result){
             var data = JSON.parse(result);
             data = data.data;
             id = 1;
          getResources(data,id);
         }});
          var getResources = function(data,id)
          {    
              $("#lod").hide();

            var temp = '';
            create_pagination(data.length);
            i= 1; 
            data.forEach(function(data){
            if(i >= (8*(id-1))  && (i < id*8)){

              // var date_for = formatDate(data.date_created);

            var secondDate = data.date_created;
            var finddiffDays = daydiff(parseDate(), secondDate);
            var diffDays = '';
            if(finddiffDays == 0)
            {
                diffDays = '<b>Posted : </b> Today'; 
            }
            else if(finddiffDays == '1')
            {
                diffDays = '<b>Posted : </b> ' + finddiffDays + ' day ago';
            } 
            else
            {
                
                diffDays = '<b>Posted : </b>' + finddiffDays + ' days ago';
            }
              var desp = (data.description).substr(0,300);


            temp +='<div class="row panel2" id="shared"><div class="col-md-6"> <img src="https://getsporty.in/portal/uploads/job/'+data.image+'" style="width: 550px;height: 300px;"> </div> <div class="col-md-6" style="height:300px;"> <h3>'+data.title+'</h3> <div class="post-prev-info">'+diffDays+'<span class="slash-divider"></span><h5>Gender - <small class="text-muted">'+data.gender+'</small></h5></div><h5>Email - <small class="text-muted">'+data.email+'</small></h5><h5>Organisation Name - <small class="text-muted">'+data.organisation_name+'</small></h5><div class="bottombutton1"><a href="javascript:void(0)" id="'+data.id+'" onclick="openModal(this.id)" class="font-poppins">Read More</a></div> </div></div>';
              }
              i++;
            });
            $("#id2").html(temp);
  
            function create_pagination(size)
            {

            var limit = Math.ceil(size/8);
            var page_no  = '';
            var paginate_header = '<li><a href="javascript:void(0)"></a></li>';
            for(i=0;i<limit;i++)
            {
              j=i+1;
              page_no += '<li style="margin-left:2%;"><a href="javascript:void(0)" id="'+j+'" onclick="getData(this.id)">'+j+'</a></li>';

            }
            var paginate_footer = '<li><a href="javascript:void(0)"></a></li>';
            var pagination = paginate_header+page_no+paginate_footer;
            $('#paginate').html(pagination);
            }

            getData = function(id)
            {  
            $('#'+id+'').parent("li").addClass('.active');
            getResources(data,id);
            }

          }
      }); 


      function openModal(id)
      { 
        window.open('job.php?n='+id+'');return;
      }



function parseDate() 
{
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 
today =yyyy+'-'+ mm+'-'+dd;

return today;
}

function daydiff(first, second) 
{
   var fdate = new Date(first);
   var sdate = new Date(second);
   var result =  Math.round(Math.abs((fdate - sdate)/(1000*60*60*24)));
   return result;
}



</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/datatables/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script>


// $(window).on('load',
$(window).on('load',function() {
  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });
});


$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>


    </body>
    </html>