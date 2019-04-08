function getit() {
	resulttxt();
}

function resulttxt() {
	var xhttp = new XMLHttpRequest();
	
	xhttp.open("GET", "test.txt", true);
  	xhttp.send();

  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	showresult(this.responseText); 
    	//document.write(this.responseText);    
    } 
  };  
}

function showresult(x)
{
	document.getElementById("getdata").innerHTML = x;
}

