@extends('common.main')
@section('title', 'About | Trainer Profile')
@section('content')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #faf9f6;
        color: #333;
        margin: 0;
        background-image: radial-gradient(#fca311 1px, transparent 1px);
        background-size: 30px 30px; 
    }

    .about-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 130px 20px 40px 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 40px;
        background: white;
        padding: 15px 40px;
        border-radius: 15px;
        border: 3px dashed #333;
        box-shadow: 6px 6px 0px #fca311;
        display: inline-block;
    }

    .header h1 {
        color: #222;
        font-size: 2.2rem;
        margin: 10px 0;
    }

    .profile-container {
        max-width: 700px;
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .card {
        background: white;
        padding: 30px;
        border-radius: 12px;
        border: 2px solid #333;
        box-shadow: 5px 5px 0px #333;
        position: relative;
    }

    .avatar {
        width: 80px;
        height: auto;
        position: absolute;
        top: 0px;
        right: 30px;
        animation: float 3s ease-in-out infinite;
    }

    .card h2 {
        margin-top: 0;
        color: #222;
        border-bottom: 2px dashed #ddd;
        padding-bottom: 10px;
    }

    .card p {
        color: #555;
        line-height: 1.6;
        font-size: 1.1rem;
    }

    .tag-container {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        margin-top: 15px;
    }

    .tag {
        background: #fca311;
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.9rem;
        border: 1px solid #333;
    }

    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    .back-link {
        margin-top: 30px;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        border-bottom: 2px dashed #fca311;
        padding-bottom: 2px;
        transition: color 0.2s ease;
    }

    .back-link:hover {
        color: #fca311;
    }
</style>

<div class="about-wrapper">
    <div class="header">
        <h1>Trainer Profile</h1>
    </div>

    <div class="profile-container">
        <div class="card">
            <img src="{{ asset('images/Mimikyu_Home-bg-removed.png') }}" alt="Avatar" class="avatar">
            <h2>Developer: JC</h2>
            <p>Welcome to my development sandbox! This Laravel project serves a dual purpose: it is my official staging ground for Computer Science class activities, and my personal laboratory for experimenting with backend logic, MVC architecture, and custom routing.</p>
        </div>

        <div class="card">
            <h2>Current Quests</h2>
            <p><strong>Main Quest:</strong> Complete required class modules and maintain clean code structure.</p>
            <p><strong>Side Quest:</strong> Break things, customize the UI, and learn how Laravel's Blade engine and controllers communicate behind the scenes.</p>
            
            <div class="tag-container">
                <span class="tag">PHP 8</span>
                <span class="tag">Laravel</span>
                <span class="tag">MVC Architecture</span>
                <span class="tag">HTML/CSS</span>
            </div>
        </div>
    </div>

    <a href="{{ url('/home') }}" class="back-link">← Return to Hideout</a>
</div>
@endsection