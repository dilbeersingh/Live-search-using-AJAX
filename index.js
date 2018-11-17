function getdata(str) {
    if(str.length==0)
        {
        document.getElementById("searchdata").innerHTML = "";
        return;
        }
    
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("searchdata").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET","getperson.php?q="+str, true);
  xhttp.send();
}