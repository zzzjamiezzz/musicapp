<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="tab-icon" href="pic/music.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Sharing App</title>
    <link rel="stylesheet" href="css/signup_choosing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <!-- Main Content -->
    <div class="main">
        <div class="select-container">
            <div class="select-text">You are?</div>
            <div class="button-choose">
                <button type="login-btn" class="login-btn" onclick="User()"><span class="icon">🎧</span>User</button>
                <button type="signup-btn" class="signup-btn" onclick="Artist()"><span class="icon">🎵</span> Artists</button>
            </div>
        </div>
    </div>
</body>
<script src="js/signup_choosing.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>
