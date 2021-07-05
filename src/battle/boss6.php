<?php 
  session_start(); 

    $nivelar= $_SESSION['tempo'];
    $nivel = 4500000000000;
    $_SESSION['tempo']= $nivel + $nivelar;

?>
<!DOCTYPE html>
  <html>

    <head>
      <title>BATALHA</title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    </head>

      <body style="background-image:url('../../img/background.png');background-size:100%; ">
        <div class="w3-border">
              <div id="myBar1" class="w3-container w3-red"  style="top:0px; left:0%; height:24px;width:100%"> ?? minutos</div>
          </div>

          <div class="w3-border">
              <div id="myBar2" class="w3-container w3-white" style="top:0px;left:20%;height:24px;width:100%">?? minutos</div>
          </div> 

          <div class="w3-border">
              <div id="myBar3" class="w3-container w3-blue" style="top:0px;left:80%;height:24px;width:100%">?? minutos</div>
          </div> 

        <img class="solo w3-spin"  width='20%' height='20%' src='../../img/boss-6.png' style='left:40%; top:45%; position:absolute; '/>


          <button class="w3-button w3-light-grey" onclick="move1()">fatality</button>
          <button class="w3-button w3-light-grey" onclick="move2()">atacar o life</button>
          <button class="w3-button w3-light-grey" onclick="move3()">atacar escudo</button>

        <script>
          function move1() {
            var elem = document.getElementById("myBar1");
            var width = 1;
            var id = setInterval(frame, 1080000);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
              } else {
                width++;
                elem.style.width = width + '%';
              }
            }
          }
          function move2() {
            var elem = document.getElementById("myBar2");
            var width = 1;
            var id = setInterval(frame, 3240000);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
              } else {
                width++;
                elem.style.width = width + '%';
              }
            }
          }
          function move3() {
            var elem = document.getElementById("myBar3");
            var width = 1;
            var id = setInterval(frame, 1080000);
            function frame() {
              if (width >= 100) {
                clearInterval(id);
              } else {
                width++;
                elem.style.width = width + '%';
              }
            }
          }
        </script>



	    </body>

    </html>