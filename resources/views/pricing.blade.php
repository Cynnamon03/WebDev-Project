@extends('common.main')
@section('title', 'Disguise Tiers')
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

    .pricing-wrapper {
        padding: 130px 20px 40px 20px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.9); 
        padding: 40px;
        border-radius: 15px;
        border: 2px dashed #333;
    }

    .layout-row {
        display: flex;
        flex-wrap: wrap; 
        gap: 40px;
    }

    .col-left {
        flex: 1 1 300px; 
        max-width: 350px;
    }

    .col-right {
        flex: 2 1 600px; 
    }

    .card {
        background: #e9ecef; 
        padding: 30px;
        border: 3px solid #333;
        box-shadow: 6px 6px 0px #333; 
    }

    .input-group {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .input-group label {
        width: 80px;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .input-group input {
        flex: 1;
        padding: 8px;
        border: 2px solid #333;
        outline: none;
    }

    .input-group input:focus {
        border-color: #fca311;
    }

    .login-actions {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 10px;
        padding-left: 80px; 
    }

    .btn {
        background: white;
        color: #333;
        padding: 8px 20px;
        font-weight: bold;
        border: 2px solid #333;
        box-shadow: 3px 3px 0px #333;
        cursor: pointer;
        transition: transform 0.1s, box-shadow 0.1s;
    }

    .btn:active {
        transform: translate(2px, 2px);
        box-shadow: 1px 1px 0px #333;
    }

    .forgot-link {
        color: #0066cc;
        text-decoration: underline;
        font-size: 0.9rem;
    }

    .content-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .content-header h1 {
        font-size: 2.8rem;
        margin: 0 0 15px 0;
    }

    .content-header p {
        line-height: 1.6;
        color: #555;
        max-width: 600px;
        margin: 0 auto;
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 20px;
        margin-bottom: 50px;
    }

    .feature-box {
        aspect-ratio: 4 / 3;
        border: 2px solid #333;
        position: relative;
        background: white;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        color: #888;
    }

    .feature-box::before, .feature-box::after {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        border-bottom: 2px solid #ddd;
        transform-origin: center;
    }

    .feature-box::before { transform: rotate(35deg) scale(1.5); }
    .feature-box::after { transform: rotate(-35deg) scale(1.5); border-bottom-color: #ddd; }

    .table-section h3 {
        text-align: center;
        margin-bottom: 20px;
    }

    .plan-table {
        width: 100%;
        border-collapse: collapse;
    }

    .plan-table th, .plan-table td {
        padding: 15px 10px;
        text-align: center;
        border-bottom: 1px solid #bbb;
    }

    .plan-table th:first-child, .plan-table td:first-child {
        text-align: left;
        font-weight: bold;
        width: 40%;
    }

    @media (max-width: 900px) {
        .feature-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
        .col-left { max-width: 100%; margin-bottom: 30px; }
        .feature-grid { grid-template-columns: 1fr; }
        .input-group { flex-direction: column; align-items: flex-start; }
        .input-group label { margin-bottom: 5px; }
        .login-actions { padding-left: 0; }
        .table-section { overflow-x: auto; }
        .plan-table th, .plan-table td { padding: 10px 5px; font-size: 0.85rem; }
        .plan-table th:first-child, .plan-table td:first-child { width: 35%; }
    }
</style>

<div class="pricing-wrapper">
    <div class="container">
        <div class="layout-row">
            <div class="col-left">
                <div class="card">
                    <form action="#" method="POST">
                        <div class="input-group">
                            <label for="email"><i class="bi bi-envelope-fill"></i> Email:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="input-group">
                            <label for="password"><i class="bi bi-lock-fill"></i> Password:</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="login-actions">
                            <button type="submit" class="btn">Login</button>
                            <a href="#" class="forgot-link">Forgot password?</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-right">
                <div class="content-header">
                    <h1>Disguise Tiers</h1>
                    <p>Choose the perfect disguise setup to blend in with the Pikachu crowd. 
                    Whether you're a lone ghost seeking a friend or running a full spooky squad, 
                    we have the right materials for you.</p>
                </div>

                <div class="feature-grid">
                    <div class="feature-box">Rag</div>
                    <div class="feature-box">Stick</div>
                    <div class="feature-box">Marker</div>
                    <div class="feature-box">Buttons</div>
                    <div class="feature-box">Thread</div>
                    <div class="feature-box">Shadow</div>
                </div>

                <div class="table-section">
                    <h3>Compare Plans</h3>
                    <table class="plan-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Lonely Ghost<br>(Free)</th>
                                <th>Spooky Squad<br>(Pro)</th>
                                <th>Shadow Legion<br>(Enterprise)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Basic Disguise</td>
                                <td>✔️</td>
                                <td>✔️</td>
                                <td>✔️</td>
                            </tr>
                            <tr>
                                <td>Shadow Sneak Access</td>
                                <td></td>
                                <td>✔️</td>
                                <td>✔️</td>
                            </tr>
                            <tr>
                                <td>Custom Button Eyes</td>
                                <td></td>
                                <td></td>
                                <td>✔️</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection