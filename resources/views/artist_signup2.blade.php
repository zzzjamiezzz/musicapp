@extends('layouts.signup')
@section('styles')
<link rel="stylesheet" href="css/artist_signup2.css">
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main">
        <div class="login-form">
            <div class="title">More Info</div>
            <div class="genre-text">Genre:</div>
            <input type="text" class="input-field">
            <div class="social-media-links-text">Social Media Links:</div>
            <input type="text" class="input-field">
            <div class="website-text">Website/Portfolio:</div>
            <input type="text" class="input-field">
            <div class="biography-text">Biography:</div>
            <input type="text" class="biography-input-field">
            <div class="button">
                <button type="next-btn" class="next-btn">Sign Up</button>
                <button type="signup-btn" class="signup-btn" onclick="Login()">Cancel</button>
            </div>
        </div>
    </div>
