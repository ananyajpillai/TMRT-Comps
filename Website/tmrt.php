<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST")
{


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tmrt";
      $email_id = $_POST['email_id'];
			$name = $_POST['name'];
      $message = $_POST['message'];
      $conn = new mysqli($dbhost, $dbuser, $dbpass, "tmrt");
		if(!empty($email_id) && !empty($name) && !empty($message) )
		{
		
			//read from database
			$query = "insert into contact (name, email_id, message) values ('$name', '$email_id', '$message')";
			mysqli_query($conn, $query);

      header("Location: tmrt.php");
      die;
    }else
    {
      echo "Please enter some valid information!";
    }
			
   

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>

    
    <title>TMRT- The Marine Robotics Team</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="myystyle.css"
    />
    <body>
    <style>
        body{
	font-family: 'arial';
	margin: 0;
	overflow-x: hidden;
	padding: 0;

}

.animation-wrapper{
	background: #ace5ee;
	bottom: 0;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
}

.water{
    bottom: 0;
    left: 0;
	position: absolute;
    width: 100%;
}

.water ul.waves{
	list-style: none;
	margin: 0;
	padding: 0;
}

.water ul.waves li{
	background-repeat: repeat-x;
}

.water ul.waves li.wave-one{
	animation: wave 8.7s linear infinite;
	-webkit-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
	bottom: 0px;
	height: 50px;
	left: 0;
	position: absolute;
	right: 0;
	z-index: 10;
}

.water ul.waves li.wave-two{
	-webkit-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
	animation: wave 10s linear infinite;
	bottom: 0px;
	height: 84px;
	left: 0;
	position: absolute;
	right: 0;
	z-index: 9;
}

.water ul.waves li.wave-three{
	-webkit-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
	animation: wave 25s linear infinite;
	bottom: 0;
	height: 190px;
	left: 0;
	position: absolute;
	right: 0;
	z-index: 8;
}

.water ul.waves li.wave-four{
	-webkit-animation-fill-mode: forwards;
	-o-animation-fill-mode: forwards;
	animation-fill-mode: forwards;
	animation: wave 25s linear infinite;
	bottom: 0;
	height: 205px;
	left: 0;
	position: absolute;
	right: 0;
}

.boat{
	animation: boat 3s linear infinite;
    background-repeat: no-repeat;
    bottom: 175px;
    height: 145px;
    left: 40%;
	position: absolute;
    width: 250px;
}

.cloud{
	animation: cloud 3s linear infinite;
	background-repeat: no-repeat;
    height: 165px;
    left: 0;
    position: absolute;
    width: 297px
}

.cloud2{
	animation: cloud 5s linear infinite;
	background-repeat: no-repeat;
    bottom: 320px;
    height: 165px;
    left: 140px;
    position: absolute;
    width: 297px;
}


/*Animation Keyframe Section*/

@keyframes wave{
    0% {
        background-position: 0 0;
	}
    50% {
        background-position: 920px 0;
    }
    100% {
        background-position: 1920px 0;
    }
}

@keyframes dolphin{
	0%{
		left: -30%;
	}
    50%{
		left: 30%;
	}
	100%{
		left: 100%;
	}
}

@keyframes boat{
   
	0%{
		transform: rotate(0);
	}

  25%{
		transform: rotate(-3deg);
	}

	50%{
		transform: rotate(-6deg);
	}

  75%{
		transform: rotate(3deg);
	}

	100%{
		transform: rotate(0);
	}
}

@keyframes cloud{
	0%{
		left: -30%;
	}
    50%{
		left: 30%;
	}
	100%{
		left: 100%;
	}
}

    </style>
    <div class="animation-wrapper">
		<div class="water">
			<ul class="waves">
				<li class="wave-one" style="background-image: url('https://i.postimg.cc/7LtCC11Y/wave1.png');"></li>
				<li class="wave-two" style="background-image: url('https://i.postimg.cc/P5hv05rh/wave2.png');"></li>
				<li class="wave-three" style="background-image: url('https://i.postimg.cc/63Dyc91k/wave3.png');"></li>
				<li class="wave-four" style="background-image: url('https://i.postimg.cc/1tg8DgM0/wave4.png');"></li>
			</ul>
		</div>
		<div class="boat" style="background-image: url('https://i.postimg.cc/GmQTRnHD/boat2.png');"></div>
		<div class="cloud" style="background-image: url('https://i.postimg.cc/VNkrLZCV/cloud-md.png');"></div>
		<div class="cloud2" style="background-image: url('https://i.postimg.cc/VNkrLZCV/cloud-md.png');"></div>
        
	</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
<script>  
   $(window).on('load', function () {  
       $(".animation-wrapper").fadeOut("very very slow");  
  });  
</script> 
    <script
      src="https://kit.fontawesome.com/ec4bc117da.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   
  </head>
  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#myNavbar"
          >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#myPage"
            ><img
              width="90"
              src="https://tmrt-kjsce.github.io/TMRT/logotmrt.png"
          /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#Subdivision">SUBDIVISIONS</a></li>
            <li><a href="#sponsers">SPONSORS</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="team.html">TEAM</a></li>
            <li><a href="model2.html">VEHICLES</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <video
        disablepictureinpicture="true"
        width="500"
        height="240"
        muted="true"
        loop="true"
        autoplay="true"
        style="user-select: auto"
      >
        <source
          src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/Screen%20Recording%202022-02-07%20at%203.51.52%20PM.mov?raw=true"
          type="video/webm"
          style="user-select: auto"
        />
      </video>
    </div>
  


<section id="gallery" class="pb-5 bg-blue2  text-center">
      <div class=" container">
        
        <video plays-inline
          disablepictureinpicture="true"
          
          loop="true"
          muted="true"
          autoplay="true"
          style="user-select: auto" class = "back-video">
          <source
            src="https://kjsce.somaiya.edu/upload_file/images20/TMRT_PROTON_TEST_(1).mp4"
            type="video/webm"
            style="user-select: auto"/>
        </video>
 <style>
  .back-video{
    position : absolute;
    right: 0;
    bottom: 0;
  
    z-index: -1;
  }
  @media(max-aspect-ratio: 16/9){
    .back-video{
      width: auto;
      height: 100%;
    }
    
  }
  @media(min-aspect-ratio: 16/9){
    .back-video{
      width: 100%;
      height: auto;
    }
    
  }
  </style> 

</div>
</section>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid bg-blue0">
      <div class="row ">
        <div class="col-sm-8">
          <h2>ABOUT THE MARINE ROBOTICS TEAM</h2>
          <br />
          <h4>
            The Marine Robotics Team (TMRT) is a student team from K. J. Somaiya
            College of Engineering, Vidyavihar that focuses on building
            autonomous marine systems. TMRT is formed by 30 passionate
            undergraduate students across 4 years from various departments
            who want to apply their knowledge to design and engineer an
            Autonomous Underwater Vehicle (AUV). Dr. Ninad Mehendale is the faculty
            coordinator of TMRT. We aim to compete in various National and
            International competitions like NIOT SAVe, SAUVC, ROBOSUB and SAUC-E
            in the coming years.
          </h4>
          <br />
          <br /><a href="#contact"
            ><button class="btn btn-default btn-lg">Get in Touch</button></a
          >
        </div>
        
      </div>
    </div>

    <div class="container-fluid bg-blue0">
      <div class="row">
        
        <div class="col-sm-8">
          <h2>Our Values</h2>
          <br />
          <h4>
            <strong>Mission:</strong> We aim to build an “Autonomous Underwater
            Vehicle” which is capable of performing a set of tasks and making
            its own decisions based on a few algorithms like Deep Learning, etc.
            We aim to compete in various national and international competitions
            like DRUSE, SAUVC, RoboSub, SAUC-E and NIOT SAVe.
          </h4>
          <br />
        </div>
      </div>
    </div>
      <div class="container-fluid bg-blue text-black text-center">
        <h1>Competitions participated</h1>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          width="80"
                          alt="Team Cards Flipper"
                          src="https://robonation.org/app/uploads/sites/4/2019/10/robosub-logo_vert.png"
                        />
                      </p>
                      <h4 class="card-title">Robosub</h4>
                      <p class="card-text">
                        The fundamental goal of the RoboSub competition is for
                        an Autonomous Underwater Vehicle (AUV) to demonstrate
                        its autonomy by completing underwater tasks, with a new
                        theme each year.
                      </p>
                      <a href="#" class="btn btn-primary btn-sm">More</a>
                    </div>
                  </div>
                </div>
                <div class="backside ">
                  <div class="card  ">
                    <div class="card-body text-center mt-4">
                      <h4 class="card-title">RoboSub</h4>
                      <p class="card-text">
                        RoboSub is an exciting underwater robotics program in
                        which teams of high school and college students from
                        around the world design and build an Autonomous
                        Underwater Vehicle (AUV). These vehicles are designed to
                        autonomously navigate through a series of tasks. These
                        tasks mimic ongoing research in Autonomous Underwater
                        Systems.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          alt="Team Cards Flipper"
                          src="https://sauvc.org/img/logo_notext.png"
                        />
                      </p>
                      <h4 class="card-title">SAUVCr</h4>
                      <p class="card-text">
                        The Singapore Autonomous Underwater Vehicle Challenge
                        (SAUVC). The SAUVC competition challenges participant
                        teams to build an AUV which can perform given tasks.
                      </p>
                      <a href="#" class="btn btn-primary btn-sm">More</a>
                    </div>
                  </div>
                </div>
                <div class="backside ">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <h4 class="card-title">SAUVC</h4>
                      <p class="card-text">
                        Autonomous underwater robotics is an exciting challenge
                        in engineering, which participants get to experience at
                        SAUVC. The competition is great learning ground for
                        participants to experience the challenges of AUV system
                        engineering and develop skills in the related fields of
                        mechanical, electrical and software engineering.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          alt="Team Cards Flipper"
                          src="https://upload.wikimedia.org/wikipedia/en/a/a6/Logo_for_National_Institute_of_Ocean_Technology.jpg"
                        />
                      </p>
                      <h4 class="card-title">INSAUVC</h4>
                      <p class="card-text">
                        National Institute of Ocean Technology (NIOT), conducts
                        a competition for students to visualize and design an
                        AUV, known as the Indian Student Autonomous Underwater
                        Vehical Challenge.
                      </p>
                      <a href="#" class="btn btn-primary btn-sm">More</a>
                    </div>
                  </div>
                </div>
                <div class="backside ">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <h4 class="card-title">INSAUVC</h4>
                      <p class="card-text">
                        The conceptual basis for Student Autonomous underwater
                        Vehicle (SAVe), is a highly mobile autonomous underwater
                        vehicle (AUV) to be built based on engineering
                        principles. The main focus of this competition is to
                        involve students on the new frontier areas of ocean
                        technology and kindle their innovative thinking in this
                        unexplored area of ocean environment and observation.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section id="home" class="home container-fluid p-0">

        <div class="row hero">
          <div class="col pl-3 ml-sm-5 p-0">
            
          </div>
        </div>
        
        <div class="counting">
        
        <div class="box">
          <h1 class="count" data-count="3400">3400+</h1>
          <h3>Working hours</h3>
        </div>
        
        <div class="box">
          <h1 class="count" data-count="1100000">11 Lac+</h1>
          <h3>Funding</h3>
        </div>
        
        <div class="box">
          <h1 class="count" data-count="80">80+</h1>
          <h3>Team Members</h3>
        </div>
        
        <div class="box">
          <h1 class="count" data-count="840">840+</h1>
          <h3>Projects</h3>
        </div>
        
        </div>
        
        </section>
  <script>
$(document).ready(function(){

$('.fa-bars').click(function(){
  $(this).toggleClass('fa-times');
  $('nav').toggleClass('nav-toggle');
});
$(window).scroll(function()
{
  $('.fa-bars').removeClass('fa-times');
  $('nav').removeClass('nav-toggle');
});

$('.count').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },
  {
    duration: 5000,
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum + '+');
    }
  });
});

