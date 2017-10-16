/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(initialize);

var initialize = function() {
//    $('.news').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");
//$('.upcoming-events').append("<h1>Navbar example</h1><p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");
//jquery for mycollege news feeds  
    $('.coll-news').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");

};
//
////initailise newsfeeds variable
//var newsfeeds = {
//    "1" : {
//        "author" : "Ranjan",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hello and welcome to SocialEdu,this is totally stupid to type something nonsense just to fill up the space,but thanks for reading this useless text",
//        "link" : ""
//    },
//    "2" : {
//        "author" : "Eden",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "you will find the latest news around the campus in this section,basically not much to say asusual things went in campus and yeah we warn you to not forgert your ID card to college.",
//        "link" : ""
//    },
//    "3" : {
//        "author" : "Joslin",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "please dont forget to logout before you leave the system,your details and info are precious,not that we will misuse but chances cannot be denied",
//        "link" : ""
//    },
//    "4" : {
//        "author" : "Smitha",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "5" : {
//        "author" : "Smith2a",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "6" : {
//        "author" : "Smitha3",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "7" : {
//        "author" : "Smitha4",
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    }
//};
//var collnewsfeeds = {
//    "1" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hello and welcome to SocialEdu,this is totally stupid to type something nonsense just to fill up the space,but thanks for reading this useless text",
//        "link" : ""
//    },
//    "2" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "you will find the latest news around the campus in this section,basically not much to say asusual things went in campus and yeah we warn you to not forgert your ID card to college.",
//        "link" : ""
//    },
//    "3" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "please dont forget to logout before you leave the system,your details and info are precious,not that we will misuse but chances cannot be denied",
//        "link" : ""
//    },
//    "4" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "5" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "6" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    },
//    "7" : {
//        "date_time" : "11/06/2014 13:35",
//        "content" : "hope you come back soon,and hope your details are safe..lolz",
//        "link" : ""
//    }
//};


$(document).ready(function() {
    //<div class="jumbotron "><header class="news-source">Ranjan<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">11/06/2014 13:35</span></header><br/><p class=newscontents>hello and welcome to SocialEdu,this is totally stupid to type something nonsense just to fill up the space,but thanks for reading this useless text <br/><br/><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p></div>
    //jquery for loading home news feeds using newsfeeds variable
  //  $('.news').html("");
    //Str = "";
    //$.each(newsfeeds, function(index, inVal) {
      //  Str += '<div class="jumbotron "><header class="news-source">' + inVal.author + '<br/><span style="font-size:13px;color:gray;font-family: sans-serif;text-align: right;">' + inVal.date_time + '</span></header><br/><p class="newscontents"> ' + inVal.content + ' <br/><br/><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p></div>';
//});
  //  $('.news').html(Str);

    //slide animation at click
    //$("#flip").click(function() {
      //  $("#panel").slideToggle("slow");
        //});
        //loading page with college news using collnewsfeeds variable
       $('.coll-news').html("");
        Str2 = "";
       $.each(collfeeds, function(index, inVal) {
         Str2 += '<div class="blog-post"><h2 class="blog-post-title">' + inVal.title + '</h2><p class="blog-post-meta"> ' + inVal.date_time + '</p><p>' + inVal.content +'</p></div>';
       });
       $('.coll-news').html(Str2);
    //   $('.upcoming-events').html("");
      // Str3 = "";
       //$.each(collevents, function(index, inVal) {
         //Str3 += '<p>' + inVal.title + '</p>';
      
    //jquery for profile elements
    //$('.profile').html("");
    //Str3 = "";
    //$.each(datafeeds, function(index3, inVal3) {
//Str3 += '<p class="lead" ><span style="color: #269abc">NAME:</span><span style="color:gray">' + inVal3.fldName + '</span></p>' + '<p class="lead" ><span style="color: #269abc">STREAM:</span><span style="color:gray">' + inVal3.fldStream + '</span></p>' + '<p class="lead"> <span style="color: #269abc">SEM:</span><span style="color:gray">' + inVal3.fldSem + '</span></P>' + '<p class="lead"><span style="color: #269abc">GENDER:</span><span class="lead" style="color:gray">' + inVal3.fldGender + '</span>' + '<p class="lead"><span style="color: #269abc">COLLEGE:</span><span class="lead" style="color:gray">' + inVal3.fldCollege + '</span>' + '<p class="lead"><span style="color: #269abc">HOMETOWN:</span><span class="lead" style="color:gray">' + inVal3.fldHome + '</span></p>' + '<p class="lead"><span style="color: #269abc">PHONE:</span><span class="lead" style="color:gray">' + inVal3.fldPhone + '</span></p>' + '<p class="lead"><span style="color: #269abc">E-MAIL:</span><span class="lead" style="color:gray">' + inVal3.fldEmail + '</span></p>' + '<p class="lead"><span style="color: #269abc">ABOUT ME:</span><span class="lead" style="color:gray">' + inVal3.fldAbout + '</span></p>' + '<p><a class="btn btn-lg btn-primary" href="#" role="button" ><span style="padding: 5px 5px;">Edit</span></a></p>';
  //  });
    //$('.profile').html(Str3);
});

