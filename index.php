<?php

include 'traitement/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css%22%3E">

</head>

<body>
    <!-- sidebar for song research  -->
    <div class="sidebar">
        <div class="logo">
            <a href="#">
                <img src="data:image/jpeg;base64,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ufmjZ1hZCyuPOhNVm0Bw97nPcyS7nFx/xXb5NyvZwTBYKKN0UALWufrkOcXHWIA3zzAL0EWzUvK9SOjOba+5hhb0oPOMUmF4GL6IUdXK6eZjzI4AEiRwFgLDYFsCwsdKtUpPOm2n9j7nTjUWUlmjxcE0XpaJ7pIGua5zdU6z3OGrcHx9C9pFlKtadWWlN5v7nsKcYLKKyR5+LYPT1bNSeMSAeCd5zTxtcNoWrPyxoybiWZo4taM/fqreEWajfXFGOjTm0vl8DFUtqVR5yimzxMF0Vo6M60Ud5P4sh1n+i+weiy/LFdDqOqmdPKx5kfbWIkcBsAaNg5gFsCL5/rK+m6mm9J/E9/p6Wjo6Ky+R5OBaPU9Dr9jtc3dLa2s8u8G9t/pK+6upGzxPhkF2SNLXAGxsdh2r6VhY51qk5+0k85fPu6D7jTjGOils+Rqnc8w7+G/rnr3K/B6eoibDNEJGNADb+E2wtcOG0L0FhZJXdeTTlNtro29B8Rt6UU0oraaRLlnRk3bLM0fRDozb0lt17uBaL0lEdaKO8lrbrIdaT0HeHosvaRfdS/uakdGc21/PkfMLSjB6UYrMwsoi02bBruYfBlT0M94xQ4q45h8GVPQz3jFDiuwwHsz/ACfkjn8V65dxhERWiaEREAREQGQrZlxwXT/Wl949RMLddFNOjRQdjvh3VjSSwtfquGsbkHYb7ST6VNxW2qXFDQprN5p+Zu2FaFKrpT6MvQryyp33U4uSv61vyrPdTi5K/rW/Kua1PebnNepZ1hb73JlDRTvupxclf1rflTupxclf1rflTU95uc16jWFvvcmURFO+6nFyV/Wt+VZ7qcXJX9a35U1PebnNeo1hb73JlDRTvupxclf1rflTupxclf1rflTU95uc16jWFvvcmURFO+6nFyV/Wt+VZ7qcXJX9a35U1PebnNeo1hb73JlDRTvupxclf1rflTupxclf1rflTU95uc16jWFvvcmURFPO6nFyV/Wt+VY7qcXJX9a35U1PebnNeo1hb73JlERTvupxclf1rflTupxclf1rflTU95uc16jWFvvcmUNFPe6nFyV/Wt+VY7qcXJX9a35U1PebnNeo1hb73JlDRTzupxclf1rflTupxclf1zflTU95uc16jWFvvcmbDmHwZU9DPeMUOK3fSrTw1sBp44dyY8gyOc/WcQ03DRYC20BaQV0mFW1S3oaNRZNtvkvQjX9aFWpnDoyMIiKmaQREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQH/2Q==" alt="Logo" />
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
  <audio src="" id="track"></audio>
</div>
 
<!-- music player -->
<div class="player-container">
  <img src=""  id="thumbnail" />

  <div class="box">
    <div class="play-pause">
      <i class="far fa-play-circle fa-3x" id="play"></i>
      <i class="far fa-pause-circle fa-3x" id="pause"></i>
      <div class="btn-random">
  <button id="random-play"><i class="fa-solid fa-shuffle"></i></button>
</div>
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

</body>
<script src="js/main.js"></script>
</html>