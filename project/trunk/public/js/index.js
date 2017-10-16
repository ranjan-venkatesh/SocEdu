/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(initialize);

$('#comment_button').click(postData);

function postData() {
    var test = $("#newfeed").val();
    if (test == '')
    {
        alert("Please Enter Some Text");
        return false;
    } else {
        //$("#flash").show();
          //          alert("Succesfull!! Refresh the page to view changes");

        var datastring = 'newfeed=' + test;
        $("#flash").fadeIn(400).html('<img src="public/img/ajax-loader.gif" height="40px" width="40px" align="absmiddle"><span class="loading">Loading Post...</span>');
        $.ajax({
            type: "POST",
            url: "/home/postFeed",
            data: datastring,
                      cache: false,
            success: function(response) {
 //$.ajax({
   //         type: "GET",
     //       url: "/home/getFeed",
       //     dataType: "json",
         //   cache: false,
           // success: function(response) {window.location.reload();
  //str="";        
    //       str += '<div class="jumbotron "><header class="news-source">' + inVal.author + '<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">' + inVal.date_time + '</span></header><br/><p class="newscontents"> ' + inVal.content + ' <br/><br/><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p></div>';
      //     $('.news').html(Str);
          location.reload();
           // }
        //});         
                
            }
        });
    }
}
var initialize = function() {
    $('.news').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");


};


$(document).ready(function() {

    
    $('.news').html("");
    Str = "";
    $.each(newsfeeds, function(index, inVal) {
        Str += '<div class="jumbotron "><header class="news-source">' + inVal.author + '<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">' + inVal.date_time + '</span></header><br/><p class="newscontents"> ' + inVal.content + ' <br/><br/><a href="home/checkProfile/ ' +inVal.author_id+ ' " class="btn btn-primary btn-lg" role="button">View Profile &raquo;</a></p></div>';
    });
    $('.news').html(Str);

    
});

