$(document).ready(function(){
    loadMoreData();
    function loadMoreData(page){
      $.ajax({
        url : "/php/fetch_data.php",
        type: "POST",
        cache:false,
        data:{page_no:page},
        success:function(data){
          if (data) {
            $("#pagination").remove();
            $("#loadData").delay(4000).fadeIn().append(data);
          }else{
            $(".loadbtn").prop("disabled", true);
            $(".loadbtn").html('That is All');
          }
        }
      });
    }
    
    $(document).on('click', '.loadbtn', function(){
    //     $("#loaded").html(`
    //     <div class="lds-ring">aqui
    //     </div>
    //   `);
      var pId = $(this).data("id");
      loadMoreData(pId);
    });
});