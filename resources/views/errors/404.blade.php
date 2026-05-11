<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf9f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
        }

        .error-container {
            max-width: 600px;
            padding: 20px;
        }

        .error-image {
            max-width: 400px;
            height: auto;
            margin-bottom: 1px;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        .home-button {
            display: inline-block;
            padding: 12px 30px;
            background-color: #fca311;
            color: #fff;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .home-button:hover {
            background-color: #e59400;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="error-container">
        <img src="{{ asset('images/Mimikyu_Disguise-bg-removed.png') }}" alt="Mimikyu 404" class="error-image">
        
        <h1>Oops! Page Not Found</h1>
        <p>It looks like this page used "Disguise" and is hiding from us. Let's get you back to safe territory.</p>
        
        <a href="{{ url('home') }}" class="home-button">Return to Home</a>
    </div>

</body>
</html>