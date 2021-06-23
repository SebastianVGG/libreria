$(document).ready(function(){
  
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
    loadMoreData();
    function loadMoreData(page){
      var categoria = getUrlParameter('categoria');
      $.ajax({
        url : "fetch_data.php?categoria="+categoria,
        type: "POST",
        cache:false,
        data:{page_no:page},
        success:function(data){
          if (data) {
            $("#pagination").remove();
            $("#loadData").append(data);
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