$('.project').magnificPopup({
  delegate:'a',
  type:'image',
  gallery:{
    enabled:true
  }
});

});
</script>
</h3>
<style>
.home .counting{
  min-height: 40vh;
  padding:2rem 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.home .counting .box{
  margin: 4rem 4rem;
  text-align: center;
}

.home .counting .box .count{
  font-size: 7rem;
  color:#444;
}

.home .counting .box h3{
  font-size: 2rem;
  color:var(--orange);
}

</style>

    <!-- Container (sponsers Section) -->
    <section id="sponsers" class="container-fluid bg-blue1 text-center">
      <h1 class="section-title">Sponsors</h1>

      <br />
      <div class="row slideanim">
        <div class="col-sm-4">
          <a href="http://www.pepsicoindia.co.in/">
            <img
              width="80"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pepsi_logo.svg/2560px-Pepsi_logo.svg.png"
            />
          </a>
          <h4>Pepsi</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
          <a href="http://www.pepsicoindia.co.in/">
            <img
              width="80"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pepsi_logo.svg/2560px-Pepsi_logo.svg.png"
            />
          </a>
          <h4>Pepsi</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
          <a href="http://www.pepsicoindia.co.in/">
            <img
              width="80"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pepsi_logo.svg/2560px-Pepsi_logo.svg.png"
            />
          </a>
          <h4>Pepsi</h4>
          <p>Lorem ipsum dolor sit amet..</p>
        </div>
      </div>
      <br><br>
    </section>

    <!-- Container (our team Section)-->
    <section id="our team">
    <h2 style = "padding-left: 2%;">THE MARINE ROBOTICS TEAM </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80" alt="">
                    <div class="over-layer">
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam debitis eligendi excepturi facere laudantium nulla sint sit ut voluptatibus.</p>
                        </div>
                    </div>
                    <ul class="social-links">
                        
                      <li><a href="#" class="fab fa-linkedin"></a></li>
                      <li><a href="#" class="fab fa-instagram"></a></li>
                      <li><a href="#" class="fab fa-github"></a></li>
                    </ul>
                </div>
            </div>
     
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <img src="https://img.freepik.com/free-photo/man-wearing-t-shirt-gesturing_23-2149393645.jpg" alt="">
                    <div class="over-layer">
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam debitis eligendi excepturi facere laudantium nulla sint sit ut voluptatibus.</p>
                        </div>
                    </div>
                    <ul class="social-links">
                       
                      <li><a href="#" class="fab fa-linkedin"></a></li>
                      <li><a href="#" class="fab fa-instagram"></a></li>
                      <li><a href="#" class="fab fa-github"></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <img src="https://img.freepik.com/free-photo/man-wearing-t-shirt-gesturing_23-2149393645.jpg" alt="">
                    <div class="over-layer">
                        <div class="team-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam debitis eligendi excepturi facere laudantium nulla sint sit ut voluptatibus.</p>
                        </div>
                    </div>
                    <ul class="social-links">
                        
                      <li><a href="#" class="fab fa-linkedin"></a></li>
                      <li><a href="#" class="fab fa-instagram"></a></li>
                      <li><a href="#" class="fab fa-github"></a></li>
                    </ul>
                </div>
              </div>
              <br>
             
    </div>
    <style>
      .btn-text-left{
        text-align: left;	
      }
      </style>
      <div class="btn-text-left">
        <br>
        <br>
          <button type="button" class="btn btn-primary"><a href ="team.html" style = "color: white;">View More</a></button>
      </div>
    <br>
    <br>
   
   
</section>

    <!-- Container (gallery Section)  -->
    <!-- <section>
  <container>
    <style>


#myVideo {
  
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.videocontent {
  
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


</style>


<video autoplay muted loop id="myVideo">
  <source src="https://kjsce.somaiya.edu/upload_file/images20/TMRT_PROTON_TEST_(1).mp4" type="video/webm">
  Your browser does not support HTML5 video.
</video>

<div class="videocontent">
  <h1>Heading</h1>
  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
 
</div>

<script>
var video = document.getElementById("myVideo");

</script>
</container>
</section>



    <section id="gallery" class="pb-5 bg-blue2  text-center">
      <div class=" container">
        <div>
        <h5 class="section-title h1">Gallery</h5>
        <h2 class="text-center">Testing of Our Bot- Proton</h2>
        <video plays-inline
          disablepictureinpicture="true"
          width="420"
          height="340"
          loop="true"
          muted="true"
          autoplay="true"
          style="user-select: auto" class = "back-video">
          <source
            src="https://kjsce.somaiya.edu/upload_file/images20/TMRT_PROTON_TEST_(1).mp4"
            type="video/webm"
            style="user-select: auto"/>
        </video>
        

        <video autoplay loop muted plays-inline class = "back-video" loop="true"
          muted="true"
          autoplay="true"
          style="user-select: auto">
          <source src="https://kjsce.somaiya.edu/upload_file/images20/TMRT_PROTON_TEST_(1).mp4"
            type="video/webm"/>
</video>--->
 <style>
  .back-video{
    position : fixed;
    right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
    z-index: -1;
  }
  </style> 
  </div>
        <h2 class="text-center">Participation in various events</h2>
        <div class="gal" style="user-select: auto">
          <div class="row" style="user-select: auto">
            <div class="col-sm-6 col-md-4" style="user-select: auto">
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g1.jpg?raw=true"
                style="user-select: auto">
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g1.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="user-select: auto">
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g2.jpg?raw=true"
                style="user-select: auto">
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g2.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="user-select: auto">
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g3.jpg?raw=true"
                style="user-select: auto"
              >
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g3.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
            <div
              class="col-sm-6 col-md-4 desktop-only"
              style="user-select: auto"
            >
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g10.jpg?raw=true"
                style="user-select: auto"
              >
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g10.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
            <div
              class="col-sm-6 col-md-4 desktop-only"
              style="user-select: auto"
            >
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g8.jpg?raw=true"
                style="user-select: auto"
              >
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g8.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
            <div
              class="col-sm-6 col-md-4 desktop-only"
              style="user-select: auto"
            >
              <a
                class="lightbox"
                href="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g4.jpg?raw=true"
                style="user-select: auto"
              >
                <img
                  src="https://github.com/tmrtkjsce/TMRT-Website-2021-22/blob/main/src/g4.jpg?raw=true"
                  alt=""
                  style="user-select: auto"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

 
  </header><!-- End Header -->
   <!-- Container (Subdivisions Section) -->
   <section id = "Subdivision">
<div id="Subdivisions" class="container-fluid bg-blue0">
  
    <div class="col-sm-0">
      <h2>Subdivisions</h2>
      
  </div>
    <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#tab-1">Mechanical</a></li>
          <li><a data-toggle="tab" href="#tab-2">Electrical</a></li>
          <li><a data-toggle="tab" href="#tab-3">Software</a></li>
          <li><a data-toggle="tab" href="#tab-4">Marketing</a></li>
    </ul>
      
        <div class="tab-content">
          

      <div class="tab-content">
          <div id="tab-1" class="tab-pane fade in active">
              <div class="row">
                <div class="tab-content">
                  <div id="tab-1" class="tab-pane fade in active">
                      <div class="row">
                        <div >
                          
        The Mechanical Subdivision works actively to bring in innovations and develop practical designs of the vehicle. 
        The main interests of the subdivision include planning, designing and testing different parts, 
        fabricating and waterproofing the entire vehicle which can be disassembled by few screw sets within minutes.
                            
                              <h4 style="padding-top:20px ;"><br>Designing, Testing and Manufacturing:<br>
        1.	Research: The research is the very first step of exploring and involves studying of various elements which includes structural components like rods, beams, chain mechanisms, thruster designs, conveyor belts, torpedoes, etc. And finalising and the materials to begin with design process.<br>
        2.	Design: Solidworks is the main designing tool helps to bring in the innovation from minds to virtual environment. Changes in the design is also a crucial to bring in maximum practicality and efficiency of the vehicle.<br>
        3.	Testing: The testing team is responsible for evaluating the performance of the robotic systems in different marine environments. They conduct various tests, including static and dynamic tests, to determine the robots' capabilities and limitations. The testing team also conducts sea trials to assess the robots' performance in real-world conditions.<br>
        4.	Manufacturing: It is the final step which brings design to reality. It invloves building the robotic systems based on the designs and specifications. Various manufacturing processes, including machining, welding, and assembly, to produce the robots' mechanical and electrical components. It is also important to keep in mind that the robots meet the required quality standards and undergo rigorous testing before they are deployed for use.<br>
  
        </b></h4>
                          </div>
                          <div style="padding-left:100px ;" class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                              <img src="#" class="img-fluid" alt="">
                          </div>
                      </div>

              <div class="row">
                  <div style="margin-bottom:50px ;" class="col-md-5 aos-init aos-animate" data-aos="fade-right"
                      data-aos-delay="100">
                      <img style="margin-top:30px ;" src="assets/img/Mechanical1.png" class="img-fluid" alt="">
                  </div>
                  
              </div>
          </div>
          <div id="tab-2" class="tab-pane fade">
              <div class="row">
                  <p>
                      to write about Electrical Subdivision
                  </p>
                  <div style="padding-top:20px ;"  class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h4><b>Designing and Manufacturing</b></h4>
                      <p class="fst-italic">
                         desig and manfac of electrical subdiv
                      </p>
                  </div>
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                      <img  src="assets/img/elec1.png" class="img-fluid" alt="">
                  </div>
              </div>
              <div class="row">
                  <div style="padding-top:50px ;" class="col-md-5 aos-init aos-animate" data-aos="fade-right"
                      data-aos-delay="100">
                      <img src="assets/img/elec2.png" class="img-fluid" alt="">
                  </div>
                  <div style="margin-top:60px ;" class="col-md-7 pt-4 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                      <h4 style="padding-left:50px;"><b>Task and Testing</b></h4>
                      <p style="padding-left:50px;" class="fst-italic">
                          task & test of elec subdiv
                      </p>
                  </div>
              </div>
          </div>
          <div class="tab-pane" id="tab-3">
              <div class="row">
                  <div style="margin-bottom:50px ;" class="col-md-5 aos-init aos-animate" data-aos="fade-right"
                      data-aos-delay="100">
                      <img style="margin-top:40px ;" src="assets/img/soft2.png" class="img-fluid" alt="">
                  </div>
                  <div style="margin-bottom:50px;" class="col-md-7 pt-4 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                      <p class="fst-italic">
                        to write about Software Subdivision
                      </p>
                  </div>
                  <div style="padding-top:20px ;" class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h4><b> Navigation</b></h4>
                      <p class="fst-italic">
                          to write about navigation and controlling of software subdiv
                          
                      </p>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center"
                      class="embed-responsive embed-responsive-1by1">
                      <iframe style="margin-bottom:50px;"style="margin-top:50px;" width="450" height="315"
                          src="">
                      </iframe>
                  </div>
              </div>
              <div class="row">
                  <div style="margin-bottom:50px ;" class="col-md-5 aos-init aos-animate" data-aos="fade-right"
                      data-aos-delay="100">
                      <img src="assets/img/features-1.png" class="img-fluid" alt="">
                  </div>
                  <div class="col-md-7 pt-4 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                      <h4><b>Localization And Perception</b></h4>
                      <p class="fst-italic">
                          to write about local & percep of software subdiv
                      </p>
                  </div>
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <h4><b>Sensors</b></h4>
                      <p class="fst-italic">
                          To write about sensors used in the robot of Software subdiv
                      </p>
                  </div>
                  <div style="margin-bottom:50px ;" class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="assets/img/features-2.png" alt="" class="img-fluid">
                  </div>
              </div>
              <div class="row">
                  <div style="margin-bottom:50px ;" class="col-md-5 aos-init aos-animate" data-aos="fade-right"
                      data-aos-delay="100">
                      <img src="assets/img/features-1.png" class="img-fluid" alt="">
                  </div>
                  <div style="margin-top:50px;"class="col-md-7 pt-4 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                      <h4><b>State and Mission Planner</b></h4>
                      <p class="fst-italic">
                          to write about state & mission planner of software subdiv
                      </p>
                  </div>
              </div>
          </div>

          <div class="tab-pane" id="tab-4">
              <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                      <p class="fst-italic">
                          to write about marketing subdiv

                      <ul>
                          <li><i class="ri-check-double-line"></i>Working with the press for various news releases
                          </li>
                          <li><i class="ri-check-double-line"></i>Ideating content to promote the team through its
                              social media handles</li>
                          <li><i class="ri-check-double-line"></i>Arranging interviews with company spokespeople
                          </li>
                          <li><i class="ri-check-double-line"></i>Maintaining and advancing the team’s website
                          </li>
                          <li><i class="ri-check-double-line"></i>Internal and external communication
                          </li>
                      </ul>
                     conclusion of marketing subdiv
                      </p>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center">
                      <img src="assets/img/4380.jpg" alt="" class="img-fluid">
                  </div>
              </div>
          </div>
      </div>

  </div>
  </div>
  </section>
<!-- End Tabs Section -->

       <!-- contact section starts  -->
       

    </container>
    
      <container>
       <div class="contactcontainer">
        <div class="contactcontent">
          <div class="contactleft-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">B-407,Bhaskaracharya Building,KJ Somaiya College Of Engineering</div>
              <div class="text-two">Vidyanagar, Vidyavihar East, Mumbai-400077, Maharashtra, India</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+91-7506103520</div>
              <div class="text-two">+91-7021546912</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">tmrt@somaiya.edu</div>
              
            </div>
          </div>
          <div class="contactright-side">
            <div class="topic-text">Contact Us</div>
            <h4>We hope the above is useful to you. Should you need any further information, please do not hesitate to contact us. </h4>
          <form action="#" method = "POST">
            <div class="input-box">
              <input type="name" name = "name" placeholder="Enter your name">
            </div>
            <div class="input-box">
              <input type="email_id" name = "email_id" placeholder="Enter your email">
            </div>
            <div class="input-box message-box">
              </div>
            <div class="input-box">
             <input type="message" name = "message" placeholder="Send Us a Message">
            </div>
            <div class="input-box message-box">
              
            </div>
            <div class="button">
              <input type="submit" value="Send Now" >
            </div>
          </form>
        </div>
        </div>
      </div>
    </container>


    
    <!-- contact section ends -->
  
    
  
  <!-- jquery file link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- magnific popup link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  
  <!-- main/custom javascript file link  -->
  <script src="home page.js"></script>
  
 
  

      
<div id="footer" >
  <br>
      <footer id="footer">
        <footer class="footer">
          <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
          </div>
          <div class="row">
      
            <div class="col-sm-4 footer-contact">
              <h3 style="color: rgb(0, 0, 0);">AUV-<span>TMRT</span></h3>
              <p> <br>

               KJSCE,Vidyavihar,<br>
               Mumbai Maharashtra- 400076 <br><br>
             </p>
            </div>
    
            <div class="col-sm-4 footer-contact">
              <p class="teamphone"> <strong>Phone:</strong>
              <br>
              <br>
              <table style="color: white;" id="teamtable">
                <tbody><tr>  
                    <td>Rishikesh  Bhintade:</td>
                    <td ><a href="tel: +917506103520" style="color: rgb(0, 0, 0);">+91 7506103520</a></td>
                    </tr>
                   
                    <tr>
                      
                      <td>Anagh Gharat:</td>
                      <td a href="tel: +91" style="color: rgb(0, 0, 0);">+91 </a></td>
                    </tr>
                  
              </tbody></table> <br>

              <strong style="color: rgb(0, 0, 0);">Email:</strong> <a href="mailto: tmrt@somaiya.edu" style="color: rgb(0, 0, 0);">tmrt@somaiya.edu</a><br>
              </p>
            </div>
    
            <div class="col-sm-4 footer-links">
    
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index.html" style="color: rgb(0, 0, 0);">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#about" style="color: rgb(0, 0, 0);">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="model2.html" style="color: rgb(0, 0, 0);">Vehicles</a></li>

          
                <li><i class="bx bx-chevron-right"></i> <a href="tmrt.html" style="color: rgb(0, 0, 0);">Team</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#gallery" style="color: rgb(0, 0, 0);">Gallery</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="blog.html" style="color: rgb(0, 0, 0);">Media &amp; Blogs</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#contact" style="color: rgb(0, 0, 0);">Contact</a></li>
              </ul> 
            </div>
    
    
    
          </div>
          <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-facebook"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-twitter"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="#">
                <ion-icon name="logo-instagram"></ion-icon>
              </a></li>
          </ul>
         </footer>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");


.footer {
  position: relative;
  width: 100%;
  background: #3586ff;
  min-height: 100px;
  padding: 10px 30px;
  display: flex;
  justify-content: left;
  align-items: left;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  flex-wrap: wrap;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
}
.social-icon__link:hover {
  transform: translateY(-10px);
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  margin: 0 10px;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
}

.footer p {
  color: #fff;
  margin: 5px 0 5px 0;
  font-size: 1rem;
  font-weight: 300;
}

.wave {
  position: absolute;
  top: -100px;
  left: 0;
  width: 100%;
  height: 100px;
  background: url("https://i.ibb.co/wQZVxxk/wave.png");
  background-size: 1000px 100px;
}

.wave#wave1 {
  z-index: 1000;
  opacity: 1;
  bottom: 0;
  animation: animateWaves 4s linear infinite;
}

.wave#wave2 {
  z-index: 999;
  opacity: 0.5;
  bottom: 10px;
  animation: animate 4s linear infinite !important;
}

