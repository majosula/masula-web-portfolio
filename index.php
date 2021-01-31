<?php

if ($_SERVER['SERVER_PORT'] != '443') { 
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); 
    exit(); 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mariáan Šuľa | Personal webportfolio of young guy who is working in IT sector. Self educator in web technologies. Sport lover.  Team player. HTML5, CSS3, JAVASCRIPT, JQUERY, WORDPRESS, PHP,GIT, GITHUB, VMWARE, WINDOWS ADMINISTRATOR, ACTIVE DIRECTORY, POWERSHELL, ADOBE">
    <meta name="keywords" content="portofilio,webportfolio,web,MASULA,Sula,marian,HTML5, CSS3, JAVASCRIPT, JQUERY, WORDPRESS, PHP,GIT, GITHUB, VMWARE, WINDOWS ADMINISTRATOR, ACTIVE DIRECTORY, POWERSHELL, ADOBE">
    <meta name="author" content="Marián Šuľa">

    <meta property="og:locale" content="sk_SK">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mariáan Šuľa | Personal webportfolio of young guy who is working in IT sector">
    <meta property="og:description" content="Mariáan Šuľa | Personal webportfolio of young guy who is working in IT sector. Self educator in web technologies. Sport lover.  Team player. HTML5, CSS3, JAVASCRIPT, JQUERY, WORDPRESS, PHP,GIT, GITHUB, VMWARE, WINDOWS ADMINISTRATOR, ACTIVE DIRECTORY, POWERSHELL, ADOBE.">
    <meta property="og:url" content="https://masula.sk/">
    <meta property="og:site_name" content="BTect">
    <meta name="twitter:description" content="Mariáan Šuľa | Personal webportfolio of young guy who is working in IT sector. Self educator in web technologies. Sport lover.  Team player. HTML5, CSS3, JAVASCRIPT, JQUERY, WORDPRESS, PHP,GIT, GITHUB, VMWARE, WINDOWS ADMINISTRATOR, ACTIVE DIRECTORY, POWERSHELL, ADOBE">
    <meta name="twitter:title" content="Mariáan Šuľa | Personal webportfolio of young guy who is working in IT sector">

   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- EXTRA CSS - FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    
    <script src="https://kit.fontawesome.com/f657d20d04.js" crossorigin="anonymous"></script>
   
    <!--IMG CAROUSEL-->
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">




    <!-- MY CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- JAVASCRIPT LIB. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <title>Marián Šuľa - personal portofilio</title>
    <link rel="icon" type="image/png" href="img/favicon.png"/>

    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha512-UDJtJXfzfsiPPgnI5S1000FPLBHMhvzAMX15I+qG2E2OAzC9P1JzUwJOfnypXiOH7MRPaqzhPbBGDNNj7zBfoA==" crossorigin="anonymous"></script>
    <![endif]-->

  </head>
  <body>


    <!--        NAVIGATION BAR       -->


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
  
              <li class="nav-item ">
                <a class="nav-link active t-c-prim" href="#">MASULA</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="#me">About me</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#myskills">My skills</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#jobs">Work experience</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link" href="#email">Contact me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


