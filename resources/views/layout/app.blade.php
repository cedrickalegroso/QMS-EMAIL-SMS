<html>
<head>

    <!-- title depends on what page it extends -->
    <title>@yield('title')</title>
     
      <!-- Bootstrap Dependencies ( STORED LOCALLY ) -->
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css')}}">
      <!-- CUSTOM STYLING ( STORED LOCALLY ) -->
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css')}}">
    
      <script>
            function startTime() {
              var today = new Date();
              var h = today.getHours();
              var m = today.getMinutes();
              var s = today.getSeconds();
              m = checkTime(m);
              s = checkTime(s);
              document.getElementById('time').innerHTML =
              h + ":" + m + ":" + s;
              var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
              if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
              return i;
            }
            </script>

<script>
  /**
    * Plays a sound using the HTML5 audio tag. Provide mp3 and ogg files for best browser support.
    * @param {string} filename The name of the file. Omit the ending!
    */
  function playSound(filename){
    var mp3Source = '<source src="' + filename + '.mp3" type="audio/mpeg">';
    var oggSource = '<source src="' + filename + '.ogg" type="audio/ogg">';
    var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';
    document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
  }
</script>



</head>

<body onload="startTime(), playSound('/media/notif');">
  <div id="sound"></div>

    <div class="container-fluid bg-cpuyellow p-3">
        <div class="row">
 
            <div class="col-md-1 text-center ml-5"> <!-- Cpu Crest -->
            <img  class="cpu-crest" src="{{ URL::to('media/cpucrest.png')}}" >
            </div>

            <div class="col-md-3 text-left text-white mr-5 mt-2">  <!-- Some heading  -->
               <h3> Central Philippine University Queue System V2.0 </h3>
            </div>

            <div class="col-md-3 text-left text-white mt-2">  <!-- Some heading  -->
                <h3> The time now is </h3>
                <div id="time"></div>
             </div>
 

        </div>
    </div>

    <!-- WHERE CONTENT GOES  -->
    @yield('content')


</body>
</html>