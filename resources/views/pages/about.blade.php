@extends('layouts.app')

@section('content')

<style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
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
        }
        .content h2 {
            color: #1230AE;
        }
        .map {
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 0;
            border-radius: 10px;
        }
</style>

    <div class="container">
        <div class="header">
            <h1>About SPCC E-Library</h1>
        </div>
        <div class="content">
            <h2>Welcome to the SPCC E-Library</h2>
            <p>The Systems Plus Computer College Caloocan E-Library is a digital library designed to provide students and faculty with easy access to a wide range of educational resources. Our mission is to support the academic and research needs of our community by offering a comprehensive collection of physical books, digital books, journals, and other learning materials.</p>
            <h2>Location</h2>
            <p>Systems Plus Computer College Caloocan is located at:</p>
            <p><strong>Address:</strong> 141, 143 10th Ave, Grace Park East, Caloocan, 1400 Metro Manila</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.123456789012!2d120.987654321!3d14.654321098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1234567890!2sSystem%20Plus%20Computer%20College%20Caloocan!5e0!3m2!1sen!2sph!4v1611234567890!5m2!1sen!2sph" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>



@endsection

