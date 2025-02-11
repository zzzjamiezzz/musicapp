@extends('layouts.logintemplate')
@section('styles')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')
   <!-- Main Content -->
<!-- Main Content -->
    <div class="main">
        <div class="logo-container">
            <div class="logo-title">
                <i class="bi bi-music-note-beamed"></i>
                <div class="music-text">USIC</div>
            </div>
            <div class="description-text">Your soundtrack, Anytime, Anywhere.</div>
        </div>
        <div class="login-form">
            <div class="title">Log In</div>
            <div class="email-phone-num-text">Email/Phone Number:</div>
            <input type="text" class="input-field">
            <div class="password-text">Password:</div>
            <input type="password" class="input-field">
            <div class="button">
                <button type="login-btn" class="login-btn">Log In</button>
                <button type="signup-btn" class="signup-btn" onclick="SignUp()">Sign Up</button>
            </div>
        </div>
    </div>
