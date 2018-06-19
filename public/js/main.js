
// google-map
// function initMap() {
//   // Create a map object and specify the DOM element for display.
//   var myLatLng = {lat: 44.835905, lng: 20.455788};
//     var map = new google.maps.Map(document.getElementById('map'), {
//           center: {lat: 44.801591, lng: 20.455788},
//           zoom: 16
//      });
//     var marker = new google.maps.Marker({
//           position: myLatLng,
//           map: map,
//           title: 'Takovska 45'
//   });
// }
var maxLength = 300;
$('textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;
  $('#chars').text(length);
});


 // Close Navbar Menu on Mobile
 $(document).ready(function () {
    $(".button-collapse").sideNav('');
      $(".close-btn").on( "click", function() {
    $('.button-collapse').sideNav('hide');
  });
  //called when key is pressed in textbox
  $("#number").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });
});