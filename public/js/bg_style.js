let dropdownMenu = document.getElementById("dropdown-menu");

function toggleMenu(){
    dropdownMenu.classList.toggle("open-menu");
}


const playPauseBtn = document.querySelector('.play-pause-btn');
const playIcon = document.getElementById('play-icon');
const pauseIcon = document.getElementById('pause-icon');

// Toggle play/pause icon
playPauseBtn.addEventListener('click', function () {
    if (audioPlayer.paused) {
        audioPlayer.play();
        playIcon.style.display = 'none';
        pauseIcon.style.display = 'inline'; // Ensure this matches your styling
    } else {
        audioPlayer.pause();
        playIcon.style.display = 'inline';
        pauseIcon.style.display = 'none';
    }
});


// Array of songs in the playlist (just an example)
const songs = [
    { title: "Peaches", artist: "Kai", file: "path_to_peaches.mp3" },
    { title: "Lose My Breath", artist: "Stray Kids (feat. Charlie Puth)", file: "path_to_lmb.mp3" },
    { title: "Pyscho", artist: "Jun", file: "path_to_merry_christmas.mp3" },
    { title: "Happy New Year", artist: "123", file: "path_to_happy_new_year.mp3" },
    // Add more songs as needed
];

let currentSongIndex = 0; // Keeps track of the current song
let isShuffle = false; // Shuffle mode flag
let isRepeat = false;  // Repeat mode flag

// Shuffle Button Event Listener
const shuffleBtn = document.querySelector('.shuffle-btn');
shuffleBtn.addEventListener('click', function() {
    isShuffle = !isShuffle; // Toggle shuffle mode
    shuffleBtn.classList.toggle('active', isShuffle); // Toggle active class for visual cue
    if (isShuffle) {
        // Shuffle the songs array
        shuffleSongs();
    }
});


// Previous Track Button Event Listener
const prevTrackBtn = document.querySelector('.prev-track-btn');
prevTrackBtn.addEventListener('click', function() {
    currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
    playCurrentSong();
});

// Next Track Button Event Listener
const nextTrackBtn = document.querySelector('.next-track-btn');
nextTrackBtn.addEventListener('click', function() {
    currentSongIndex = (currentSongIndex + 1) % songs.length;
    playCurrentSong();
});

// Repeat Button Event Listener
const repeatBtn = document.querySelector('.loop-btn');
repeatBtn.addEventListener('click', function() {
    isRepeat = !isRepeat; // Toggle repeat mode
    repeatBtn.classList.toggle('active', isRepeat); // Toggle active class for visual cue
});

// Play the current song based on the current index
function playCurrentSong() {
    const currentSong = songs[currentSongIndex];
    console.log("Now playing:", currentSong.title, "by", currentSong.artist);
    // Update the UI, such as song title, artist, and song playback
    // You can also add the actual music player code here
    updateSongInfo(currentSong);
}

// Shuffle the songs array (Fisher-Yates shuffle algorithm)
function shuffleSongs() {
    for (let i = songs.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [songs[i], songs[j]] = [songs[j], songs[i]]; // Swap elements
    }
    currentSongIndex = 0; // Reset the index after shuffle
    playCurrentSong();
}

// Update the song info (e.g., song title and artist)
function updateSongInfo(song) {
    const songTitle = document.querySelector('.song-title');
    const artistName = document.querySelector('.artist-name');
    songTitle.textContent = song.title;
    artistName.textContent = song.artist;
}

// Optional: Set up a function to handle audio playback (if you're using an HTML audio player)
// const audioPlayer = new Audio();
// audioPlayer.src = songs[currentSongIndex].file;
// audioPlayer.play();


const volumeSlider = document.querySelector('.volume-slider');

// Update the background on input (drag or click)
volumeSlider.addEventListener('input', function() {
    const value = this.value;
    const max = this.max;
    
    // Update the background of the slider to show the blue line
    this.style.background = `linear-gradient(to right, #3897F0 ${value / max * 100}%, #D9D9D9 ${value / max * 100}%)`;
});

const audioPlayer = new Audio();
audioPlayer.src = songs[currentSongIndex].file; // Path to the song file
audioPlayer.load(); // Load the song
audioPlayer.play(); // Start playing the song

const progressBar = document.querySelector('.progress');
const currentTimeDisplay = document.getElementById('current-time');
const durationDisplay = document.getElementById('duration');

// Update the progress bar and time display
audioPlayer.addEventListener('timeupdate', function() {
    const currentTime = audioPlayer.currentTime;
    const duration = audioPlayer.duration;
    
    // Update the progress bar value
    const progressPercentage = (currentTime / duration) * 100;
    progressBar.value = progressPercentage;

    // Format the current time and duration
    currentTimeDisplay.textContent = formatTime(currentTime);
    durationDisplay.textContent = formatTime(duration);
});

// Format time (e.g., 125 seconds becomes "2:05")
function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);
    const remainingSeconds = Math.floor(seconds % 60);
    return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
}

// When the user interacts with the progress bar, seek to that position
progressBar.addEventListener('input', function() {
    const newTime = (progressBar.value / 100) * audioPlayer.duration;
    audioPlayer.currentTime = newTime;
});

progressBar.addEventListener('input', function () {
        const value = (this.value - this.min) / (this.max - this.min) * 100;
        this.style.background = `linear-gradient(to right, #3897f0 ${value}%, #d9d9d9 ${value}%)`;
});