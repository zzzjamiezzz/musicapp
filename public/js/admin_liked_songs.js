document.querySelectorAll('.play-btn').forEach(button => {
    button.addEventListener('click', function () {
        let icon = this.querySelector('i');

        if (icon.classList.contains('fa-play')) {
            icon.classList.remove('fa-play');
            icon.classList.add('fa-pause');
        } else {
            icon.classList.remove('fa-pause');
            icon.classList.add('fa-play');
        }
    });
});

document.querySelectorAll('.play-btn').forEach(button => {
    button.addEventListener('click', function () {
        let card = this.closest('.card'); // Find the card element
        let songTitle = card.querySelector('.music-title').innerText;
        let artistName = card.querySelector('.artist').innerText;
        let songCover = card.querySelector('img').src;

        // Update the playback bar details
        document.querySelector('.song-title').innerText = songTitle;
        document.querySelector('.artist-name').innerText = artistName;
        document.querySelector('.song-info-cover img').src = songCover;

        // Toggle play/pause button in the playback bar
        let playIcon = document.getElementById('play-icon');
        let pauseIcon = document.getElementById('pause-icon');

        if (playIcon.style.display === 'none') {
            playIcon.style.display = 'inline';
            pauseIcon.style.display = 'none';
        } else {
            playIcon.style.display = 'none';
            pauseIcon.style.display = 'inline';
        }

        // Toggle play button on the clicked card
        let icon = this.querySelector('i');
        icon.classList.toggle('fa-play');
        icon.classList.toggle('fa-pause');
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const trackContainer = document.querySelector(".track-container");

    trackContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("delete-btn")) {
            const card = event.target.closest(".card");
            card.remove();
        }
    });
});

