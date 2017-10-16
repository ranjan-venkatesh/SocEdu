var initialize = function() {
            $('.mydiv').append("<h1>Navbar example</h1>   <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p><p>To see the difference between static and fixed top navbars, just scroll.</p>");

        };

$(document).ready(function() {

    $('.mydiv').html("");
    Str = '';
    $.each(links, function(index, inVal) {
                Str += '<tr> <td width="200" style="vertical-align: middle"> <p  id="title" name="title" class="text-muted"> ' +inVal.title+ '</p></td><td width="300" style="vertical-align: middle"><p id="link" name="link" class="text-muted">' +inVal.content+ '</p></td><td width="100" style="float: top" style="vertical-align: middle"><a href="/admindelclass/removeLinks/' +inVal.ID+'"><p>DELETE</p></a><!--<button style="font-size: 9px;" id="button0" name="button0" class="button btn btn-sm btn-danger " > Delete </a></button>--></td></tr>';
    });
    $('.mydiv').html(Str);
});


        