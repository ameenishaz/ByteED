<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="index.html" class="logo">ByteEd</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Ozler</h3>
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Ozler</h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="home-grid">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p class="likes">total likes : <span>25</span></p>
         <a href="#" class="inline-btn">view likes</a>
         <p class="likes">total comments : <span>12</span></p>
         <a href="#" class="inline-btn">view comments</a>
         <p class="likes">saved playlists : <span>4</span></p>
         <a href="#" class="inline-btn">view playlists</a>
      </div>

      <div class="box">
         <h3 class="title">Model Questions</h3>
         <div class="flex">
            <a href="https://drive.google.com/file/d/1XNd8EOIychIkn17CYc4l5eW67-KJ_uFo/view?usp=drive_link"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="https://drive.google.com/file/d/17hvLdyFDADKuC0oCHpT721treEH3YNRG/view?usp=drive_link"><i class="fas fa-solid fa-c"></i><span>c</span></a>
            <a href="https://drive.google.com/file/d/1lXci-cx3zPEGYyLxKTHG5i0EezLWiDrI/view?usp=drive_link"><i class="fa-brands fa-java"></i><span>java</span></a>
            <a href="https://drive.google.com/file/d/1ia8o5x0IC8256zZ3B7Zsm_DYNyCrIbcA/view?usp=drive_link"><i class="fa-brands fa-js"></i><span>javascript</span></a>
            <a href="https://drive.google.com/file/d/1vYEZ4MA5LttrBjqOeb2r8vywJhgpVS-Z/view?usp=drive_link"><i class="fa-brands fa-python"></i><span>python</span></a>
            <a href="https://drive.google.com/file/d/1Jj8Wkzr3Xyq_N3hcP9w-K6cBQtvQTEiy/view?usp=drive_link"><i class="fa-brands fa-swift"></i><span>swift</span></a>
            <a href="https://drive.google.com/file/d/1G_6czpfI4o-R9zuVbbspzY0JgPBTowW7/view?usp=drive_link"><i class="fa-brands fa-php"></i><span>PHP</span></a>
            <a href="https://drive.google.com/file/d/1uNbthPQ1pdmNKwV1he1KSkYSDBc-QG0G/view?usp=drive_link"><i class="fab fa-css3"></i><span>CSS</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="https://drive.google.com/file/d/1dClY43shaxYjnWQ3BNCuOZ1eaUg7Oxpb/view?usp=drive_link"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="https://drive.google.com/file/d/1nEYkxkHDroq374q3ySoTr0Uf_8yz1VY6/view?usp=drive_link"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="https://drive.google.com/file/d/1CyzhePUQAuXVl0vxv4EfwNLv3TYt6oj3/view?usp=drive_link"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="https://drive.google.com/file/d/1UVjAnMspgfZTYcJ72lrhFdahOOhcfsED/view?usp=drive_link"><i class="fab fa-react"></i><span>react</span></a>
            <a href="https://drive.google.com/file/d/1vwWrHNKsjpwQijHLn9taTSeT0w7M2Tmq/view?usp=drive_link"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="https://drive.google.com/file/d/1-3odh77ZEiECfllPFA6_6R5pY5UrPePN/view?usp=drive_link"><i class="fa-brands fa-java"></i><span>java</span></a>
            <a href="https://drive.google.com/file/d/1tQTlpe1AjWv4ZUS98fu0sc_FVqe1o34c/view?usp=drive_link"><i class="fas fa-solid fa-c"></i><span>c</span></a>
            <a href="https://drive.google.com/file/d/1cO5vWqL43tLU2NKVIyHB4AE0kTW0zzJT/view?usp=drive_link"><i class="fa-brands fa-python"></i><span>python</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Quiz</h3>
         <p class="tutor">check your knowledge</p>
         <a href="quiz/quiz.html" class="inline-btn">get started</a>
      </div>

   </div>


<section class="courses">

   <h1 class="heading">Languages</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Hannath</h3>
               <span>04-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">HTML tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Hannath</h3>
               <span>04-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">CSS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>Haseeb</h3>
               <span>04-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">JS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Jumana</h3>
               <span>04-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">Boostrap tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Jouhara</h3>
               <span>15-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">JQuery tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Hannath</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">SASS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

   </div>

   <div class="more-btn">
      <a href="courses.html" class="inline-option-btn">view all courses</a>
   </div>

</section>















<footer class="footer">

   &copy; copyright @ 2024 by <span>ByteEd</span> | all rights reserved!<br>

   <div class="social-icons">
      <a href="https://www.instagram.com/ihzzaann?igsh=NWNpdGNidTYzcTRm"><i class="fa-brands fa-facebook">&nbsp;</i></a>
      <a href="https://www.instagram.com/_.ame._en._/"><i class="fa-brands fa-instagram">&nbsp;</i></a>
      <a href="https://www.instagram.com/shhibbinn?igsh=MWhqNGtxNmFtMm5xeg=="><i class="fa-brands fa-linkedin">&nbsp;</i></a>
      <a href="https://www.instagram.com/ansafalin?igsh=MWF0b2ZwaWsxM2FlOA=="><i class="fa-brands fa-twitter">&nbsp;</i></a>
      <a href="https://www.instagram.com/shahl.__?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-github">&nbsp;</i></a>
   </div>

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>