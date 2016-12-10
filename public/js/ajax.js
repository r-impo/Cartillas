//#################################################
//
//               NO FUNCIONA!
//
// ################################################
let ajax, results;

$(document).ready(function() {
  ajax = new Ajax();
  results = new Results();

  $('#search_input').keyup(function() {
    clearTimeout($.data(this, 'timer'));
    var wait = setTimeout(ajax.request($(this).val()), 500);
    $(this).data('timer', wait);
  });
  $("#search_input").keypress(function(e) {
    if(e.which == 13 && $("#search_input").is(":focus")) {
      window.location = '/medicos/' + $(this).val();
    }
  });
});

function Ajax() {
  this.xmlhttp;
  this.result;

  this.request = function(str) {
    if (window.XMLHttpRequest) {
      this.xmlhttp = new XMLHttpRequest();
      this.listen();
      this.xmlhttp.open("GET", "search/"+str, true);
      this.xmlhttp.send();
    }
  }

  this.listen = function() {
    let parse = this.parse;
    this.xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        parse(this.responseText);
      }
    }
    return;
  }

  this.parse = function(data) {
    this.result = JSON.parse(data);
    ajax.validate();
  }

  this.validate = function() {
    if (result.length < 1) {
      results.wipe();
    } else {
      results.show(this.result);
    }
  }
}

function Results() {
  this.openP = '<p class="col-xs-4">';
  this.closeP = '</p>';

  this.columnas = {
    medico: $('#resultados_medico'),
    especialidad: $('#resultados_especialidad'),
    localidad: $('#resultados_localidad')
  }

  this.parent = $('#resultados_parent');

  this.wipe = function() {
      for (columna of this.columnas) {
        columna.html('');
      }
      this.parent.addClass('hidden');
  }

  this.show = function(results) {
    this.clearOld();
    for (result of results) {
      let medico = this.openP + this.crop(result.name) + closeP;
      let especialidad = this.openP + this.crop(result.especialidad) + closeP;
      let localidad = this.openP + this.crop(result.localidad) + closeP;

      this.parent.append($('<a />', {
        "class": "row",
        "href": "/medico/" + result.id
      }).append(medico, especialidad, localidad));
    }
    $('#resultados_parent hr:last-child').remove();
    this.parent.removeClass('hidden');
  }

  this.clearOld = function() {
    if (this.parent.children().length > 1) {
      this.parent.children().remove();
    }
    return;
  }

  this.crop = function(str) {
    if (str.length > 25) {
      str = str.substring(0, 25) + "...";
    }
    return str;
  }
}
