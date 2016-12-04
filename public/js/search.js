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
  console.log(JSON.parse(results));
  let users = JSON.parse(results);
  let medico = document.getElementById('resultados_medico');
  let especialidad = document.getElementById('resultados_especialidad');
  let direccion = document.getElementById('resultados_direccion');

  if (medico.innerHTML !== '' && especialidad.innerHTML !== '' && direccion.innerHTML !== '') {
    medico.innerHTML = '';
    especialidad.innerHTML = '';
    direccion.innerHTML = '';
  }
  for (user of users) {
    medico.innerHTML += ('beforeend', '<p>' + recortar(user.name) + '</p>');
    especialidad.innerHTML += ('beforeend', '<p>' + recortar(user.especialidad) + '</p>');
    direccion.innerHTML += ('beforeend', '<p>' + recortar(user.direccion) + '</p>');
  }
  $('#resultados_parent').removeClass('hidden');

  function recortar(str) {
    if (str.length > 28) {
      str = str.substring(0, 28) + "...";
    }
    return str;
  }
}
