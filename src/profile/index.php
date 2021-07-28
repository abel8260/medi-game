    <?php 
        session_start(); 
    ?>

<!DOCTYPE html>
<html>

	<head>
		<title>MEDIGAME - profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
        <style>
            #box1{
                width:22%; height:30%; 
                left:10%; top:30%; position:absolute;
                background-image:url('../../img/background.png');
                background-size:100%;
            }
            #box2{
                width:22%; height:30%;
                left:40%; top:30%; position:absolute; 
                background-image:url('../../img/background.png');
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
            
            <div id="box1">

                <p style= "text-align: center;"> <?php echo $_SESSION['tempo']; ?> minutos </p>

            </div>


            
                <div id="box2">

                    <p style= "text-align: center;"> piece of light </p>

                </div>
           
     </div>
    </body>

   
</html>