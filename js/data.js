function getResources()
{
    //alert('amit');
   $.ajax({
    url:"http://liveapp.getsporty.in/getSportyLite/litecontroller.php?act=blog_api&token_id=dhs2016&token=0,1,3",crossDomain: true ,success: function(result)
    {
        $( "#img1" ).hide();
        data = JSON.parse(result);
        data = data.data;
        var resources_temp ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var s = 0;
        for (var i = 0; i < data.length; i++)
        {  
             res_url     = 'blog_detail.html?n='+data[i]['id']+'';//data[i]['url'];
             title       = data[i]['title'].substring(0,32);
             summary     = data[i]['summary'].substring(0,200);
            if (i==0)
            {   
                resources_temp +='<div class="carousel-item active" ><div class="container-fluid pd0"><div class="row"><div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:500px;" ><img class="img-fluid" src="http://portal.getsporty.in/uploads/resources/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+data[i]['title']+'</h4><p class="card-text">'+summary+'...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div>';
            }
            else
            {
                        s = i + 1;
            if(s%3==0)
            {

               resources_temp +='<div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:500px;"><img class="img-fluid" src="http://portal.getsporty.in/uploads/resources/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+data[i]['title']+'</h4><p class="card-text">'+summary+'...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div></div></div></div><div class="carousel-item"><div class="container-fluid pd0"><div class="row">';   
            }

            else
            {
              resources_temp +='<div class="col-md-4" style="margin-top:20px;"><div class="card" style="height:500px;" ><img class="img-fluid" src="http://portal.getsporty.in/uploads/resources/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+data[i]['title']+'</h4><p class="card-text">'+summary+'...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div>'; 
            }
}

        } // End of for Loop

        $("#id1").html(resources_temp);

    }}); //End of ajax



} // End of Function




    
function getEvent()
{
 $.ajax(
   {url: "http://localhost/testingapp/getSportyLite/litecontroller.php?act=event_and_tour_api",crossDomain: true ,success: function(result)
       {
       data = JSON.parse(result);
        data = data.data;
        var event_temp ='';
        var name ='';
        var description='';

        for (var i = 1; i <data.length; i++)
        {
             name            = data[i]['name']; 
             description     = data[i]['description']; 
            var Path         = data[i]['Path']; 
            name             = name.substring(0,26);
            description      = description.substring(0,250);
            if(Path=='E') 
            {

            var image_path = "http://getsporty.in/portal/uploads/event/"
            }
            else
            {
                var image_path = "http://getsporty.in/portal/uploads/tournament/"
            }
            
        if(data[i]['image']!='')
        {
            if (i==1)
            {
                event_temp +='<div class="carousel-item active" ><div class="col-md-4" ><div class="card" style="height:500px;" ><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'...</h4><p class="card-text">'+description+'...</p><a href="#" class="btn btn-primary">Read More..</a></div></div></div>';
            }
            else
            {
            if(i%3==0)
            {
                event_temp +='<div class="col-md-4" ><div class="card" style="height:500px;"><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'...</h4><p class="card-text">'+description+'...</p><a href="#" class="btn btn-primary">Read More..</a></div></div></div></div><div class="carousel-item">';   

        }
        else
        {
            event_temp +='<div class="col-md-4" ><div class="card" style="height:500px;" ><img class="img-fluid" src="'+image_path+''+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+name+'...</h4><p class="card-text">'+description+'...</p><a href="#" class="btn btn-primary">Read More..</a></div></div></div>'; 
        }
     }
}
        } // End of for Loop

        $("#id2").html(event_temp);
        console.log(event_temp);
     

    }}); //End of ajax



} // End of Function




function getJob()
{
   $.ajax({
    url:"http://localhost/testingapp/getSportyLite/litecontroller.php?act=job_api",crossDomain: true ,success: function(result)
    {
        
        data = JSON.parse(result);
        data = data.data;
        var job_temp ='';
        var res_url = '';
        var title   = ''; 
        var summary = ''; 
        var s = 0;
        for (var i = 0; i < data.length; i++)
        {  
             title           = data[i]['title'];
             summary         = data[i]['description'];
             title           = title.substring(0,26);
             summary         = summary.substring(0,140);
            if (i==0)
            {   
                job_temp +='<div class="carousel-item active" ><div class="container-fluid pd0"><div class="row"><div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:500px;" ><img class="img-fluid" src="http://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+' ...</h4><p class="card-text">'+summary+' ...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div>';
            }
            else
            {
                        s = i + 1;
            if(s%3==0)
             {

               job_temp +='<div class="col-md-4" style="margin-top:20px;" ><div class="card" style="height:500px;"><img class="img-fluid" src="http://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+' ...</h4><p class="card-text">'+summary+' ...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div></div></div></div><div class="carousel-item"><div class="container-fluid pd0"><div class="row">';   
        }

        else

        {

           job_temp +='<div class="col-md-4" style="margin-top:20px;"><div class="card" style="height:500px;" ><img class="img-fluid" src="http://getsporty.in/portal/uploads/job/'+data[i]['image']+'" alt="img"><div class="card-block"><h4 class="card-title">'+title+' ...</h4><p class="card-text">'+summary+' ...</p><div class="bottombutton"><a href="'+res_url+'" class="btn btn-primary" target="_blank">Read More..</a></div></div></div></div>'; 



     }

}

        } // End of for Loop

        $("#id3").html(job_temp);

    }}); //End of ajax



} // End of Function










