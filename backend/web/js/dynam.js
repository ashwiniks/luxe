jQuery(document).ready(function ($) {

    var i = 1;
    $(".add_m").click(function () {
alert('don');
        var $cloned = $(".copy").clone();
        $cloned.attr('class','copy'+i);
        $cloned.appendTo(".test");

       
        //i = i + 1;
        return false;
    });
    
    
    });



