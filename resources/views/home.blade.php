<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimikyu's Hideout</title>
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf9f6;
            color: #333;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: radial-gradient(#fca311 1px, transparent 1px);
            background-size: 30px 30px; 
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
            background: white;
            padding: 20px 50px;
            border-radius: 15px;
            border: 3px dashed #333; 
            box-shadow: 6px 6px 0px #fca311;
            display: inline-block;
            max-width: 600px;
        }

        .header img {
            max-width: 130px;
            margin-top: -60px;
            animation: float 3s ease-in-out infinite;
        }

        .header h1 {
            color: #222;
            font-size: 2.5rem;
            margin: 10px 0;
        }

        .header p {
            color: #666;
            font-size: 1.1rem;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 900px;
            width: 100%;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #333;
            box-shadow: 5px 5px 0px #333;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translate(-3px, -3px);
            box-shadow: 8px 8px 0px #fca311; 
        }

        .card h3 {
            margin-top: 0;
            color: #222;
            font-size: 1.4rem;
            border-bottom: 2px dashed #ddd;
            padding-bottom: 10px;
        }

        .card p {
            color: #555;
            line-height: 1.6;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #333;
            color: #faf9f6;
            padding: 15px 25px;
            border-radius: 8px;
            border: 2px solid #fca311;
            box-shadow: 4px 4px 0px #fca311;
            z-index: 1000;
            font-weight: bold;
            font-size: 1.1rem;
            animation: slideIn 0.5s ease-out forwards, fadeOut 0.5s ease-in 3.5s forwards;
        }

        @keyframes slideIn {
            from { transform: translateX(150%); }
            to { transform: translateX(0); }
        }

        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; visibility: hidden; }
        }
    </style>
</head>
<body>
    @if (session('status'))
        <div class="toast" id="toast-message">
            👻 Poof! {{ session('status') }}
        </div>

        <script>
            setTimeout(() => {
                const toast = document.getElementById('toast-message');
                if(toast) toast.remove();
            }, 4000);
        </script>
    @endif

    <div class="header">
        <img src="{{ asset('images/Mimikyu-bg-removed.png') }}" alt="Mimikyu">
        <h1>Mimikyu's Hideout</h1>
        <p>The backend is disguised and running perfectly.</p>
    </div>

    <div class="grid">
        <div class="card">
            <h3>👥 Trainer Profiles</h3>
            <p>Currently routing to the UserController. Ready to connect to a database to handle real user data and avatars.</p>
        </div>
        
        <div class="card">
            <h3>🧮 Battle Calcs</h3>
            <p>Testing logic separation. Math operations are securely handled in their own dedicated CalculateController.</p>
        </div>

        <div class="card">
            <h3>✨ Next Quest</h3>
            <p>Set up Blade templates, establish a database connection, and start building out models for the next phase.</p>
        </div>
    </div>

</body>
</html>