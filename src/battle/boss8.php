<!--php-session-->

  <?php 
    session_start(); 

      $nivelar= $_SESSION['tempo'];
      $nivel = 45000000000;
      $_SESSION['tempo']= $nivel + $nivelar;

        /*
        session start inicia o movimento de sessao
        a variavel $nivelar é um reaproveitamento da store //_SESSION
        a variavel $nivel armazena o valor inteiro 15 que é a quantidade de minutos
        e porfim é somada tudo a store session com key tempo.              
        */
  ?>

<!--END-->

<!DOCTYPE html>
<html>


    <!--

    doctype define o tipo de documento e add uma theme branca assim como o html     
    o html inicia o script em xhtml. 

    -->

	<head>
		<title>BATALHA</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	</head>

    <!-- 


    head <- inicia o cabeçalho da page      
    title <- identifica e expoe uma string no campo da aba
    link <-  linkador de arquivos externos
    rel <-  tipo de relation
    href= index que identifica ua strig por meio do url 


    -->


  <!--body-->

    <body style="background-image:url('../../img/background.png');background-size:100%; ">

        <!-- 
        BODY <- parte visual do site e que de algum fato importa na  stack do heroku
        style <- introduz codigo css em formato string
        -->



            <div class="w3-border">
                <div id="myBar1" class="w3-container w3-red"  style="top:0px; left:0%; height:24px;width:100%"> ???? minutos</div>
            </div> 
            <div class="w3-border">
                <div id="myBar2" class="w3-container w3-white" style="top:0px;left:20%;height:24px;width:100%"> ???? minutos</div>
            </div> 
            <div class="w3-border">
                <div id="myBar3" class="w3-container w3-blue" style="top:0px;left:80%;height:24px;width:100%"> ???? minutos</div>
            </div> 
              <!-- 
              3 divs- div é uma forma de organizaçao fora-contaner a  q usei.
              class- w3.css tem essa classe w3-border para que em conjunto com w3-container
              e id é usado pra identificar elementos em especfico muito utilizado no js.                     
              -->



        <!--img-->

          <img class="solo w3-spin"  width='20%' height='20%' src='../../img/boss-8.png' style='left:40%; top:45%; position:absolute; '/>
            
            <!--
              img-> html tag paraidentificar uma imagem
              class -> html tag pra classificar, selecionar ou direcionar um ponteiro css. 
              width -> tamanho e largura
              height -> altura
              src -> index que sugere o string identificador de string de caminho
              style -> ja foi citado                    
            -->
            
        <!--END-->

          <!--BUTTONS-->

            <button class="w3-button w3-light-grey" onclick="move1()">fatality</button>
            <button class="w3-button w3-light-grey" onclick="move2()">atacar o life</button>
            <button class="w3-button w3-light-grey" onclick="move3()">atacar escudo</button>

            <!--
              button-> imprime um botao na tela    
              onclick-> evento atributo de button tag
              </ - fecha qualquer tag desde que acompanhada da tag inicial                          
            -->

          <!--END-->


          <script>

            function move1() {
              var elem = document.getElementById("myBar1");
              var width = 1;
              var id = setInterval(frame, 108000000);

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
              var id = setInterval(frame, 324000000);

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
              var id = setInterval(frame, 108000000);

              function frame() {
                if (width >= 100) {
                  clearInterval(id);
                } else {
                  width++;
                  elem.style.width = width + '%';
                }
              }
            }

          </script><!-- tag pra javascript -->      <!--faço questao de nao dominar -->    

    </body> <!-- tag pra finalizar a tag inicial -->   

  </html><!-- tag pra finalizar a tag inicial --> 