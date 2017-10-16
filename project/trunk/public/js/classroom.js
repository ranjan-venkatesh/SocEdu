$(document).ready(initialize);
$("#frmClassRoom").validationEngine('attach', {promptPosition: "centerRight", scroll: true});
var initialize = function()
{$('.links').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");
    $('.vidlinks').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");

};
$(document).ready(function() {
    
    $('.vidlinks').html("");
    str2 = "";
    $.each(clsvids, function(index, inVal) {
str2 +='<ul class="list-group"><a href="tutorial/' +inVal.fldMediaID+ '" class="list-group-item"><h4 class="list-group-item-heading">' +inVal.fldName+ '</h4><p class="list-group-item-text">' +inVal.fldDescription+ '</p>';;
  });
$('.vidlinks').html(str2);

    $('.links').html("");
    str = "";
    $.each(c, function(index, inVal) {
str +='<li><a href="../' +inVal.content+  '">' + inVal.title + '</a></li>';
    });
    $('.links').html(str);
});

