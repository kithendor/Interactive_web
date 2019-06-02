function getit() {
	resulttxt();
}

function resulttxt() {
	var xhttp = new XMLHttpRequest();
	
	xhttp.open("GET", "books.xml", true);
  	xhttp.send();

  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	showresult(this.responseXML);     
    }
 
  };
  
}

function showresult(x)
{
  var y = x.getElementsByTagName("book");
  var z  = y[1].getElementsByTagName("Title")[1].childNodes[0].nodeValue;
	document.getElementById("getdata").innerHTML = z;


  //................................
  var table = "<table><tr><th>Title</th><th>Author</th></tr>";

  for(var i = 0; i<y.length;i++)
  {
    table += "<tr><td>"+y[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue+"</td><td>"+y[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue+"</td></tr>";
  }
  table+="</table>";

  document.getElementById("getdata2").innerHTML = table;

  //..........................
  var body = document.getElementById('getdata3');
  var tbl = document.createElement('table');
  
  tbl.setAttribute('border', '1');
  var tbdy = document.createElement('tbody');
  for (var i = 0; i < y.length; i++) {
    var tr = document.createElement('tr');
    var td = document.createElement('td');
    td.appendChild(document.createTextNode(y[i].getElementsByTagName("Title")[0].childNodes[0].nodeValue));
    tr.appendChild(td);

    var td2 = document.createElement('td');
    td2.appendChild(document.createTextNode(y[i].getElementsByTagName("Author")[0].childNodes[0].nodeValue));
    tr.appendChild(td2);
    
    tbdy.appendChild(tr);
  }
  tbl.appendChild(tbdy);
  body.appendChild(tbl);
}