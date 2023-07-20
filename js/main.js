// form hidden and true on click
let boutonlog=document.querySelector("#connection");
let form=document.querySelector("#form");

boutonlog.addEventListener('click',()=>{
    form.hidden=false;
})

// music player

const track = document.getElementById("track");
const thumbnail = document.getElementById("thumbnail");
const trackArtist = document.getElementById("track-artist");
const trackTitle = document.getElementById("track-title");
const progressBar = document.getElementById("progressBar");
const currentTime = document.getElementById("currentTime");
const durationTime = document.getElementById("durationTime");

let play = document.getElementById("play");
let pause = document.getElementById("pause");
let next = document.getElementById("next-track");
let prev = document.getElementById("prev-track");
trackIndex = 0;


tracks = [
  "musics/Eminem_G.mp3",
  "musics/metro.mp3",
  "musics/2pac_all.mp3",
];
thumbnails = [
  "https://flpstudio.com/cdn/shop/products/Eminem-feat.-Juice-WRLD---Godzilla-_FL-Studio-Remake_1200x1200.png?v=1641264705",
  "https://images.genius.com/bf3bea9f728e14af9c4317f7693a0c23.1000x1000x1.png",
  "https://m.media-amazon.com/images/I/81+hlw7I9BL._UF894,1000_QL80_.jpg",
];
trackArtists = ["Eminem", "MetroBoomin","2pac",];
trackTitles = [
  "Godzilla",
   "SuperHero",
   "All Eyes On Me",];

let playing = true;


function pausePlay() {
  if (playing) {
    play.style.display = "none";
    pause.style.display = "block";
    thumbnail.style.transform = "scale(1.25)";

    track.play();
    playing = false;
  } else {
    pause.style.display = "none";
    play.style.display = "block";

    thumbnail.style.transform = "scale(1)";

    track.pause();
    playing = true;
  }
}

play.addEventListener("click", pausePlay);
pause.addEventListener("click", pausePlay);

track.addEventListener("ended", nextTrack);

function nextTrack() {
  trackIndex++;
  if (trackIndex > tracks.length - 1) {
    trackIndex = 0;
  }

  track.src = tracks[trackIndex];
  thumbnail.src = thumbnails[trackIndex];

  trackArtist.textContent = trackArtists[trackIndex];
  trackTitle.textContent = trackTitles[trackIndex];

  playing = true;
  pausePlay();
}

next.addEventListener("click", nextTrack);

function prevTrack() {
  trackIndex--;
  if (trackIndex < 0) {
    trackIndex = tracks.length - 1;
  }

  track.src = tracks[trackIndex];
  thumbnail.src = thumbnails[trackIndex];

  trackArtist.textContent = trackArtists[trackIndex];
  trackTitle.textContent = trackTitles[trackIndex];

  playing = true;
  pausePlay();
}

prev.addEventListener("click", prevTrack);

function progressValue() {
  progressBar.max = track.duration;
  progressBar.value = track.currentTime;

  currentTime.textContent = formatTime(track.currentTime);
  durationTime.textContent = formatTime(track.duration);
}

setInterval(progressValue, 500);

function formatTime(sec) {
  let minutes = Math.floor(sec / 60);
  let seconds = Math.floor(sec - minutes * 60);
  if (seconds < 10) {
    seconds = `0${seconds}`;
  }
  return `${minutes}:${seconds}`;
}

function changeProgressBar() {
  track.currentTime = progressBar.value;
}

progressBar.addEventListener("click", changeProgressBar);
