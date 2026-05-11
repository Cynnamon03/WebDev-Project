@extends('common.main')
@section('title', 'Add User')
@section('content')

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #faf9f6;
            color: #333;
            margin: 0;
            padding: 160px 20px 40px 20px;
            background-image: radial-gradient(#fca311 1px, transparent 1px);
            background-size: 30px 30px; 
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            text-align: center;
            margin-top: 40px; 
            margin-bottom: 30px;
            background: white;
            padding: 15px 40px;
            border-radius: 15px;
            border: 3px dashed #333;
            box-shadow: 6px 6px 0px #fca311;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            border: 2px solid #333;
            box-shadow: 5px 5px 0px #333;
            width: 100%;
            max-width: 500px;
            margin-bottom: 40px;
        }

        .form-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }

        .input-group {
            flex: 1;
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .input-group label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
            font-size: 0.9rem;
        }

        .input-group input {
            padding: 10px;
            font-size: 1rem;
            border: 2px dashed #aaa;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.2s;
        }

        .input-group input:focus {
            border-color: #fca311;
        }

        .btn {
            background: #333;
            color: white;
            padding: 12px 25px;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 3px 3px 0px #fca311;
            width: 100%;
            margin-top: 10px;
            transition: transform 0.1s, box-shadow 0.1s;
        }

        .btn:active {
            transform: translate(3px, 3px);
            box-shadow: 0px 0px 0px #fca311;
        }

        .back-link {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            border-bottom: 2px dashed #fca311;
            padding-bottom: 2px;
            margin-bottom: 40px;
        }
    </style>

    <div class="header">
        <h1>📝 Add User</h1>
    </div>

    <div class="card">
        <form action="{{ route('store') }}" method="POST">
            @csrf 

            <div class="form-row">
                <div class="input-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name">
                </div>
                <div class="input-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name">
                </div>
            </div>

            <div class="input-group">
                <label for="middle_name">Middle Name</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>

            <button type="submit" class="btn">Submit</button>
            @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
            @endforeach
            @endif
        </form>
    </div>

    <a href="{{ url('/home') }}" class="back-link">← Return to Hideout</a>
