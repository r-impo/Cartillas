$(document).ready(function() {
  $('#search_input').keyup(function() {
    clearTimeout($.data(this, 'timer'));
    var wait = setTimeout(showUser($(this).val()), 500);
    $(this).data('timer', wait);
  });
});

function showUser(str) {
    if (str == "") {
        $('#resultados_medico').html('');
        $('#resultados_especialidad').html('');
        $('#resultados_localidad').html('');
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
  console.log(users);
  let target = $('#resultados_parent');

  if (target.children().length > 1) {
    target.children().remove();
  }
  if (users.length > 0) {
    for (user of users) {
      medico = '<p class="col-xs-4">' + recortar(user.name) + '</p>';
      especialidad = '<p class="col-xs-4">' + recortar(user.especialidad) + '</p>';
      localidad = '<p class="col-xs-4">' + recortar(user.localidad) + '</p>';

      target.append($('<a />', {"class": "row", "href": "/medico/" + user.id}).append(medico, especialidad, localidad));
      target.append('<hr>');
    }
    $('#resultados_parent').removeClass('hidden');
  }

  function recortar(str) {
    if (str.length > 25) {
      str = str.substring(0, 25) + "...";
    }
    return str;
  }
}
