<!--php-files------------>
<!----------------------->
    <!--php-files------------>
    <!--grupo---------------->
    <!----------------------->
        <?php 

            //--php-files------------>
            //--abertura-de-sessao--->
            //----------------------->
                session_start(); 
            
            //----------------------->
            //--fim:-php-files------->
        ?>
    <!----------------------->
    <!--fim:-php-files-------> 

    <!--html-files----------->
    <!--definiçao-de-biblioteca-->
    <!----------------------->
<!DOCTYPE html>
    <html>

        <head>

            <title>MEDIGAME - perfil</title>

            <link rel="stylesheet" type="text/css" href="css/style.css"/>

            <style>
                    .sol1{ /* that operator i use it to more than  an auxiliar for images and so on*/        
                        left:15%; /* 15% from entire width is left from the element that port sol1*/ 
                        top:10%; /* 10% from entire height is the distance from top ok?*/ 
                        margin-right:10% ; /* 10% of distance from margin right*/   
                        position:absolute; /* position editable */ 
                        border: white 4px solid; /* properties from border of that element */  
                    }/* that } is to close the class sol1 input ok? lets go foward  */   

                    .sol2{/* that operator i use it to more than  an auxiliar for images and so on*/ 
                        left:30%; /* 30% from entire width is left from the element that port sol2*/
                        top:10%;/* 10% from entire height is the distance from top ok?*/ 
                         margin-right:10% ;/* 10% of distance from margin right*/
                          position:absolute; /* position editable */ 
                          border: white 4px solid;  /* properties from border of that element */
                    }/* that } is to close the class sol1 input ok? lets go foward  */   

                    .sol3{/* that operator i use it to more than  an auxiliar for images and so on*/
                        left:80%; /* 80% from entire width is left from the element that port */
                        top:10%; /* 10% from entire height is the distance from top ok?*/ 
                        margin-right:10% ; /* 10% of distance from margin right*/
                        position:absolute; /* position editable */
                        border: white 4px solid;/* properties from border of that element */
                        
                    }/* that } is to close the class sol1 input ok? lets go foward  */
                    #box1{/* that initializes  the class box1 and { is for open the class*/ 
                        width:22%; /* 15% from the entire width from screen */
                        height:30%; /* 20% from entire height from screen */
                        left:10%; /* 30% from the left  and 30% of entire width */
                        top:30%;  /* 30% from the top and 30% of entire height */ 
                        position:absolute; /* position editablee  */
                        background-image:url('../../img/background.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */   
                    }/* that finalizes the class box0  and  } is for close the class */     


                    #box2{/* that initializes  the class box2 and { is for open the class*/ 
                        width:22%; /* 15% from the entire width from screen */
                        height:30%; /* 20% from entire height from screen */
                        left:40%;/* 50% from the left  and 50% of entire width */
                        top:30%; /* 30% from the top and 30% of entire height */
                        position:absolute; /* position editablee  */
                        background-image:url('../../img/background.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box0:hover, #box0:active { /* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    #box1:hover, #box1:active {/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    #box2:hover, #box2:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    #box3:hover, #box3:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }
                    #box4:hover, #box4:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    #box5:hover, #box5:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    #box6:hover, #box6:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }


            </style>

        </head>
            <!----------------------->
            <!--fim:-head------------>
                <!--html-files----------->
                <!--grupo---------------->
                <!----------------------->
                    <body style="background-image:url('../../img/background.png');background-size:100%; ">
                            <!--html-files----------->
                            <!--grupo-princ---------->
                            <!----------------------->
                            <div id="princ">
                                    <!--html-files--------------->
                                    <!--grupo-box-TITLE---------->
                                    <!--------------------------->

                                        <div id="box-TITLE"> <!--box-de-titulo-div--------->
                                            <a href="../../src/profile/index.php"><img class="sol1"  width='9%' height='9.7%'' src='../../img/profile.png' /></a><!-----------------------><!--fim:-a--------------->
                                            <a href="../../src/home/index.php"/><img class="sol2"  width='40%' height='9.7%'' src='../../img/TITLE.png' style=' @media screen and (max-width:790px ){  }'/></a><!-----------------------><!--fim:-a--------------->
                                            <a href='../../doc/index.php'/><img class="sol3"  width='4%' height='9.7%'' src='../../img/doc.png' /></a><!-----------------------><!--fim:-a--------------->
                                        </div>

                                        <!----------------------->
                                        <!--fim:-div------------->

                                    <!----------------------->
                                    <!--fim:-grupo----------->

                                    <!--html-files--------------->
                                    <!--grupo-painel------------->
                                    <!--------------------------->
                
                                    <div id="box1"><!--div-da-box-1---> 

                                        <p style= "text-align: center;"> <?php echo $_SESSION['tempo']; ?> minutos </p>
                                        <!---distribuiçao do tempo------>
                                    </div>
                                    <!----------------------->
                                    <!--fim:-div------------->


                
                                    <div id="box2"><!--div-da-box-2---> 

                                        <p style= "text-align: center;"> piece of light </p>

                                    </div>
                                    <!----------------------->
                                    <!--fim:-div------------->
                                    </div>
                                <!----------------------->
                                <!--fim:-div------------->
                            <!----------------------->
                            <!--fim:-grupo----------->  
                        </body>
                        <!----------------------->
                        <!--fim:-body------------->
                    <!----------------------->
                    <!--fim:-grupo----------->
            </html>
        <!---------------->
        <!--DOCTYPE------->

    <!----------------------->
    <!--fim:-php-files------->
<!----------------------->
<!--fim:-php-files------->