<!--        ABOUT ME      -->

      <main>
        <div class="container-fluid bg-light pt-2">
          <div class="container">
            <div class="row justify-content-md-center" id="me">
              <div class="col-sm-12 col-md-10 col-lg-7 col-xl-7 col-xxl-5">
                <h1 class="text-uppercase t-c-prim">About me</h1> 
                <h2 class="t-c-seco">Small introduction</h2> 
                <p class="pb-4">Hello!  Welcome on my personal webportfolio.<br>
                  My name is <strong class="text-uppercase"> Marián Šuľa</strong> and I am young, Slovakian,  23 years old guy. <br> I live in the most beautiful city  
                  <strong><i class="fas fa-city"> </i> Košice. </strong><br>
                  I am sport lover.  <strong>Football <i class="fas fa-futbol"></i></strong> is the most awesome sport for me. <br> Also it is good to go to the  <strong> gym <i class="fas fa-dumbbell"></i></strong> take my time only for me. <br>             
                </p>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
                <img class="img_first" src="img/marian2.png" alt="Marian Sula - author of this website">
              </div>
            </div>
          </div>
        </div>

          
        <!--      SKILLS        -->

        <div class="container-fluid bg-white pb-1 pt-2">
          <div class="container" id="myskills">
  
            <div class="container text-info text-center  pb-2" >
              <h1 class="text-uppercase t-c-prim">MY SKILLS</h1>
    
            </div>
  

            <!--FIRST ROW-->
            <div class="row justify-content-evenly">
                
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="75">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>
                  <strong></strong>
                  <span>HTML 5 <br><i>BOOTSTRAP</i></span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="70">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>          
                  <strong></strong>
                  <span>CSS 3</span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="30">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong ></strong>
                  <span>JAVASCRIPT <br> <i>JQUERY</i></span>
                </div>
              </div>

              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="20">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>WORDPRESS</span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="10">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>PHP</span>
                </div>
              </div>

              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="50">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>GIT / GITHUB</span>
                </div>
              </div>
              
            </div>


            <!--SECOND ROW-->
            <div class="row justify-content-evenly pb-5">
                    
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="80">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>VMWARE <br> <i>VCLOUD DIRECTOR</i> </span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="80">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>WINDOWS SERVER <br> <i>2008+</i></span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="40">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>ACTIVE DIRECTORY </span>
                </div>
              </div>
            
              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="40">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong ></strong>
                  <span>POWERSHELL</span>
                </div>
              </div>

              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="70">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>ADOBE PHOTOSHOP</span>
                </div>
              </div>

              <div class="col-4 col-sm-4 col-lg-2">
                <div class="circle" title="70">
                  <canvas class="temp" style="border: 7px solid #e5e5e5; border-radius: 50%;" width="85" height="85"></canvas>                
                  <strong></strong>
                  <span>ADOBE ILLUSTRATOR </span>
                </div>
              </div>             
            </div>
          </div>
        </div>



        <!--      IMG CAROUSEL         -->

        

        <div class="container-fluid bg-dark py-2 carouselSkills">
          <div class="container text-light">
            <div class="row">
              <div class="col-12 text-center mt-4 t-c-prim ">

                <div class="home-demo">
                  <div class="owl-carousel">
                    
                    <div class="item">
                      <img src="img/icons/html.png" alt="html icon">
                    </div>
                    
                    <div class="item">
                      <img src="img/icons/css.png" alt="css icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/javascript.png" alt="javascript icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/php.png" alt="php icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/bootstrap.png" alt="boostrap icon">
                    </div>
 
                    <div class="item">
                      <img src="img/icons/github.png" alt="github icon">
                    </div>
                    
                                           
                    <div class="item">
                      <img src="img/icons/jquery.png" alt="jquery icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/visualstudio.png" alt="visual studio code icon">
                    </div>

                    
                    <div class="item">
                      <img src="img/icons/wordpress.png" alt="wordpress icon">
                    </div>
                    
                    <div class="item">
                      <img src="img/icons/photoshop.png" alt="photoshop icon">
                    </div>
             
                    <div class="item">
                      <img src="img/icons/illustrator.png" alt="illustrator icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/windows.png" alt="windows icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/powershell.png" alt="powershell icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/vmware.png" alt="vmware icon">
                    </div>

                    <div class="item">
                      <img src="img/icons/google.png" alt="google icon">
                    </div>

                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>





      




        <!--      WORK EXPERIENCE     -->



        <div class="container-fluid bg-light pt-2 pb-2">

          <div class="container text-info text-center pb-1" id="jobs" >
            <h1 class="text-uppercase t-c-prim">WORK EXPERIENCE</h1>
          </div>

          <div class="container">
            <div class="row">  
              <div class="workExperience">

               <!--           MAIN JOB POSSITION               -->
    
                <div class="shadow px-4 pt-4 pb-3 mb-4 mt-4 bg-white rounded">
                  <h2>
                    <strong>Cloud Administrator <i class="fas fa-desktop"></i><i class="fas fa-cloud"></i><i class="fab fa-windows"></i></strong> 
                  </h2>
  
                  <a target="_blank" class="tsystems d-block" href="https://dtse.sk/en/" title="Deutsche Telekom">Deutsche Telekom Systems Solutions Slovakia</a>
                  <p class="date">
                      <i class="d-inlineblock">My current job possition</i>
                      <i> from </i>  <strong> 01 April 2019  - present </strong>
                  </p>
  

                  <div class="ml-3">    

                    <h4 class="text-uppercase">Job description:</h4>

                    <p class="telekom_text">
                      Independently check, execute, solve and create tickets 
                      (problem tickets, change management tickets, incident tickets,
                      delivery order, mail communication) in order to maintain service to
                      customer. <br>
                      Daily job with maintenance of servers, troubleshooting 
                      of customer requests, installing software, patching activity, reporting.
                      Regular communication with others teams to provide best 
                      service to customer24/7 (oncall duty).
                    </p>

                    <h4 class="text-uppercase">Working with:</h4> 

                    <p class="telekom_text">
                      VMware Vcloud director, Windows Server (2008+),
                      Microsoft Office (OneNote, Excell,  Word,
                      Outlook), PowerShell, Active Directory, HPSA, WSUS...
                    </p>


                    <p>
                      <a class="interview" href="img/interview.jpg">What they've told about me (interview) </a>

                      <a target="_blank" class="interview2 newWindow" href="img/interview.jpg">What they've told about me [interview] </a>
                    </p>
                  </div> 
                </div>


                <!-- NEXT JOB POSSITIONS-->


                <div class="shadow px-4 pt-4 pb-3 mb-4 mt-4 bg-white rounded nextjob">
                  <h2>
                    <strong>
                      Expedient of fruit and vegetable
                    </strong> 
                  </h2>
  
                  <a target="_blank" class="agro d-block" href="https://www.milkagro.sk/" title="Milk Agro">Milk Agro</a>
                  <p class="date">
                      <i> from </i>  <strong> February 2018  - April 2018 </strong>
                  </p>
                </div>
                
                <div class="shadow px-4 pt-4 pb-3 mb-4 mt-4 bg-white rounded nextjob">

                  <h2>
                    <strong>
                      Salesman in the store
                    </strong> 
                  </h2>
  
                  <a target="_blank" class="labas d-block" href="https://www.labas.sk/" title="Labas">Labaš s.r.o</a>
                  <p class="date">
                      <i> from </i>  <strong> September 2017  - Februar 2018 </strong>
                  </p>       
                </div>

              </div>
            </div>
          </div>
        </div>





