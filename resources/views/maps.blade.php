@extends('welcome')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lokasi Tempat</h2>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.9743263470036!2d98.70451215609164!3d3.5933612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131099566b7cd%3A0x36b366f73ab155db!2sParis%20Wrought%20Iron!5e0!3m2!1sid!2sid!4v1718935247874!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <style>
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 8px;
        }

        h2 {
            font-family: 'Arial', sans-serif;
            color: #333;
        }
    </style>
@endsection
