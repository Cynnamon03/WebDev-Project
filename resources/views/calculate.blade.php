@extends('common.main')
@section('title', 'Battle Calcs Results')
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

    .calc-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 130px 20px 40px 20px; 
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
        background-color: #e9ecef; 
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        width: 100%;
        max-width: 450px;
        text-align: center;
        border: 2px dashed #333;
    }

    .name-input {
        font-size: 1.2rem;
        padding: 8px;
        margin-bottom: 15px;
        width: 90%;
        border-radius: 5px;
        border: 2px solid #ccc;
        outline: none;
    }

    .name-input:focus {
        border-color: #fca311;
    }

    .g-button {
        background-color: #fca311; 
        color: #333;
        border: 2px solid #222;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.2s ease, transform 0.1s;
        font-weight: bold;
        box-shadow: 3px 3px 0px #333;
    }

    .g-button:active {
        transform: translate(2px, 2px);
        box-shadow: 1px 1px 0px #333;
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
</style>

<div class="calc-wrapper">
    <div class="header">
        <h1>🧮 Battle Calcs</h1>
    </div>

    <div class="background-calc">
        <h2>Enter Details</h2>
        <p>Please enter your information below.</p>
        <div>
            <input type="text" id="inputFName" class="name-input" placeholder="First Name...">
        </div>
        <input type="button" class="g-button" value="Submit">
    </div>

    <div class="custom-card">
        <div class="result-block">
            &gt;&gt; {{ $num1 ?? 0 }} + {{ $num2 ?? 0 }} = <span>{{ $sum ?? 0 }}</span><br><br>
            The sum is <span>{{ $sum ?? 0 }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 ?? 0 }} - {{ $num2 ?? 0 }} = <span>{{ $difference ?? 0 }}</span><br><br>
            The difference is <span>{{ $difference ?? 0 }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 ?? 0 }} * {{ $num2 ?? 0 }} = <span>{{ $product ?? 0 }}</span><br><br>
            The product is <span>{{ $product ?? 0 }}</span>.
        </div>

        <div class="result-block">
            &gt;&gt; {{ $num1 ?? 0 }} / {{ $num2 ?? 0 }} = <span>{{ $quotient ?? 0 }}</span><br><br>
            The quotient is <span>{{ $quotient ?? 0 }}</span>.
        </div>
    </div>
    
    <a href="{{ url('/home') }}" class="back-link">← Return to Hideout</a>
</div>
@endsection