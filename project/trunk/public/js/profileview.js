/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    //jquery for profile elements
    $('.profile').html("");
    Str3 = "";
    $.each(datafeeds, function(index3, inVal3) {
Str3 += '<p class="lead" ><span style="color: #269abc">NAME:</span><span style="color:gray">' + inVal3.fldName + '</span></p>' + '<p class="lead" ><span style="color: #269abc">STREAM:</span><span style="color:gray">' + inVal3.fldStream + '</span></p>' + '<p class="lead"> <span style="color: #269abc">SEM:</span><span style="color:gray">' + inVal3.fldSem + '</span></P>' + '<p class="lead"><span style="color: #269abc">GENDER:</span><span class="lead" style="color:gray">' + inVal3.fldGender + '</span>' + '<p class="lead"><span style="color: #269abc">COLLEGE:</span><span class="lead" style="color:gray">' + inVal3.fldCollege + '</span>' + '<p class="lead"><span style="color: #269abc">HOMETOWN:</span><span class="lead" style="color:gray">' + inVal3.fldHome + '</span></p>' + '<p class="lead"><span style="color: #269abc">PHONE:</span><span class="lead" style="color:gray">' + inVal3.fldPhone + '</span></p>' + '<p class="lead"><span style="color: #269abc">E-MAIL:</span><span class="lead" style="color:gray">' + inVal3.fldEmail + '</span></p>' + '<p class="lead"><span style="color: #269abc">ABOUT ME:</span><span class="lead" style="color:gray">' + inVal3.fldAbout + '</span></p>' ;
    });
    $('.profile').html(Str3);
});


