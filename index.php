<?php
include 'traitement/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- sidebar for song research  -->
    <div class="sidebar">
        <div class="logo">
            <a href="#">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Logo" />
            </a>
        </div>

        <div class="navigation">
            <ul>
                
                <li><a href="#"><span class="fa fa-search"></span><span>Search</span></a></li>
               
            </ul>
        </div>

        <div class="navigation">
            <ul>
            
                <li><a href="#"><span class="fa fas fa-heart"></span><span>Liked Songs</span></a></li>
            </ul>
        </div>

        <div class="policies">
            <ul>
                <li><a href="#">Cookies</a></li>
                <li><a href="#">Privacy</a></li>
            </ul>
        </div>
    </div>

    <!-- topbar for logIn and LogOut -->
    <div class="main-container">

      <div class="topbar">
        <div class="prev-next-buttons">
          <button type="button" class="fa fas fa-chevron-left"></button>
          <button type="button" class="fa fas fa-chevron-right"></button>
        </div>

     
            <div class="navbar">
                <ul>
                    <li><a href="#"></a></li>
                    <li class="divider">|</li>
                    <li><a id="connection">Log In</a></li>
                    <li><a href="traitement/logout.php">Log Out</a></li>
                </ul>
            </div>
        </div>
       
        <!-- form traitement login -->
        <form id="form" action="traitement/login.php" method="post" hidden>
            <input class="textlog" type="text" name="username">
            <input class="btnlog" type="submit" value="Login">
            </form>


        <div class="spotify-playlists">
            <h2>Spotify Playlists</h2>

            <div class="list">
                <div class="item">
                    <img src="https://blog.artsper.com/wp-content/uploads/2022/06/pepefroggie-770x432-2-644x362.jpg" />
                    <div class="play">
                        <span class="fa fa-play"></span>
                    </div>
                    <h4>Last Hit</h4>
                    <p>Eminem,Metro Boomin,iamjakehill</p>
                </div>
            </div>


            <div class="outer-container">
  <audio src="musics/Eminem_G.mp3" id="track"></audio>
</div>
 
<!-- music player -->
 
<div class="player-container">
  <img src=""  id="thumbnail" />

  <div class="box">
    <div class="play-pause">
      <i class="far fa-play-circle fa-3x" id="play"></i>
      <i class="far fa-pause-circle fa-3x" id="pause"></i>
    </div>
    <div class="track-info">
      <div id="track-artist"></div>
      <div id="track-title"></div>
    </div>
    <div class="next-prev">
      <i class="far fa-arrow-alt-circle-left fa-2x" id="prev-track"></i>
      <i class="far fa-arrow-alt-circle-right fa-2x" id="next-track"></i>
    </div>
    <div class="progress-bar">
      <input type="range" id="progressBar" min="0" max="" value="0" />
    </div>
    <div class="track-time">
      <div id="currentTime"></div>
      <div id="durationTime"></div>
    </div>
  </div>
</div>
<script src="https://kit.fontawesome.com/7d35781f0a.js" crossorigin="anonymous"></script> 
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

</body>
<script src="js/main.js"></script>
</html>
