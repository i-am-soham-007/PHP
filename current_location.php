<!DOCTYPE html>
<html>
<head>
   <title></title>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
</head>
<body>

<p id="output"></p>
<script>
   var x = document.getElementById('output');
getlocation();
function getlocation()
{
    if(navigator.geolocation)
    {
      navigator.geolocation.getCurrentPosition(showPosition);

    }else{

      x.innerHTML = "Browser Not Supported";
    }
}


function showPosition(position){
/*
   x.innerHTML = "Latitude = "+position.coords.latitude;
   x.innerHTML += "</br>";
   x.innerHTML += "Longitude = "+position.coords.longitude
*/
   var lat = position.coords.latitude;
   var long = position.coords.longitude;
   alert(lat);
   alert(long);

   var url = "https://maps.googleapis.com/maps/api/geocode/json?address="+position.coords.latitude+","+position.coords.longitude+"&key=AIzaSyCVCxUC-kXtL7NbMZHh1P6zxmfgW9ef-Q0";

      x.innerHTML = url;
}
</script>
</body>
</html>