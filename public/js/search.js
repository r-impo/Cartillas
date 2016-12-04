$(document).ready(function() {
  // $('#search_input').keyup(function() {
  //   showUser($(this).val());
  // });
  $('#search_input').keyup(function() {
    clearTimeout($.data(this, 'timer'));
    var wait = setTimeout(showUser($(this).val()), 500);
    $(this).data('timer', wait);
  });
});

function showUser(str) {
    if (str == "") {
        document.getElementById("search_input").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                showSearchResults(this.responseText);
            }
        };
        xmlhttp.open("GET", "search/"+str, true);
        xmlhttp.send();
    }
}

function showSearchResults(results) {
  let show = JSON.parse(results);
  let target = document.getElementById('resultados');
  for (user of show) {
    target.innerHTML += ('beforeend', '<div class="row">' + user + '</div>');
  }
}
