<?php 
    session_start(); 
        if ($_SESSION['tempo']== NULL){
            $_SESSION['tempo']=0;
        };

    $nivelar = $_SESSION['tempo'];
    $nivel = 1;
    $_SESSION['tempo']= $nivel + $nivelar;
    echo ("sua sessao tem: <br/>  ");
    echo ($_SESSION['tempo']); 
    echo (" minutos"); 
    echo ("l  ");
    echo("apartir de 40.000.000 você ja esta no nivel épico.");
?>
<!DOCTYPE html>
<html>

	<head>
		<title>Home - escolha</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
        <style>
            #box1{
                width:22%; height:30%; 
                left:10%; top:30%; position:absolute;
                background-image:url('../../img/boss-1.png');
                background-size:100%;
            }
            #box2{
                width:22%; height:30%;
                left:40%; top:30%; position:absolute; 
                background-image:url('../../img/boss-2.png');
                background-size:100%;
            }
            #box3{
                width:22%; height:30%;
                left:70%; top:30%; position:absolute; 
                background-image:url('../../img/boss-3.png');
                background-size:100%;
            }
            #box4{
                width:22%; height:30%; 
                left:10%; top:65%; position:absolute;
                background-image:url('../../img/boss-4.png');
                background-size:100%;
            }
            #box5{
                width:22%; height:30%; 
                left:40%; top:65%; position:absolute;
                background-image:url('../../img/boss-5.png');
                background-size:100%;
            }
            #box6{
                width:22%; height:30%;
                left:70%; top:65%; position:absolute; 
                background-image:url('../../img/boss-6.png');
                background-size:100%;
            }
            #box1:hover, #box1:active {
                border: 4px solid white;
                
            }
            #box2:hover, #box2:active{
                border: 4px solid white;
                
            }
            #box3:hover, #box3:active{
                border: 4px solid white;
                
            }
            #box4:hover, #box4:active{
                border: 4px solid white;
                
            }
            #box5:hover, #box5:active{
                border: 4px solid white;
                
            }
            #box6:hover, #box6:active{
                border: 4px solid white;
                
            }
        </style>
	</head>

	<body style="background-image:url('../../img/background.png');background-size:100%; ">
    <div id="princ">
        <div id="box-TITLE">

            <a href="../profile/index.php"><img class="solo"  width='9%' height='9.7%'' src='../../img/profile.png' style='left:15%; top:10%; margin-right:10% ; position:absolute; border: white 4px solid; '/></a>
                <a href="../home/index.php"/><img class="solo"  width='40%' height='9.7%'' src='../../img/TITLE.png' style='left:30%; top:10%; margin-right:10% ; position:absolute; border: white 4px solid; '/></a>
            <a href='https://www.facebook.com/media/set/?vanity=abel.barbosa.23&set=a.4155241721221234'><img class="solo"  width='4%' height='9.7%'' src='../../img/doc.png' style='left:80%; top:10%; margin-right:10% ; position:absolute; border: white 4px solid; '/></a>
        </div>
            
        <a href='../battle/boss1.php'>
            <div id="box1">

                


            </div>
        </a>


        <a href='../battle/boss2.php'>
            <div id="box2">

                

            </div>
        </a>

        <a href='../battle/boss3.php'>
            <div id="box3">



            </div>
        </a>



        <a href='../battle/boss4.php'>
            <div id="box4">



            </div>
        </a>
        <a href='../battle/boss5.php'>
            <div id="box5">



            </div> 
        </a>
        <a href='../battle/boss6.php'>
            <div id="box6">



            </div>
        </a>
        </div>
    </body>

</html>