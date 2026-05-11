<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Trainer | {{ $name }}</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #faf9f6; padding: 40px; text-align: center; }
        .card { background: white; padding: 30px; border-radius: 12px; border: 2px dashed #fca311; box-shadow: 5px 5px 0px #ccc; max-width: 400px; margin: 0 auto; }
        .btn { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #333; color: white; text-decoration: none; border-radius: 20px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Editing Trainer: {{ $name }}</h2>
        <p><em>(In the future, a form with input fields will go here to update ID {{ $id }})</em></p>
        
        <a href="{{ route('userDisplay', ['id' => $id, 'name' => $name]) }}" class="btn">Cancel & Go Back</a>
    </div>
</body>
</html>