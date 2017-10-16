$(document).ready(function() {
    //jquery for profile elements
    $('.profileedit').html("");
    Str3 = "";
    $.each(datafeeds, function(index3, inVal3) {
Str3 +=             '<table>'+                        
                        '<tr class="lead"><th ><p  ><span style="color: #269abc">NAME:</span><span style="color:gray"></th><th> <input size="40" type="text" name="name" id="name" value="' + inVal3.fldName + '" name="name" class="form-control" placeholder="' + inVal3.fldName + '" required autofocus></span></p></th></tr>'+
                    '<tr><th><p class="" ><span style="color: #269abc">STREAM:</span><span style="color:gray"></th><th><select id="sltcombination" name="sltcombination" value="' + inVal3.fldStream +'" placeholder="' + inVal3.fldStream +'" id="sltcombination" style="width: 50%" class="validate[required]">'+
                                '<option value="">--Select--</option>'+
                                '<option value="Information Science">Information Science</option>'+
                                '<option value="Computer Science">Computer Science</option>'+
                                '<option value="Electricals">Electricals</option>'+
                                '<option value="Mechanical">Mechanical</option>'+
                                '<option value="Electronics">Electronics</option>'+
                                '</select></span></p></th></tr>'+
                    '<tr><th><p class="lead"> <span style="color: #269abc">SEM:</span><span style="color:gray"></th><th><select name="sltsem"  value="' + inVal3.fldSem +'" placeholder="' + inVal3.fldSem +'" id="sltsem" style="width: 50%" class="validate[required]">'+
                                            '<option value="">--Select--</option>'+
                                            '<option value="1">1</option>'+
                                            '<option value="2">2</option>'+
                                            '<option value="3">3</option>'+
                                            '<option value="4">4</option>'+
                                            '<option value="5">5</option>'+
                                            '<option value="5">6</option>'+
                                            '<option value="5">7</option>'+
                                            '<option value="5">8</option>'+
                                '</select></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">GENDER:</span><span class="lead" style="color:gray"></th><th><select id="sltgender" value="' + inVal3.fldGender +'" placeholder="' + inVal3.fldGender +'"name="sltgender" style="width: 50%" class="validate[required]">'+
                                            '<option value="">--Select--</option>'+
                                            '<option value="Male">Male</option>'+
                                            '<option value="Female">Female</option>'+
                                '</select></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">COLLEGE:</span><span class="lead" style="color:gray"></th><th><input type="text" value="' + inVal3.fldCollege +'" placeholder="' + inVal3.fldCollege +'" name="college" id="college" class="form-control" required autofocus></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">HOMETOWN:</span><span class="lead" style="color:gray"></th><th><input type="text" value="' + inVal3.fldHome +'" placeholder="' + inVal3.fldHome +'" name="home" id="home" class="form-control" required autofocus></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">PHONE:</span><span class="lead" style="color:gray"></th><th><input type="text" name="phone" id="phone" value="' + inVal3.fldPhone +'" placeholder="' + inVal3.fldPhone +'" class="form-control" required autofocus></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">E-MAIL:</span><span class="lead" style="color:gray"></th><th><input type="email" id="email" name="email" value="' + inVal3.fldEmail +'" placeholder="' + inVal3.fldEmail +'" class="form-control" required autofocus></span></p></th></tr>'+
                    '<tr><th><p class="lead"><span style="color: #269abc">ABOUT ME:</span><span class="lead" style="color:gray"></th><th><input type="text" id="about" name="about" value="' + inVal3.fldAbout +'" placeholder="' + inVal3.fldSem +'" class="form-control" required autofocus></span></p></th></tr>'+
                    '</table>';
    });
    $('.profileedit').html(Str3);
});
$('#submit').click(updateData);

function updateData() {
   var a='name=' + $('#name').val() + '&sltcombination=' + $('#sltcombination').val() + '&sltsem=' + $('#sltsem').val() + '&sltgender=' + $('#sltgender').val() + '&college=' + $('#college').val() +'&home=' + $('#home').val() +'&phone=' + $('#phone').val()+'&email=' + $('#email').val()+'&about=' + $('#about').val();
   
    $.ajax({
            type: "POST",
            url: "/profileedit/updateData",
            data: a,
            //          cache: false,
            success: function(response) {
               // alert(' Response : ' + response);
               
                               alert("RECORD UPDATED refresh to view changes");
                               location.reload(false);
                               
                               

            }
        });
    }





