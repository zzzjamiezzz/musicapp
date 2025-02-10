@extends('layouts.artist')
@section('styles')
<link rel="stylesheet" href="css/artist_album.css">
@endsection
@section('content')
 <!-- Main Content -->
 <div class="main">
    <!-- Top Section -->
    <!-- Search bar Section -->
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
            <img src="pic/artist.png" alt="Profile Image" class="profile" onclick="toggleMenu()">
        </div>
        <!-- Dropdown Profile List -->
        <div class="dropdown-menu" id="dropdown-menu">
            <div class="background-menu">
                <a href="#" class="menu-link">Profile</a>
                <a href="artist_upload_music.html" class="menu-link">Upload</a>
                <a href="#" class="menu-link">Settings</a>
                <hr>
                <a href="default_main.html" class="menu-link">Log out</a>
            </div>
        </div>
    </div>

    <!-- Content Container -->
    <!-- New Release -->
    <div class="content-container">
        <div class="title">My Albums</div>

        <div class="track-container">
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
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
                <div class="artist">Jun</div>
            </div>
        </div>
    </div>
