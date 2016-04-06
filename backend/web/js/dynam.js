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
    
    

$("#tour-category").change(function() {
    id=$("#tour-category").val();
  $.ajax({ url: "index.php?r=category/getsubcategory&id="+id, type:'POST', 
      data: "id=" + id,
      dataType: 'json',
        success: function(data){
        $.each(data, function (index, value) {
  console.log(value.category_name);
  $("#sub").html('<label for="tour-subcategory" class="control-label">SubCategory</label>'+
'<select class="form-control"><option value='+value.category_id+'>'+value.category_name+'</option></select>');
        
        })
  }});
});


    
    
    
    
    
    });



