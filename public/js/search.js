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
        document.getElementById("resultados").innerHTML = "";
        $('#resultados_parent').addClass('hidden');
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
  let users = JSON.parse(results);

  let target = document.getElementById('resultados');

  if (target.innerHTML !== '') {
    target.innerHTML = '';
  }
  for (user of users) {
    target.innerHTML += ('beforeend', '<div>' + user + '</div>');
  }
  $('#resultados_parent').removeClass('hidden');
}
