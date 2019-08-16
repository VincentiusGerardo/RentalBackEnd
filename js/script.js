$(function(){
    $('.editor').summernote({
        height: 200,
        disableResizeEditor: true
      });

      $('.selectpicker').selectpicker();
      
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });

      $(".isi:first").addClass('show');

      $(".number").on("keypress keyup blur",function (e) {    
        $(this).val($(this).val().replace(/[^\d].+/, ""));
         if ((e.which < 48 || e.which > 57)) {
             e.preventDefault();
         }
     });
});