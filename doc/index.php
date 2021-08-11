<!--php-files------------>
<!--contador-de-tempo---->
<!--var-lv-leveller------>
<!----------------------->
    <!--php-files------------>
    <!--grupo---------------->
    <!----------------------->

    <?php 

        //--php-files------------>
        //--abertura-de-sessao--->
        //----------------------->

            session_start(); 

            //--php-files------------>
            //--grupo---------------->
            //----------------------->


                //--php-files------------>
                //--grupo---------------->
                //--var:tempo:index------>

                    if ($_SESSION['tempo']== NULL){
                        $_SESSION['tempo']=0;
                    };  

                //----------------------->
                //--fim:-php-files------->

                    //--php-files------------>
                    //--grupo---------------->
                    //processamento-de-tempo->
                        $nivelar = $_SESSION['tempo'];
                        $nivel = 1;
                        $_SESSION['tempo']= $nivel + $nivelar;
                    //----------------------->
                    //--fim:-php-files------->
                    
                        //--php-files------------>
                        //--grupo---------------->
                        //dev-de-paragraph------->
                            echo ("<p class='p01' sua sessao tem: <br/>  ");
                        //----------------------->
                        //--fim:-php-files------->





                        //--php-files------------>
                        //--grupo---------------->
                        //--temp0-mostrado------->       
                            echo ($_SESSION['tempo']); 
                        //----------------------->
                        //--fim:-php-files------->              

                    //----------------------->
                    //--fim:-php-files------->
                //----------------------->
                //--fim:-php-files------->
            //----------------------->
            //--fim:-php-files------->

        echo (" minutos"); 
        echo ("|  ");
        echo("apartir de 40.000.000 você ja esta no nivel épico.</p>");
        //----------------------->
        //--fim:-php-files------->
        ?>

    <!----------------------->
    <!--fim:-php-files------->

<!----------------------->
<!--fim:-php-files------->


