let resultParent = $('#resultados_parent');
let resultColumns = [$('#resultados_medico'), $('#resultados_especialidad'), $('#resultados_localidad')];

function ajaxRequest(request) {
  if (request == "") {
    resetResultsDisplay();
  }
  else {
    if (window.XMLHttpRequest) {
      let xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          displayResults(this.responseText);
        }
      }
      xmlhttp.open("GET", "search/"+request, true);
      xmlhttp.send();
    }
  }
}

function displayResults(results) {
  let data = JSON.parse(results);

  if (data.length === 0) {
      resetResultsDisplay();
  } else {
      resultParent.removeClass('hidden');
  }

  if (resultParent.children().length >= 1) {
    resultParent.children().remove();
  }

  let openWrapper = '<p class="col-xs-4">',
      closeWrapper = '</p>';

  for (row of data) {
    resultParent.append($('<a />', {"class": "row", "href": "/medico/" + row.id})
                  .append(openWrapper + cropResults(row.name) + closeWrapper,
                            openWrapper + cropResults(row.especialidad) + closeWrapper,
                              openWrapper + cropResults(row.localidad) + closeWrapper))
                    .append('<hr>');
  }
  $('#resultados_parent hr:last-child').remove();
}

function resetResultsDisplay() {
  for (column of resultColumns) {
    column.html('');
  }
  resultParent.addClass('hidden');
}

function cropResults(str) {
  if (str.length > 25) {
    str = str.substring(0, 25) + "..."
  }
  return str;
}
