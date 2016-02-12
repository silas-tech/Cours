document.getElementById('choice').addEventListener("change", choice);
function choice() {
  xhr = new XMLHttpRequest();
  var client = document.getElementById("choice").value;
  console.log(client);
  xhr.onreadystatechange = function() {
    if(xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("answer").innerHTML = xhr.responseText;
    }
  };
  xhr.open('POST', "php/ajax.php");
  xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
  xhr.send("value=" + client);
}
