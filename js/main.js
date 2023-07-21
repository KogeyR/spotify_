// form hidden and true on click
let boutonlog=document.querySelector("#connection");
let form=document.querySelector("#form");

boutonlog.addEventListener('click',()=>{
    form.hidden=false;
})

// music player


let trackIndex = 0;
let tracks = [];
let thumbnails = [];
let trackArtists = [];
let trackTitles = [];
let isRandomPlaying = false;

function loadTrack() {
  trackIndex = index;
  track.src = tracks[trackIndex];
  thumbnail.src = thumbnails[trackIndex];
  trackArtist.textContent = trackArtists[trackIndex];
  trackTitle.textContent = trackTitles[trackIndex];


  track.addEventListener('canplay', function () {
    playing = true;
    pausePlay();
  });
}

function fetchAudioData() {
  fetch('config/get_song.php')
    .then(response => response.json())
    .then(data => {
      const { songs } = data;
      tracks = songs.map(song => song.file);
      thumbnails = songs.map(song => song.image);
      trackArtists = songs.map(song => song.author);
      trackTitles = songs.map(song => song.name);

      
      loadTrack(0);
    })
    .catch(error => {
      console.error('Error fetching audio data:', error);
    });
}

document.addEventListener('DOMContentLoaded', () => {
  fetchAudioData();


  let boutonlog = document.querySelector("#connection");
  let form = document.querySelector("#form");

  boutonlog.addEventListener('click', () => {
    form.hidden = false;
  });

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
  let random = document.getElementById("random-play");
  let playing = true;

 
 

  play.addEventListener("click", pausePlay);
  pause.addEventListener("click", pausePlay);
  random.addEventListener('click', getRandomIndex);
  track.addEventListener("ended", nextTrack);

  function pausePlay() {
    if (playing) {
      play.style.display = "none";
      pause.style.display = "block";
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

  function getRandomIndex(excludeIndex, arrayLength) {
    let randomIndex = Math.floor(Math.random() * arrayLength);
    if (randomIndex === excludeIndex) {
      randomIndex = (randomIndex + 1) % arrayLength;
    }
    return randomIndex;
  }

  function playRandomTrack() {
    if (isRandomPlaying) return; 

    isRandomPlaying = true;
    random.style.backgroundColor = "orange";
    function playNextRandomTrack() {
      let randomIndex = getRandomIndex(trackIndex, tracks.length);
      trackIndex = randomIndex;
      track.src = tracks[trackIndex];
      thumbnail.src = thumbnails[trackIndex];
      trackArtist.textContent = trackArtists[trackIndex];
      trackTitle.textContent = trackTitles[trackIndex];

      playing = true;
      pausePlay();

      track.addEventListener('ended', playNextRandomTrack);
    }

    playNextRandomTrack();
  }
  random.addEventListener("click", playRandomTrack);

  function changeProgressBar() {
    track.currentTime = progressBar.value;
  }

  progressBar.addEventListener("click", changeProgressBar);
})
.catch(error => {
  console.error('Error fetching audio data:', error);
});
