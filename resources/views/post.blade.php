<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimikyu's Post Board</title>
    <style>
        body {
            background-color: #2b2536;
            color: #f7e7ce;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #3b334a;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            border: 2px solid #ecd33a; 
        }
        .header-section {
            text-align: center;
            margin-bottom: 20px;
        }
        .header-section img {
            max-width: 150px;
            border-radius: 50%;
            border: 3px solid #ecd33a;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            background-color: #2b2536;
            color: #fff;
            border: 1px solid #ecd33a;
            border-radius: 5px;
        }
        button {
            padding: 10px 25px;
            background-color: #ecd33a;
            color: #2b2536;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #fff;
        }

        table {
            width: 100%;
            text-align: left;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: fixed;
        }

        th, td {
            padding: 15px 12px;
            border-bottom: 1px solid #5a4f70;
            vertical-align: top; 
            word-wrap: break-word; 
        }

        th {
            background-color: #2b2536;
            color: #ecd33a;
            font-size: 1.1em;
        }

        th:nth-child(1) { width: 25%; }
        th:nth-child(2) { width: 45%; } 
        th:nth-child(3) { width: 15%; }
        th:nth-child(4) { width: 15%; } 
    </style>
</head>
<body>
    <div class="container">
        <div class="header-section">
            <img src="{{ asset('images/Mimikyu-bg-removed.png') }}" alt="Mimikyu">
            <h2>Mimikyu's Shadow Board</h2>
        </div>

        @if(session('success'))
            <div style="color: #ecd33a; margin-bottom: 15px; text-align: center; font-weight: bold;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('post') }}" method="POST" style="margin-bottom: 40px;">
            @csrf
            
            <div style="margin-bottom: 15px;">
                <label for="title">Title:</label><br>
                <input type="text" id="title" name="title" required>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4"></textarea>
            </div>

            <div style="text-align: right;">
                <button type="submit">Cast Spell (Submit)</button>
            </div>
        </form>

        <hr style="border-color: #5a4f70;">

        <h3 style="color: #ecd33a;">Recent Dispatches</h3>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Created By</th>
                    <th>Status</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td style="font-weight: bold; color: #ecd33a;">
                            {{ $post->title }}
                        </td>
                        
                        <td style="color: #e0d8f0;">
                            {{ $post->description ?? '...' }}
                        </td>
                        
                        <td style="font-style: italic;">
                            {{ $post->created_by }}
                        </td>
                        
                        <td style="font-weight: bold;">
                            @if($post->status == 1)
                                <span style="color: #a89f91;">Lurking</span>
                            @elseif($post->status == 2)
                                <span style="color: #ecd33a;">Disguised</span>
                            @elseif($post->status == 3)
                                <span style="color: #ff6b6b;">Busted!</span>
                            @else
                                Unknown
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</body>
</html>