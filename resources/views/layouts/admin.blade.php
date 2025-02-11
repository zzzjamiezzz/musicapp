<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="tab-icon" href="pic/music.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Sharing App</title>
    <link rel="stylesheet" href="/css/bg_style.css">
    <link rel="stylesheet" href="/css/admin_main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @yield('styles')

</head>
<body>
    <div class="background">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="admin_main.html" class="sidebar-link" style="margin-top: 70px; font-size: 20px; font-weight: 700;">Main</a>
            <a href="#" class="sidebar-nolink" style="font-size: 20px; font-weight: 700;">Library</a>
            <a href="admin_saved_playlist.html" class="sidebar-link" style="font-size: 15px;">Playlists</a>
            <a href="admin_follow_artist.html" class="sidebar-link" style="font-size: 15px;">Artists</a>
            <a href="admin_liked_songs.html" class="sidebar-link" style="font-size: 15px;">Liked Songs</a>

            <a href="#" class="sidebar-nolink" style="margin-top: 70px; font-size: 20px; font-weight: 700;">Pending List</a>
            <a href="#" class="sidebar-link" style="font-size: 15px;">Report & Feedback</a>
            <a href="#" class="sidebar-link" style="font-size: 15px;">Artists Activities</a>
        </div>
        @yield(section: 'content')
    </div>
</body>
<script src="js/bg_style.js"></script>
<script src="js/default_main.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>

