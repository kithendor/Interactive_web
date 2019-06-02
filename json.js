var city;



function getit() {
 city = document.getElementById("setname").value.trim();
resulttxt();
}

function resulttxt() {
	var xhttp = new XMLHttpRequest();
	
//	xhttp.open("GET", "https://www.alphavantage.co/query?function=TIME_SERIES_INTRADAY&symbol=MSFT&interval=5min&apikey=demo", true);
  	xhttp.open("GET","https:/api.openweathermap.org/data/2.5/weather?q=London&appid=f24f40b1c24505685fce3b8acd0fcffc",true);
  //xhttp.open("GET","json.json",true);

    xhttp.send();

  	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	showresult(this.responseText);     
    }
 
  };
  
}


function showresult(x)
{
  
  var a1 = JSON.parse(x);
  document.getElementById("getdata1").innerHTML = a1["main"]["temp"];
  document.getElementById("getdata2").innerHTML = a1["weather"][0]["description"];
  var image = a1["weather"][0]["icon"];//10d
  document.getElementById("iconaki").src="http://openweathermap.org/img/w/"+image+".png";











//   document.getElementById("getdata1").innerHTML = a1['main']['temp'];
//   var icon = a1['weather'][0]['icon'];
// document.getElementById("iconaki").src = "http://openweathermap.org/img/w/"+icon+".png";
// document.getElementById("getdata3").innerHTML = a1['weather'][0]['description'];

 //  var a1 = JSON.parse(x).cars;
	// document.getElementById("getdata").innerHTML = a1[0].namaki;
}