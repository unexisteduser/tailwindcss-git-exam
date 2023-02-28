const hamburger = document.querySelector('.hamburger');
const navLink = document.querySelector('.category');

hamburger.addEventListener('click', () => {
  navLink.classList.toggle('hidden');
});


$(function() {
  $('#course-form input[id^="num"]').on("keypress", function (e) {
     return _helper.isNumeric(e) ? true : e.preventDefault();
  });

  $('#course-form input[id^="tns"]').on("keypress", function (e) {
     return _helper.allChars(e) ? true : e.preventDefault();
  });    

  $("#btn-new").click(function(){
      $("#tns-sname").focus();
     swal.fire({
         title: 'Do you want create new client details?',
         type: 'question',
         showCancelButton: true,
         confirmButtonText: 'Yes',
         cancelButtonText: 'Cancel!',
         confirmButtonClass: 'btn btn-outline-success',
         cancelButtonClass: 'btn btn-outline-danger',
         allowOutsideClick: false,
         buttonsStyling: false
     }).then(function(result) {
         if(result.value) {
           initialize();
         }
    });
  });

  function initialize(){
    $("#tns-sname").val('');
    $("#tns-subid").val('');
    $("#tns-tname").val('');
    $("#num-phone").val('');
    $("#tns-cperson").val('');
    $("#tns-sname").focus();
  } 

  $(".clientlist").on("click", "tbody .btnEditClient", function(){
    var idClient = $(this).attr("idClient");
    window.location = "index.php?route=clientedit&idClient="+idClient;
  });     	
});    