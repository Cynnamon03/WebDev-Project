@extends('common.main')

@section('title', "Mimikyu's Shadow Board")

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
    
    .post-container {
        max-width: 900px;
        margin: 130px auto 40px auto; 
        padding: 30px;
        background: white;
        border-radius: 15px;
        border: 3px dashed #333; 
        box-shadow: 6px 6px 0px #fca311;
    }

    .post-container + .post-container {
        margin-top: 0; 
    }

    .post-container h2 {
        margin-top: 0;
        color: #222;
        font-size: 1.8rem;
        border-bottom: 2px dashed #ddd;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 8px;
        color: #333;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 2px solid #333;
        border-radius: 8px;
        box-sizing: border-box;
        font-family: inherit;
        transition: all 0.2s ease;
    }

    .form-group input:focus, .form-group textarea:focus {
        outline: none;
        border-color: #fca311;
        box-shadow: 4px 4px 0px #fca311;
        transform: translate(-2px, -2px);
    }

    .submit-btn {
        background-color: #fca311;
        color: #333;
        font-weight: bold;
        padding: 12px 25px;
        border: 2px solid #333;
        border-radius: 20px;
        cursor: pointer;
        box-shadow: 3px 3px 0px #333;
        transition: all 0.2s ease;
        font-size: 1rem;
    }

    .submit-btn:hover {
        transform: translate(-2px, -2px);
        box-shadow: 5px 5px 0px #333;
        background-color: #fff;
    }

    .post-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        table-layout: fixed;
    }

    .post-table th, .post-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 2px solid #333;
        border-right: 2px solid #333;
        word-wrap: break-word;
    }

    .post-table th:last-child, .post-table td:last-child {
        border-right: none;
    }
    
    .post-table tr:last-child td {
        border-bottom: none;
    }

    .post-table th {
        background-color: #fca311;
        color: #333;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .post-table tr {
        transition: background-color 0.2s ease;
    }

    .post-table tr:hover td {
        background-color: #fff8eb;
    }

    .status-badge {
        padding: 5px 12px;
        border-radius: 12px;
        font-weight: bold;
        font-size: 0.9rem;
        border: 2px solid #333;
        display: inline-block;
    }

    .status-lurking { background-color: #e0e0e0; color: #333; }
    .status-disguised { background-color: #fca311; color: #333; }
    .status-busted { background-color: #ff6b6b; color: white; }

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

    @keyframes slideIn { from { transform: translateX(150%); } to { transform: translateX(0); } }
    @keyframes fadeOut { from { opacity: 1; } to { opacity: 0; visibility: hidden; } }

</style>

@if (session('success'))
    <div class="toast" id="toast-message">
        👻 Poof! {{ session('success') }}
    </div>
    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-message');
            if(toast) toast.remove();
        }, 4000);
    </script>
@endif

<div class="post-container">
    <h2>📝 Draft a Dispatch</h2>
    <form action="{{ route('post') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required placeholder="What's going on?">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Share the spooky details..."></textarea>
        </div>

        <button type="submit" class="submit-btn">Cast Spell (Submit)</button>
    </form>
</div>

<div class="post-container">
    <h2>📋 Recent Dispatches</h2>
    <table class="post-table">
        <thead>
            <tr>
                <th style="width: 25%">Title</th>
                <th style="width: 40%">Description</th>
                <th style="width: 15%">Created By</th>
                <th style="width: 20%">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td style="font-weight: bold;">{{ $post->title }}</td>
                <td>{{ $post->description ?? '...' }}</td>
                <td style="font-style: italic;">{{ $post->created_by }}</td>
                <td>
                    @if($post->status == 1)
                        <span class="status-badge status-lurking">Lurking</span>
                    @elseif($post->status == 2)
                        <span class="status-badge status-disguised">Disguised</span>
                    @elseif($post->status == 3)
                        <span class="status-badge status-busted">Busted!</span>
                    @else
                        <span class="status-badge">Unknown</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection