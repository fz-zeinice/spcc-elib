@extends('layouts.app')

@section('content')

    <style>

        .container {
            margin-top: 50px;
        }
        .header {
            text-align: center;
            padding: 50px 0;
            background-color: #1230AE;
            color: white;
        }
        .header h1 {
            margin: 0;
            font-size: 36px;
        }
        .content {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .content h2 {
            color: #1230AE;
        }
        .subject-list {
            list-style-type: none;
            padding: 0;
        }
        .subject-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .subject-list li a {
            text-decoration: none;
            color: #1230AE;
            font-weight: bold;
        }
        .subject-list li a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #1230AE;
            color: white;
            margin-top: 20px;
        }
    </style>

    <div class="container">
        <!-- <div class="header">
            <h1>Book Subjects</h1>
        </div> -->
        <div class="content">
            <h2>Available Subjects</h2>
            <ul class="subject-list">
                <li><a href="#">Mathematics</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Literature</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Arts</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Education</a></li>
                <li><a href="#">Law</a></li>
            </ul>
        </div>
    </div>

    <script>
        function searchFunction(event) {
            event.preventDefault();
            const query = document.getElementById('searchInput').value;
            alert('Search functionality not implemented yet. You searched for: ' + query);
        }
    </script>


@endsection
