<!---------------------------------------->
<!---php-script--------------------------->
<?php 


        session_start(); 


            if ($_SESSION['tempo']== NULL){
                $_SESSION['tempo']=0;
            };



        $nivelar = $_SESSION['tempo'];
        $nivel = 1;
        $_SESSION['tempo']= $nivel + $nivelar;


        echo ("<p class='p01' sua sessao tem: <br/>  ");
        echo ($_SESSION['tempo']); 
        echo (" minutos"); 
        echo ("l  ");
        echo("apartir de 40.000.000 você ja esta no nivel épico.</p>");

?>
<!--END------------>
<!----------------->


<!DOCTYPE html>
<html>

	<head>
		<title>Home - escolha</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
        <style>
            .sol1{
                left:15%; 
                top:10%; 
                margin-right:10% ; 
                position:absolute; 
                border: white 4px solid; 
            }
            .sol2{
                left:30%; top:10%; margin-right:10% ; position:absolute; border: white 4px solid;
            }
            .sol3{
                left:80%; top:10%; margin-right:10% ; position:absolute; border: white 4px solid;
                
            }
            .p01{
                left:5%; 
                top:1%; 
                margin-right:2% ; 
                position:absolute; 
                border: white 4px solid; 
                background-image:url('../../img/background.png');background-size:100%;
                color:white;
                padding:5px; 
            }
            #box0{
                width:15%; height:20%; 
                left:10%; top:30%; position:absolute;
                background-image:url('../img/res0.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box1{
                width:15%; height:20%; 
                left:30%; top:30%; position:absolute;
                background-image:url('../img/res1.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box2{
                width:15%; height:20%; 
                left:50%; top:30%; position:absolute; 
                background-image:url('../img/res2.jpg');
                background-size:100%;
                 background-repeat:no-repeat; 
            }
            #box3{
                width:15%; height:20%; 
                left:70%; top:30%; position:absolute; 
                background-image:url('../img/res3.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box4{
                width:15%; height:20%; 
                left:10%; top:65%; position:absolute;
                background-image:url('../img/res4.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box5{
                width:15%; height:20%; 
                left:30%; top:65%; position:absolute;
                background-image:url('../img/res5.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box6{
                width:15%; height:20%; 
                left:50%; top:65%; position:absolute; 
                background-image:url('../img/res6.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box8{
                width:15%; height: 20%; 
                left:70%; top:65%; position:absolute; 
                background-image:url('../img/res7.png');
                background-size:100%;
                background-repeat:no-repeat;    
            }
            #box0:hover, #box0:active {
                border: 4px solid white;
                
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
            #box8:hover, #box8:active{
                border: 4px solid white;
                
            }
            @media screen and (max-width:790px ){
                #box0{
                width:92%; height:37.5%; 
                left:4%; top:45%; position:absolute;
                background-image:url('../img/res0.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            .sol1{
                width:  40% ;
                left:30%; top:15%;
            }
            
                .sol2{
                    width:92%;
                left:4%; top:30%; margin-right:10% ; position:absolute; border: white 4px solid;
            }

            .sol3{
                left:80%; top:15%; margin-right:10% ; position:absolute; border: white 4px solid;
                width:12.5%;
            }
            
            #box1{
                width:92%; height:37.5%; 
                left:4%; top:85%; position:absolute;
                background-image:url('../img/res0.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box2{
                width:92%; height:37.5%; 
                left:4%; top:125%; position:absolute;
                background-image:url('../img/res1.jpg');
                background-size:100%;
                 background-repeat:no-repeat; 
            }
            #box3{
                width:92%; height:37.5%; 
                left:4%; top:165%; position:absolute; 
                background-image:url('../img/res2.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box4{
                width:92%; height:37.5%; 
                left:4%; top:205%; position:absolute;
                background-image:url('../img/res3.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box5{
                width:92%; height:37.5%; 
                left:4%; top:245%; position:absolute;
                background-image:url('../img/res4.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box6{
                width:92%; height:37.5%; 
                left:4%; top:285%; position:absolute;
                background-image:url('../img/res5.jpg');
                background-size:100%;
                background-repeat:no-repeat; 
            }
            #box8{
                width:92%; height:37.5%; 
                left:4%; top:325%; position:absolute; 
                background-image:url('../img/res7.png');
                background-size:100%;
                background-repeat:no-repeat;    
            }
            }  
        </style>
	</head>

	<body style="background-image:url('../../img/background.png');background-size:100%; ">
    <div id="princ">
        <div id="box-TITLE">

            <a href="../src/profile/index.php"><img class="sol1"  width='9%' height='9.7%'' src='../../img/profile.png' /></a>
                <a href="../src/home/index.php"/><img class="sol2"  width='40%' height='9.7%'' src='../../img/TITLE.png' style=' @media screen and (max-width:790px ){  }'/></a>
            <a href='https://www.facebook.com/media/set/?vanity=abel.barbosa.23&set=a.4155241721221234'><img class="sol3"  width='4%' height='9.7%'' src='../../img/doc.png' /></a>
        </div>
          
        
        <a href='../img/res0.jpg'>
            <div id="box0">

                


            </div>
        </a>



        <a href='../img/res1.jpg'>
            <div id="box1">

                


            </div>
        </a>


        <a href='../img/res2.jpg'>
            <div id="box2">

                

            </div>
        </a>

        <a href='../img/res3.jpg'>
            <div id="box3">



            </div>
        </a>



        <a href='../img/res4.jpg'>
            <div id="box4">



            </div>
        </a>
        <a href='../img/res5.jpg'>
            <div id="box5">



            </div> 
        </a>
        <a href='../img/res6.jpg'>
            <div id="box6">



            </div>
        </a>

        <a href='../img/res7.png'>
            <div id="box8">



            </div>
        </a>
        
        </div>
    </body>

</html>