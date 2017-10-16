/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var initialize = function() {
    $('.comm').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");

};


$(document).ready(function() {

    $('.comm').html("");
    Str = "";
    $.each(Comments, function(index, inVal) {
        Str += '<li class="comment"><div class="comment-meta"><span class="comment-author">' +inVal.fldName+ '</span><span class="comment-date">' +inVal.fldDate+ '</span></div><div class="comment-text"><p>'+inVal.fldText+'</p></div></li>';
    });
    $('.comm').html(Str);

});
$('#btnSubmit').click(postComment);
function postComment() {
var test = $("#comment").val();
if (test == '')
{
alert("Please Enter Some Text");
return false;
} else {
    alert("Comment entered!!refresh to view changes!!");
var datastring = 'comment=' + test;
$.ajax({
type: "POST",
url: "/classroom/postComment/" + VideoID,
data: datastring,
// cache: false,
success: function(response) {
console.log(response);
}
});
}
}



    

