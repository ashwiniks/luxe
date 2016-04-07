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
    
    
$("#sub").hide();
$("#sub1").hide();
$("#tour-category").change(function() {
    $("#sub").show();
    $("#sub1").show();
    id=$("#tour-category").val();
  $.ajax({ url: "index.php?r=category/getsubcategory&id="+id, type:'POST', 
      data: "id=" + id,
      dataType: 'json',
        success: function(data){
        $.each(data, function (index, value) {
  
        $("#sub").append('<option value='+value.category_id+'>'+value.category_name+'</option>');
        })
  }});
});


    
    
    
    
    
    });