<!--php-files------------>
<!--grupo---------------->
<!--dev-de-html---------->

    <!--html-files----------->
    <!--definiçap-de-bbilioteca-->
    <!----------------------->

    <!DOCTYPE html>

    <!----------------------->
    <!--fim:-html-files------>

        <html> <!-- open the html tag to recognize the html language the  other is from the file scpecilly-->  

            <head> <!--this is where stands the title and other things much important of html file -->   

                <title>Home - escolha</title> <!--this is where stand s the title f web fle application-->   

                <!--html-files------------------->
                <!--Note: in html is im---------->
                <!--portant that we open--------->
                <!-- and close the tags-----------
                even that there is no erason to it.  
                ---------------------------------->
                <!-----------fim:-html-files------>

                <link rel="stylesheet" type="text/css" href="css/style.css"/> <!--link tag is to link a external file  or script to internal logs-->    

                <style>/*-- tag style is for open ths cascade code CSS  ok? */   

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

                    .p01{/* that operator i use it to more than  an auxiliar for the text and so on*/
                        left:5%; /* 5% from entire width is left from the element that port */
                        top:1%; /* 1% from entire height is the distance from top ok?*/
                        margin-right:2% ; /* 2% of distance from margin right*/
                        position:absolute; /* position editable */
                        border: white 4px solid; /* properties from border of that element */
                        background-image:url('../../img/background.png'); /* defines a url string based to the path from the fiele*/   
                        background-size:100%; /* 100% of all size background  */
                        color:white; /* print the color white, is necesseraly both them colors, in text from element that port p01; */  
                        padding:5px; /* 5pixels  of distance from width,height internal */  
                    }/* that operator i use it to more than  an auxiliar for the text and so on*/

                    #box0{/* that initializes  the class box0 and { is for open the class*/     
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */
                        left:10%; /* 10% from the left  and 10% of entire width */ 
                        top:30%;  /* 30% from the top and 30% of entire height */ 
                        position:absolute; /* position editablee  */ 
                        background-image:url('../img/res0.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;  /* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */   
                    }/* that finalizes the class box0  and  } is for close the class */     

                    #box1{/* that initializes  the class box1 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */
                        left:30%; /* 30% from the left  and 30% of entire width */
                        top:30%;  /* 30% from the top and 30% of entire height */ 
                        position:absolute; /* position editablee  */
                        background-image:url('../img/res1.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */   
                    }/* that finalizes the class box0  and  } is for close the class */     


                    #box2{/* that initializes  the class box2 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */
                        left:50%;/* 50% from the left  and 50% of entire width */
                        top:30%; /* 30% from the top and 30% of entire height */
                        position:absolute; /* position editablee  */
                        background-image:url('../img/res2.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box3{/* that initializes  the class box3 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */
                        left:70%; /* 70% from the left  and 70% of entire width */
                        top:30%; /* 30% from the top and 30% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../img/res3.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box4{/* that initializes  the class box4 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */ 
                        left:10%; /* 10% from the left  and 10% of entire width */
                        top:65%; /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../img/res4.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box5{/* that initializes  the class box5 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */  
                        left:30%;/* 30% from the left  and 30% of entire width */
                        top:65%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../img/res5.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box6{/* that initializes  the class box6 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */   
                        left:50%; /* 50% from the left  and 50% of entire width */
                        top:65%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../img/res6.jpg');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box8{/* that initializes  the class box8 and { is for open the class*/ 
                        width:15%; /* 15% from the entire width from screen */
                        height:20%; /* 20% from entire height from screen */  
                        left:70%;  /* 70% from the left  and 70% of entire width */
                        top:65%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */
                        background-image:url('../img/res7.png');/* defines a url string based to the path from the fiele*/   
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

                    #box8:hover, #box8:active{/* :hover the above situation; :active is pseudoclass to help the others in the interation*/      
                        border: 4px solid white;/* properties of the border; */
                        
                    }

                    @media screen and (max-width:790px ){
                      

                        .sol1{ /* that operator i use it to more than  an auxiliar for images and so on*/        
                        width:40%;/* how large as 40%*/   
                        left:30%;  /* 30% from entire width is left from the element that port sol1*/ 
                        top:15%;/* 15% from entire height is the distance from top ok?*/ 
                    }/* that } is to close the class sol1 input ok? lets go foward  */  
                    
                    .sol2{/* that operator i use it to more than  an auxiliar for images and so on*/ 
                        width:92%; /* how large as 40%*/  
                        left:4%; /* 30% from entire width is left from the element that port sol2*/
                        top:30%;/* 10% from entire height is the distance from top ok?*/ 
                         margin-right:10% ;/* 10% of distance from margin right*/
                          position:absolute; /* position editable */ 
                          border: white 4px solid;  /* properties from border of that element */
                    }/* that } is to close the class sol1 input ok? lets go foward  */

                    .sol3{/* that operator i use it to more than  an auxiliar for images and so on*/
                        left:80%; /* 80% from entire width is left from the element that port */
                        top:15%; /* 10% from entire height is the distance from top ok?*/ 
                        margin-right:10% ; /* 10% of distance from margin right*/
                        position:absolute; /* position editable */
                        border: white 4px solid;/* properties from border of that element */
                        width:12.5%; /*how large as 40% from the screen */  
                    }/* that } is to close the class sol1 input ok? lets go foward  */

                    
                    #box0{/* that initializes  the class box0 and { is for open the class*/     
                        width: 92%; /* 92% from the entire width from screen */
                        height:37.5%; /* 37.5% from entire height from screen */
                        left:4%; /* 4% from the left  and 4% of entire width */ 
                        top:45%;  /* 45% from the top and 45% of entire height */ 
                        position:absolute; /* position editablee  */ 
                        background-image:url('../../img/boss-0.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;  /* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */   
                    }/* that finalizes the class box0  and  } is for close the class */ 

                     
                    #box1{/* that initializes  the class box1 and { is for open the class*/ 
                        width:92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */
                        left:4%; /* 30% from the left  and 30% of entire width */
                        top:85%;  /* 30% from the top and 30% of entire height */ 
                        position:absolute; /* position editablee  */
                        background-image:url('../../img/boss-1.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */   
                    }/* that finalizes the class box0  and  } is for close the class */

                    #box2{/* that initializes  the class box2 and { is for open the class*/ 
                        width: 92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */
                        left:4%;/* 50% from the left  and 50% of entire width */
                        top:125%; /* 30% from the top and 30% of entire height */
                        position:absolute; /* position editablee  */
                        background-image:url('../img/boss-2.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */                


                    #box3{/* that initializes  the class box3 and { is for open the class*/ 
                        width:92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */
                        left:4%; /* 70% from the left  and 70% of entire width */
                        top:165%; /* 30% from the top and 30% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../../img/boss-3.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */


                    #box4{/* that initializes  the class box4 and { is for open the class*/ 
                        width: 92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */ 
                        left:4%; /* 10% from the left  and 10% of entire width */
                        top:205%; /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../../img/boss-4.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */


                    #box5{/* that initializes  the class box5 and { is for open the class*/ 
                        width:92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */  
                        left:4%;/* 30% from the left  and 30% of entire width */
                        top:245%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../../img/boss-5.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */


                    #box6{/* that initializes  the class box6 and { is for open the class*/ 
                        width:92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */   
                        left:4%; /* 50% from the left  and 50% of entire width */
                        top:285%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */ 
                        background-image:url('../../img/boss-6.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */

                    
                    #box8{/* that initializes  the class box8 and { is for open the class*/ 
                        width:92%; /* 15% from the entire width from screen */
                        height:37.5%; /* 20% from entire height from screen */  
                        left:4%;  /* 70% from the left  and 70% of entire width */
                        top:325%;  /* 65% from the top and 65% of entire height */
                        position:absolute; /* position editablee  */
                        background-image:url('../../img/boss-8.png');/* defines a url string based to the path from the fiele*/   
                        background-size:100%;/* 100% of all size background  based in both: width and height */
                        background-repeat:no-repeat; /* rule to not repeat the entire image onthe screen behind */  
                    }/* that finalizes the class box0  and  } is for close the class */
                    
                    }  
                </style>
                <!----------------------->
                <!--fim:-style----------->

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
                                        <a href="../src/profile/index.php"><img class="sol1"  width='9%' height='9.7%'' src='../../img/profile.png' /></a><!-----------------------><!--fim:-a--------------->
                                        <a href="../src/home/index.php"/><img class="sol2"  width='40%' height='9.7%'' src='../../img/TITLE.png' style=' @media screen and (max-width:790px ){  }'/></a><!-----------------------><!--fim:-a--------------->
                                        <a href='https://www.facebook.com/media/set/?vanity=abel.barbosa.23&set=a.4155241721221234'><img class="sol3"  width='4%' height='9.7%'' src='../../img/doc.png' /></a><!-----------------------><!--fim:-a--------------->
                                    </div>

                                    <!----------------------->
                                    <!--fim:-div------------->

                                <!----------------------->
                                <!--fim:-grupo----------->

                                <!--html-files--------------->
                                <!--grupo-painel------------->
                                <!--------------------------->
                                
                                    <a href='../img/res0.jpg'><!--linkagem----------------->
                                        <div id="box0"><!--div-da-box-0---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res1.jpg'><!--linkagem----------------->
                                        <div id="box1"><!--div-da-box-1---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res2.jpg'><!--linkagem----------------->
                                        <div id="box2"><!--div-da-box-2---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res3.jpg'><!--linkagem----------------->
                                        <div id="box3"><!--div-da-box-3---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res4.jpg'><!--linkagem----------------->
                                        <div id="box4"><!--div-da-box-4---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res5.jpg'><!--linkagem----------------->
                                        <div id="box5"><!--div-da-box-5---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res6.jpg'><!--linkagem----------------->
                                        <div id="box6"><!--div-da-box-6---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->

                                    <a href='../img/res7.png'><!--linkagem----------------->
                                        <div id="box8"><!--div-da-box-8---> 

                                        </div>
                                        <!----------------------->
                                        <!--fim:-div------------->
                                    </a>
                                    <!----------------------->
                                    <!--fim:-a--------------->


                                <!----------------------->
                                <!--fim:-grupo----------->
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