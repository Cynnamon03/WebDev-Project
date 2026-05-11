<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trainer Profile | {{ $name }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #faf9f6; padding: 40px; text-align: center; }
        .card { background: white; padding: 30px; border-radius: 12px; border: 2px solid #333; box-shadow: 5px 5px 0px #333; max-width: 400px; margin: 0 auto; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #fca311; color: white; text-decoration: none; border-radius: 20px; border: 1px solid #333; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Trainer: {{ $name }}</h1>
        <p>Trainer ID Number: <strong>{{ $id }}</strong></p>
        
        <a href="{{ url('/user/edit/' . $id . '/' . $name) }}" class="btn">Edit Trainer</a>
    </div>
</body>
</html>