<!--      CAROUSEL JOKES      -->

        <div class="container-fluid bg-dark py-3 carousel_main_box" id="fun">
          <div class="container text-light">
            <div class="row">
              <div class="col-12 text-center mt-4 t-c-prim ">
                <h2>
                  <i class="fas fa-grin-beam"></i>
                  DO NOT BE SO SERIOUS! 
                  <i class="fas fa-grin-beam"></i>
                </h2>
                <p class="h5">Read few jokes for a better mood.</p>
                <hr>
              </div>
              <div class="col-12 text-center">
                <div id="carouselExampleIndicators" class="carousel slide bg-dark py-3" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active ">
                      <p class="carousel_settings pb-4">
                        ”There are only 10 types of people in the world: <br> those who understand binary, and those who don't.”</p>
                    </div>

                    <div class="carousel-item ">
                      <p class="carousel_settings pb-4">”I ran out of new IPv4 jokes. <br> I could tell you an IPv6 one but I'm afraid, you might not understand it.”
                      </p>
                    </div>

                    <div class="carousel-item ">
                      <p class="carousel_settings pb-4">”The worst thing about a broadcast joke is that <br> you have to tell it to everyone in order to find the one person who gets it”</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>



          <!--      CONTACT ME      -->

        <div class="container-fluid pb-5 bg-white">
          <div class="container">
             <h1 class="text-uppercase font-weight-boler text-center py-1 t-c-prim" id="email"> contact me</h1>
    
          </div>
    
          <div class="container">
    
            <form action="https://formspree.io/f/xyyblkqo" method="POST">
              <div class="row justify-content-around">
                <div class=" col-10 col-lg-8 col-xl-6 form-group">
                  <label>Email address *</label>
                  <input type="email"  name="email" class="form-control mb-3" placeholder="name@example.com" required>
                </div>
              </div>
     
              <div class="row justify-content-around">
                <div class="form-group col-10 col-lg-8 col-xl-6">
                  <label>Your message *</label>
                  <textarea  class="form-control mb-3" name="message" rows="8" placeholder="Hello Marian..." required style="resize: none;"></textarea>
                </div>
              </div>
    
              <div class="row justify-content-around">
                <div class="col-10  col-lg-8 col-xl-6">
                  <button type="submit" class="btn b-c-prim btn-block text-white">Send email</button>
                </div>
              </div>
            </form>
          </div>
        </div>      

      </main>


      <footer class="bg-dark text-center pt-3 text-white">
        <div class="container">
          <div class="row justify-content-center py-3">
            <div class="col-7 col-md-5 col-lg-4 col-xl-3 col-xxl-3 text-center pb-2 mx-3">
              <h6 class="pb-1">Used technology</h6>
              <ul>
                <li><a target="_blank" href="https://en.wikipedia.org/wiki/HTML5">HTML 5</a></li>
                <li><a target="_blank" href="https://en.wikipedia.org/wiki/CSS">CSS 3</a></li>
                <li><a target="_blank" href="https://jquery.com/download/">JQUERY</a></li>
                <li><a target="_blank" href="https://getbootstrap.com/">BOOTSTRAP</a></li>
              </ul>
            </div>



            <div class="col-7 col-md-5 col-lg-4 col-xl-3 col-xxl-3 pb-2 mx-3">
              <h6 class="pb-1">Helpfull webpages</h6>
              <ul>
                <li><a target="_blank" href="https://www.learn2code.sk/kurzy/webrebel-1-html-css-javascript">LEARN 2 CODE</a></li>
                <li><a target="_blank" href="https://cdnjs.com/libraries/jquery">JQUERY</a></li>
                <li><a target="_blank" href="https://getbootstrap.com/">BOOTSTRAP</a></li>
                <li><a target="_blank" href="https://fontawesome.com/?from=io">FONT AWESOME</a></li>
                <li><a target="_blank" href="https://github.com/kottenator/jquery-circle-progress">SKILLS PROGRESS</a></li>
              </ul>
            </div>

            <div class="col-7 col-lg-6 col-xl-7 col-xxl-4  pb-2 mx-3">
              <h6 class="pb-1">YOU CAN VISIT ME AT</h6>
              <ul class="social">
                <li> 
                  <a target="_blank" href="https://www.linkedin.com/in/mari%C3%A1n-%C5%A1u%C4%BEa-0778981a0/"> 
                    <i class="fab fa-linkedin"></i> LINKED IN 
                  </a> 
                </li>

                <li> 
                  <a target="_blank" href="https://www.instagram.com/majosula/"> 
                    <i class="fab fa-instagram-square"></i> INSTAGRAM 
                  </a> 
                </li>
              </ul>

              <p class="thanks b-c-prim">
                Thank you very much for visiting my web page. Design, code and content have been created by me.  <br>
              </p>

            </div>
          </div>
        </div>

        <div class="container-fluid py-3 copyright">
            <a href="masula.sk">www.masula.sk</a> 
            <br>Copyright ©2021 
        </div>

      </footer>





    <!--IMG CAROUSEL-->
   

   <!--  MY JS   -->
   <script src="js/script.js"></script>

    <!-- Bootstrap javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    


  </body>
</html>