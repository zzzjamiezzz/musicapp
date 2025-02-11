@extends('layouts.signup')
@section('styles')
<link rel="stylesheet" href="css/artist_signup.css">
@endsection
@section('content')
    <!-- Main Content -->
    <div class="main">
        <div class="login-form">
            <div class="title">Sign Up</div>
            <div class="username-text">Stage Name:</div>
            <input type="text" class="input-field">
            <div class="email-phone-num-text">Email:</div>
            <input type="text" class="input-field">
            <div class="email-phone-num-text">Phone Number:</div>
            <input type="text" class="input-field">
            <div class="password-text">Password:</div>
            <input type="password" class="input-field">
            <div class="button">
                <button type="next-btn" class="next-btn" onclick="Next()">Next</button>
                <button type="signup-btn" class="signup-btn" onclick="Login()">Cancel</button>
            </div>
        </div>
    </div>
