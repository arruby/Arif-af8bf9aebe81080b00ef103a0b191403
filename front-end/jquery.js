$(document).ready(function(){
    console.log('pppppp');
});

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('waktu').innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

$("#cek").on("click", function() {
    console.log('tombol');

    $.ajax({
        url: '../back-end/ambil.php',
        type: 'get',
        dataType: 'html',
        success: function(data){
            $('#login').html(data);
        }
    });
})