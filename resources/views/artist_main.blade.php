@extends('layouts.artist')
@section('styles')
<link rel="stylesheet" href="css/artist_main.css">
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
                <div class="title">Main</div>
                <div class="subtitle">New Release</div>
                <div class="new-release-card-container">
                    <div class="card">
                        <div class="image-container">
                            <img src="pic/peaches.jpeg" alt="Peaches_Kai">
                            <div class="play-button">
                                <button class="play-btn">
                                    <i class="fa fa-play" id="track-play-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="music-title">Peaches</div>
                        <div class="artist">Kai</div>
                    </div>
                    <div class="card">
                        <div class="image-container">
                            <img src="pic/LMB.png" alt="LoseMyBreath_SK">
                            <div class="play-button">
                                <button class="play-btn">
                                    <i class="fa fa-play" id="track-play-icon"></i>
                                </button>
                            </div>
                        </div>
                        <div class="music-title">Lose My Breath (feat. Charlie Puth)</div>
                        <div class="artist">Stray Kids</div>
                    </div>
                </div>
                <!-- Playlist For You -->
                <div class="subtitle">Playlist For You</div>
                <div class="playlist-container">
                    <div class="playlist-card-container" id="playlistCardContainer">
                        <!-- Slider main container -->
                        <div class="playlist-swiper swiper">
                            <!-- Additional required wrapper -->
                            <div class="playlist-swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/christmas.png" alt="Merry Christmas">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Merry Christmas</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/newyear.png" alt="HappyNewYear">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Happy New Year</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/kpop.png" alt="Kpop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Kpop Songs</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jay.png" alt="JayChou">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jay Chou</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jpop.png" alt="Jpop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jpop</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/rb.jpeg" alt="R&B">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">R&B</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jaypop.png" alt="Jaypop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jaypop</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/dumb.png" alt="Dumb">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Dumb</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="prev-button">
                                <i class='bi bi-chevron-left'></i>
                            </div>
                            <div class="next-button">
                                <i class='bi bi-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recently Played -->
                <div class="subtitle">Recently Played</div>
                <div class="recently-played-container">
                    <div class="recently-played-card-container" id="recentlyPlayedCardContainer">
                        <!-- Slider main container -->
                        <div class="recently-played-swiper swiper">
                            <!-- Additional required wrapper -->
                            <div class="recently-played-swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/christmas.png" alt="Merry Christmas">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Merry Christmas</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/newyear.png" alt="HappyNewYear">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Happy New Year</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/kpop.png" alt="Kpop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Kpop Songs</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jay.png" alt="JayChou">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jay Chou</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jpop.png" alt="Jpop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jpop</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/rb.jpeg" alt="R&B">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">R&B</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/jaypop.png" alt="Jaypop">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Jaypop</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide">
                                        <div class="image-container">
                                            <img src="pic/dumb.png" alt="Dumb">
                                            <div class="play-button">
                                                <button class="play-btn">
                                                    <i class="fa fa-play" id="track-play-icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="music-title">Dumb</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="prev-button">
                                <i class='bi bi-chevron-left'></i>
                            </div>
                            <div class="next-button">
                                <i class='bi bi-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Artists -->
                <div class="subtitle">Artists</div>
                <div class="artists-container">
                    <div class="artists" id="artistsCardContainer">
                        <!-- Slider main container -->
                        <div class="artists-swiper swiper">
                            <!-- Additional required wrapper -->
                            <div class="artists-swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/SK.jpg" alt="StrayKids">
                                        <div class="artist-title">Stray Kids</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/exo.png" alt="exo">
                                        <div class="artist-title">EXO</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/jakemiller.png" alt="JakeMiller">
                                        <div class="artist-title">Jake Miller</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/onedirection.png" alt="OneDirection">
                                        <div class="artist-title">One Direction</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/jungkook.png" alt="Jungkook">
                                        <div class="artist-title">Jungkook</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/jay.png" alt="JayChou">
                                        <div class="artist-title">Jay Chou</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/kai.png" alt="Kai">
                                        <div class="artist-title">Kai</div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-slide-artist">
                                        <img src="pic/baekhyun.png" alt="Baekhyun">
                                        <div class="artist-title">Baekhyun</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Navigation buttons -->
                            <div class="prev-button">
                                <i class='bi bi-chevron-left'></i>
                            </div>
                            <div class="next-button">
                                <i class='bi bi-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
