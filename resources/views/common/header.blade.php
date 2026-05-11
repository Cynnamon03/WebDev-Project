<style>
        .navbar {
            background-color: white;
            border-bottom: 3px dashed #333;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 0px #fca311;
            margin-bottom: 40px;
            width: 100%;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            z-index: 100   
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .nav-brand img {
            width: 45px;
            height: auto;
            animation: float 3s ease-in-out infinite;
        }

        .nav-links {
            display: flex;
            gap: 15px;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 16px;
            border: 2px solid transparent;
            border-radius: 20px;
            transition: all 0.2s ease;
        }

        .nav-links a:hover {
            background-color: #fca311;
            border-color: #333;
            color: #faf9f6;
            box-shadow: 2px 2px 0px #333;
            transform: translate(-2px, -2px);
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
</style>

    <nav class="navbar">
        <a href="{{ url('/home') }}" class="nav-brand">
            <img src="{{ asset('images/Mimikyu-bg-removed.png') }}" alt="Mimikyu Logo">
            Mimikyu's Hideout
        </a>

        <ul class="nav-links">
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">Trainer Profile</a></li>
            <li><a href="{{ url('/calculate') }}">Battle Calcs</a></li>
            <li><a href="{{ url('/pricing') }}">Disguise Tiers</a></li>
        </ul>
    </nav>