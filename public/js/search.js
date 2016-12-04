// window.onload = function() {
//   let searchBar = document.getElementById('search_input');
//   let keyDown = searchBar.addEventListener('key')
// }

$(document).ready(function() {
  $('#search_input').keyup(function() {
    showUser($(this).val());
  });
});

function showUser(str) {
    console.log(str)
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
                document.getElementById("resultados").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "search/"+str, true);
        xmlhttp.send();
    }
}