.wave#wave3 {
  z-index: 1000;
  opacity: 0.2;
  bottom: 15px;
  animation: animateWaves 3s linear infinite;
}

.wave#wave4 {
  z-index: 999;
  opacity: 0.7;
  bottom: 20px;
  animation: animate 3s linear infinite;
}

@keyframes animateWaves {
  0% {
    background-position-x: 1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}

@keyframes animate {
  0% {
    background-position-x: -1000px;
  }
  100% {
    background-positon-x: 0px;
  }
}
        </style>
      
        
      
  
      <script>
        $(document).ready(function () {
          // Add smooth scrolling to all links in navbar + footer link
          $(".navbar a, footer a[href='#myPage']").on("click", function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
  
              // Store hash
              var hash = this.hash;
  
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
              $("html, body").animate(
                {
                  scrollTop: $(hash).offset().top,
                },
                900,
                function () {
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                }
              );
            } // End if
          });
  
          $(window).scroll(function () {
            $(".slideanim").each(function () {
              var pos = $(this).offset().top;
  
              var winTop = $(window).scrollTop();
              if (pos < winTop + 600) {
                $(this).addClass("slide");
              }
            });
          });
        });
      </script>
    <!-- footer section ends -->
    </footer>
    </div>
  </body>
  
</html>


