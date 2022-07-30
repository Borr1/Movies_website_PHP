<?php 
session_start();

	include("connection.php");
	include("function.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<HTml>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="projet.css">
        <title>My website</title>
        <link href=link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
         </head>
    
    <body  >
        <div class="navbar">
            <div class="container">
                <div class="logo"><h1 class="logo">Tea$erS</h1></div>
                <div class="menu-container">
                    <ul class ="menu-list">
                        <li class ="menu-list-item1">Home</li>
                       <li class="menu-list-item">
                        <div class="dropdown">
                            <a href="#" class="dropbtn">
                                Movies
 
                         </a>
                            <div class="dropdown-content">
                             <a href="#1">ACTION</a>
                             <a href="#2">DRAMA</a>
                             <a href="#3">ROMANCE</a>
                             <a href="#4">ADVENTURE</a>

                           </div>
                         </div>
                        </li> 
                        <li class ="menu-list-item">series</li>
                        <li class ="menu-list-item">popular</li>
                        <li class ="menu-list-item">trends</li>
                       </ul>
                
            </div>
            

<div class="profile-con">
    <img id="img1" src="eren.jpg" alt="">
    <div class="profile-text-cont">
        <ul class="logout">
            <li>
                <a class="logout"><?php echo $user_data['name']; ?></a>
                <ul class="dropdown">
                    <li><a href="logout.php">Log out</a></li>
                </ul>
            </li>
         </ul>
    </div>
    <div id="toggle">
        
        <i class="fa-solid fa-moon icon"></i>
        <i class="fa-solid fa-sun icon"></i>
        <div class="toggle-ball"></div>
    </div>
</div>

        </div>
        <div class="sidebar">
            <i class="left-menu-icon fas fa-search"></i>
        <i class="left-menu-icon fas fa-home"></i>
        <i class="left-menu-icon fas fa-users"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-hourglass-start"></i>
        <i class="left-menu-icon fas fa-shopping-cart"></i>
        </div>
<div class="container2">
    <div class="content-cont">
        <div class="featured-con" style="background: linear-gradient(to bottom,rgba(0,0,0,0),#151515),  url('hh.jpg') no-repeat;">
            <h2 class="title">Harry Potter</h2>
            <p class="parg">Harry, Ron and Hermione race against time to destroy the remaining Horcruxes. Meanwhile, the students and teachers unite to defend Hogwarts against Lord Voldemort and the Death Eaters</p>
            <a href="https://www.youtube.com/watch?v=VyHV0BRtdxo&ab_channel=MovieclipsClassicTrailers" target="_blank">
            <button class="butto">WATCH</button>
        </a>       </div>
        <div class="movie-list-container">
            <h3 class="movie-list-title" >NEW RELEASES</h3>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img id="movimg" src="https://media-cache.cinematerial.com/p/500x/xj3x20vn/prisoners-swiss-blu-ray-movie-cover.jpg?v=1456380863" alt="">
                        <span class="movie-title">PRISONERS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="batman.jpg" alt="">
                        <span class="movie-title">THE BATMAN</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="spid.jpg" alt="">
                        <span class="movie-title">SPIDER-MAN</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="light.jpg" alt="">
                        <span class="movie-title">LIGHTHOUSE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="500.jpg" alt="">
                        <span class="movie-title">500 DAYS OF SUMMER</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="dr.jpg" alt="">
                        <span class="movie-title">DOCTOR STRANGE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="star.jpg" alt="">
                        <span class="movie-title">STAR WARS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="now.jpg" alt="">
                        <span class="movie-title">NOW YOU SEE ME2</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>
                    </div>
                </div>
                <i class="fa-solid fa-circle-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h3 id="1" >ACTION</h3>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img id="movimg" src="https://www.thepoke.co.uk/wp-content/uploads/2013/09/BT6c4dSIMAAnLU3.jpg" alt="">
                        <span class="movie-title">BRUCE WILLIS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                             <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                            <button class="moviebuttom" >WATCH </button>                           
                        </a>  
                       
                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="http://moviesfilmsandflix.files.wordpress.com/2012/08/the-expendables-2-movie-poster.jpg" alt="">
                        <span class="movie-title">EXPENDABLES 2</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/52500f90317477.5e17b2fe7c8e7.jpg" alt="">
                        <span class="movie-title">BAD BOYS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="https://cdn.europosters.eu/image/1300/posters/fast-furious-dominic-toretto-i114155.jpg" alt="">
                        <span class="movie-title">FAST AND FURIOUS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="blackcrab.jpg" alt="">
                        <span class="movie-title">BLACK CRAB</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="extraction.jpg" alt="">
                        <span class="movie-title">EXTRACTION</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="6underground.jpg" alt="">
                        <span class="movie-title">6 UNDERGROUND</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                        <button class="moviebuttom">WATCH</button>
                    </div><div class="movie-list-item">
                        <img id="movimg" src="rednotice.jpg" alt="">
                        <span class="movie-title">RED NOTICE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                </div>
                <i class="fa-solid fa-circle-right arrow"></i>
            </div>

        </div>  
        <div class="featured-con" style="background: linear-gradient(to bottom,rgba(0,0,0,0),#151515),  url('aot.jpg');">
            <h2 class="title">ATTACK ON TITAN</h2>
            <p class="parg">Harry, Ron and Hermione race against time to destroy the remaining Horcruxes. Meanwhile, the students and teachers unite to defend Hogwarts against Lord Voldemort and the Death Eaters</p>
            <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
            <button class="butto">WATCH</button>
        </a>      </div>
        <div class="movie-list-container">
            <h3 id="2">DRAMA</h3>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img id="movimg" src="theguilty.jpg" alt="">
                        <span class="movie-title">THE GUILTY</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="calmebyyourname.jpg" alt="">
                        <span class="movie-title">CALL ME BY YOUR NAME</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="The_Irishman_poster.jpg" alt="">
                        <span class="movie-title">THE IRISH MAN</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="thetwilight.jpg" alt="">
                        <span class="movie-title">THE TWILIGHT SAGA</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="theageofadaline.jpg" alt="">
                        <span class="movie-title">THE AGE OF ADALINE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="thekaratekid.jpg" alt="">
                        <span class="movie-title">THE KARATE KID</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="asilentvoice.jpg" alt="">
                        <span class="movie-title">A SILENT VOICE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="allthebrightplaces.jpg" alt="">
                        <span class="movie-title">ALL THE BRIGHT PLACES</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                </div>
                <i class="fa-solid fa-circle-right arrow"></i>
            </div>
        </div>  <div class="movie-list-container">
            <h3 id="3">ROMANCE</h3>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img id="movimg" src="theinbetween.jpg" alt="">
                        <span class="movie-title">THE IN BETWEEN</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="throughmywindow.jpg" alt="">
                        <span class="movie-title">THROUGH MY WINDOW</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="after.jpg" alt="">
                        <span class="movie-title">AFTER</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="lovetactics.jpg" alt="">
                        <span class="movie-title">LOVE TACTICS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="jj+e.jpg" alt="">
                        <span class="movie-title">JJ+E</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="mebeforeyou.jpeg" alt="">
                        <span class="movie-title">ME BEFORE YOU</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="friendswithbenefits.jpg" alt="">
                        <span class="movie-title">FRIENDS WITH BENEFITS</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="withoutsayingoodbye.jpg" alt="">
                        <span class="movie-title">WITHOUT SAYING GOODBYE</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                </div>
                <i class="fa-solid fa-circle-right arrow"></i>
            </div>
        </div>  <div class="movie-list-container">
            <h3 id="4">ADVENTURE</h3>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img id="movimg" src="hungergames.jpg" alt="">
                        <span class="movie-title">HUNGER GAMES</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                    <div class="movie-list-item">
                        <img id="movimg" src="sonic2.jpg" alt="">
                        <span class="movie-title">SONIC 2</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="therevenant.jpg" alt="">
                        <span class="movie-title">THE REVENANT</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="tombraider.jpg" alt="">
                        <span class="movie-title">TOMB RAIDER</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="madmax.jpg" alt="">
                        <span class="movie-title">MAD MAX</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="hoteltransylvania.jpg" alt="">
                        <span class="movie-title">HOTEL TRANSYLVANIA</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="jumanji.jpg" alt="">
                        <span class="movie-title">JUMANJI</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div><div class="movie-list-item">
                        <img id="movimg" src="wonderwoman.jpg" alt="">
                        <span class="movie-title">WONDER WOMAN</span>
                       <p class="movieparg"> When the police take time to find Keller Dover's daughter and her friend, he decides to go on a search himself. His desperation leads him closer to finding the truth and also jeopardises his own life.</p>                        
                       <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
                        <button class="moviebuttom">WATCH</button>
                        </a>                    </div>
                </div>
                <i class="fa-solid fa-circle-right arrow"></i>
            </div>
        </div>
        <div class="featured-con" style="background: linear-gradient(to bottom,rgba(0,0,0,0),#151515),  url('off.jpg');">
            <h2 class="title">THE Office</h2>
            <p class="parg">Harry, Ron and Hermione race against time to destroy the remaining Horcruxes. Meanwhile, the students and teachers unite to defend Hogwarts against Lord Voldemort and the Death Eaters</p>
      <a href="https://www.youtube.com/watch?v=bpXfcTF6iVk" target="_blank">
            <button class="butto">WATCH</button>
        </a>
        </div>
    </div>
</div>
      <script src="app.js"></script>  

    </body>
</HTml>