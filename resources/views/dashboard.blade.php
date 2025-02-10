@extends('layouts.default')
@section('styles')
<link rel="stylesheet" href="css/user_saved_playlist.css">
@endsection
@section('content')
   <!-- Main Content -->
   <div class="main">
    <!-- Top Section -->
    <div class="elements-container">
        <div class="search-bar">
            <div class="search-bar-icon"><i class="fa fa-search"></i></div>
            <div class="search-bar-input"><input type="text" placeholder="Search for songs, artists..."></div>
        </div>
        <!-- Notification Section -->
        <div class="notification">
            <button class="notification-btn"><i class="bi bi-bell"></i></button>
        </div>
        <!-- Profile Pic Section -->
        <div class="profile-picture">
            <img src="pic/grey.png" alt="Profile Image" class="profile" onclick="toggleMenu()">
        </div>
        <!-- Dropdown Profile List -->
        <div class="dropdown-menu" id="dropdown-menu">
            <div class="background-menu">
                <a href="#" class="menu-link">Sign In/Login</a>
            </div>
        </div>
    </div>

    <!-- Content Container -->
    <div class="content-container">
        <div class="playlist-header">
            <div class="title">Playlists</div>
             <!-- Add Playlist Container -->
            <div class="add-playlist-container">
                <button class="add-playlist-btn">
                    <i class="bi bi-plus-circle"></i>
                    <span class="small-text">Add New Playlist</span>
                </button>
            </div>
        </div>

        <!-- Popup Add Playlist Container -->
        <div class="modal-overlay" id="modal-overlay"></div>
        <div class="playlist-modal" id="playlist-modal">
            <div class="modal-content">
                <h2>Create New Playlist</h2>
                <label for="playlist-image">Upload Image:</label>
                <input type="file" id="playlist-image" class="add-image-btn" accept="image/*">

                <label for="playlist-name">Playlist Name:</label>
                <input type="text" id="playlist-name" placeholder="Enter playlist name">

                <div class="modal-buttons">
                    <button class="create-btn "id="create-playlist-btn">Create</button>
                    <button class="close-btn" id="close-modal">Cancel</button>
                </div>
            </div>
        </div>

        <div class="track-container">
            <div class="card">
                <div class="image-container">
                    <img src="pic/newyear.png" alt="HappyNewYear">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Happy New Year</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/psycho.png" alt="Psycho_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Jun Playlist</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/psycho.png" alt="Psycho_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Psycho</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/crow.png" alt="Crow_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Crow</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/crow.png" alt="Crow_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Crow</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/crow.png" alt="Crow_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Crow</div>
                <div class="artist">By You</div>
            </div>
            <div class="card">
                <div class="image-container">
                    <img src="pic/crow.png" alt="Crow_Jun">
                    <div class="menu-container">
                        <i class="fa fa-ellipsis-v menu-icon"></i>
                        <div class="menu-dropdown">
                            <button class="delete-btn">Delete</button>
                        </div>
                    </div>
                    <div class="play-button">
                        <button class="play-btn">
                            <i class="fa fa-play" id="track-play-icon"></i>
                        </button>
                    </div>
                </div>
                <div class="music-title">Crow</div>
                <div class="artist">By You</div>
            </div>
        </div>
    </div>


</div>
<!-- Song Playback Bar Container -->
<div class="song-playback-bar music-container" id="music-box">
    <div class="song-info" id="music-info">
        <audio id="disc"></audio>
        <div class="song-info-cover" id="cover-box">
            <img src="pic/peaches.jpeg" alt="Peaches_Kai" id="cover" />
        </div>

        <div class="song-details">
            <div class="song-title" id="title">Peaches</div>
            <div class="artist-name" id="artist">Kai</div>
        </div>
    </div>
    <!-- PLayback Controls Container -->
    <div class="playback-controls-container">
        <div class="playback-controls">
            <button class="shuffle-btn"><i class="fa fa-random" aria-hidden="true"></i></button>
            <div id="control-box">
                <i id="prev" class="btn fas fa-backward"></i>
                <i id="play" class="special-btn fas fa-play"></i>
                <i id="next" class="btn fas fa-forward"></i>
              </div>
            <button class="loop-btn"><i class="bi bi-repeat"></i></button>
        </div>
        <!-- Song Progress Bar Container -->
        <div class="song-progress-bar" id="timer-bar" >
            <span id="timer" class="time-display">0:00</span>
            <div class="progress-bar-container" id="progress-container">
                <div class="progress" id="progress"></div>
            </div>
            <span id="duration" class="time-display"></span>
        </div>



    </div>

    <!-- Controls Button Container -->
    <div class="controls-button">
        <button class="add-btn"><i class="bi bi-plus-circle"></i></button>
        <button class="queue-btn"><i class="bi bi-list"></i></button>
        <div class="volume-control">
            <button class="volume-btn"><i class="bi bi-volume-up-fill"></i></button>
            <input type="range" class="volume-slider" min="0" max="100" value="0">
        </div>
        <button class="share-btn"><i class="bi bi-share"></i></button>
    </div>
</div>

<script src="{{ asset('js/song_playback_bar.js') }}"></script>
@endsection
