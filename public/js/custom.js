/* Filename: custom.js */
var x=0;
$(document).ready(function() {
    $("div").click(function() {
        {

            if(x==0)
            {
                $('#newdiv').attr('style', 'background: blue');
                x++;
            }

            else
            {
                $('#newdiv').attr('style', 'background: deeppink');
                x=0;

            }

        }

            //alert("Hello world!");
    });
});



