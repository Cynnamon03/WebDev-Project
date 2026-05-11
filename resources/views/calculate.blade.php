<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Battle Calcs Results</title>
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
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
            margin-bottom: 30px;
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

        .custom-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 2px solid #333;
            box-shadow: 5px 5px 0px #333;
            width: 100%;
            max-width: 450px;
            margin-bottom: 30px;
        }

        .background-calc {
            background-color: yellowgreen;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            width: 100%;
            max-width: 450px;
            text-align: center;
            border: 2px solid #333;
        }

        .name-input {
            font-size: 1.2rem;
            padding: 8px;
            margin-bottom: 15px;
            width: 90%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .g-button {
            background-color: green;
            color: white;
            border: 2px solid #222;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.2s ease;
            font-weight: bold;
        }

        .g-button:hover {
            background-color: darkgreen;
        }

        .result-block {
            margin-bottom: 20px;
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            border: 2px dashed #ccc;
            font-family: monospace; 
            font-size: 1.2rem;
            color: #444;
            transition: border-color 0.2s, transform 0.2s;
        }

        .result-block:hover {
            border-color: #fca311;
            transform: translateX(5px);
        }

        .result-block span {
            font-weight: bold;
            color: #fca311;
            font-size: 1.3rem;
        }

        .back-link {
            margin-top: 10px;
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
        
        .debug-border {
            border: 2px dashed #ccc;
            padding: 10px;
            text-align: center;
            background-color: rgba(255,255,255,0.8);
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container mb-5 custom-card">
        <h4 class="text-center mb-3">Grid Activity</h4>
        <div class="row">
            <div class="col-lg-6"><div class="debug-border">:col 6</div></div>
            <div class="col-lg-6"><div class="debug-border">:col 6</div></div>
            <div class="col-lg-12"><div class="debug-border">:col 12</div></div>
        </div>

        <div class="row">
            <div class="col-lg-4"><div class="debug-border">:col 4</div></div>
            <div class="col-lg-4"><div class="debug-border">:col 4</div></div>
            <div class="col-lg-4"><div class="debug-border">:col 4</div></div>
        </div>

        <div class="card mt-4">
            <div class="card-body border-bottom">
                <h5 class="card-title">Card title 1</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title 2</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>

    <div class="background-calc">
        <h2>Enter Details</h2>
        <p>Please enter your information below.</p>
        <div>
            <input type="text" id="inputFName" class="name-input" placeholder="First Name...">
        </div>
        <input type="button" class="g-button" value="Submit">
    </div>

    <div class="header">
        <h1>🧮 Battle Calcs</h1>
    </div>

    <div class="custom-card">
        <div class="result-block">
            &gt;&gt; {{ $num1 }} + {{ $num2 }} = <span>{{ $sum }}</span><br><br>
            The sum is <span>{{ $sum }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 }} - {{ $num2 }} = <span>{{ $difference }}</span><br><br>
            The difference is <span>{{ $difference }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 }} * {{ $num2 }} = <span>{{ $product }}</span><br><br>
            The product is <span>{{ $product }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 }} / {{ $num2 }} = <span>{{ $quotient }}</span><br><br>
            The quotient is <span>{{ $quotient }}</span>.
        </div>
    </div>
    
    <a href="{{ url('/home') }}" class="back-link">← Return to Hideout</a>
    
</body>
</html>