$(function () {
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
});
$(document).ready(function() {
	$('#error,#status,#messages').delay(3000).slideUp();
});
function CheckDelete(msg)
{
    if(window.confirm(msg))
    {
        return true;
    }
    return false;
}
$(document).ready(function(){
  $("#addImages").click(function(){
    $("#insert").append('<div class="form-group"><label>Hình</label><input type="file" name="fImageDetail[]"></div>');
  });
});
$(document).ready(function(){
  $("a#del_img_demo").on('click',function(){
    var url = "http://localhost:8000/admin/products/delete-image/";
    var _token = $("form[name='frm']").find("input[name='_token']").val();
    var idHinh = $(this).parent().find("img").attr("idHinh");
    var img = $(this).parent().find("img").attr("src");
    var rid = $(this).parent().find("img").attr("id");
    $.ajax({
      url:url + idHinh,
      type:'GET',
      cache:false,
      data: {"_token":_token,"idHinh":idHinh,"urlHinh":img},
      success: function(data){
        if(data=="ok"){
          $("#"+rid).remove();
        }else{
          alert("Error ! Please contact admin");
        }
      }
    });
  });
});
