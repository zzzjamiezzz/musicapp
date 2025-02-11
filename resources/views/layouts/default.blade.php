<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="tab-icon" href="pic/music.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Sharing App</title>
    <link rel="stylesheet" href="/css/bg_style.css">
    <link rel="stylesheet" href="/css/artist_album.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @yield('styles')
</head>
<body>
    <div class="background">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="default_main.html" class="sidebar-link" style="margin-top: 70px; font-size: 20px; font-weight: 700;">Main</a>
            <a href="#" class="sidebar-link" style="font-size: 20px; font-weight: 700;">Library</a>
            <a href="{{route("playlist.index")}}" class="sidebar-link" style="font-size: 15px;">Playlists</a>
            <a href="#" class="sidebar-link" style="font-size: 15px;">Artists</a>
            <a href="#" class="sidebar-link" style="font-size: 15px;">Liked Songs</a>
        </div>
        @yield(section: 'content')

    </div>
</body>
<script src="js/bg_style.js"></script>
<script src="js/default_main.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>
