function fun1() {
  getdata();
}


function getdata() {
  var xhttp = new XMLHttpRequest();

  xhttp.open("GET", "kalimera.txt", true);
  xhttp.send();

    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      alert("den doueuei");
      //showresult(this.responseText);
      //document.write(this.responseText);
    } 
  };
  }
