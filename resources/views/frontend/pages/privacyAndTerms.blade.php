@extends('layouts.frontend.app.app')
@section('title', 'Home')
@section('content')
    <style>
        .content-box {
            max-width: 800px; /* Adjust as needed */
            margin: 0 auto; /* Center the box horizontally */
            padding: 20px; /* Add padding for spacing */
            border: 1px solid #ccc; /* Add border */
            border-radius: 10px; /* Add rounded corners */
            background-color: #f9f9f9; /* Add background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
            text-align: center; /* Center text within the box */
        }
        .craft-cermony-home-section {
            margin-bottom: 20px; /* Add margin between sections */
        }
        .craft-cermony-home-section-wrapper {
            /* Add any additional styles you need for the wrapper */
        }
        header {
            text-align: center; /* Center the header text */
            margin-bottom: 20px; /* Add margin below the header */
        }
        /* Style paragraphs */
        p {
            font-size: 16px; /* Adjust font size */
            line-height: 1.6; /* Adjust line height for readability */
            margin-bottom: 15px; /* Add spacing between paragraphs */
        }
        /* Style sections */
        section {
            margin-bottom: 30px; /* Add margin below sections */
            text-align: center;
        }
        /* Style divs */
        div {
            margin-bottom: 15px; /* Add margin below divs */
        }
    </style>
    <header>
        <h1>Privacy Policy and Terms of Service</h1>
    </header>

    <section>
        <div class="content-wrapper">
            <div class="craft-cermony-home-section">
                <div class="craft-cermony-home-section-wrapper">
                    {!! $PrivacyTerms->privacy !!}
                </div>
            </div>

            <div class="craft-cermony-home-section">
                <div class="craft-cermony-home-section-wrapper">
                    {!! $PrivacyTerms->terms !!}
                </div>
            </div>
        </div>
    </section>



@endsection

