@extends('layouts.frontend.app.app')
@section('title', 'Business')

@section('content')
    <div class="craft-cermony-business-section">
        <div class="craft-cermony-business-section-wrapper">
            <div class="cermonyTwocolumns">
                <div class="cermony-left-section">
                    <h2 class="main-cermony-heading">
                        Are you a Medium-Large Sized Organization such as a:
                    </h2>
                    <div class="inner-div-of-section">
                        <p>Funeral Home</p>
                        <p>Cemetery</p>
                        <p>Crematory</p>
                        <p>Hospice</p>
                        <p>Hospital</p>
                        <p>Insurance Firm</p>
                        <p>Corporation</p>
                    </div>
                    <div class="row bottom-section">
                        <button class="black-background-btn full-width">
                            Learn more about keeper enterprise solutions
                        </button>
                    </div>
                </div>
                <div class="cermony-right-section">
                    <h2 class="main-cermony-heading">
                        Are you a Small-Medium Sized Organization such as a:
                    </h2>
                    <div class="inner-div-of-section">
                        <p>End-of-life Practitioner</p>
                        <p>Death Doula</p>
                        <p>Independent Funeral Service Provider</p>
                        <p>Religious Community</p>
                        <p>Non-Profit Organization</p>
                        <p>Community Group</p>
                        <p>Event Coordinator</p>
                    </div>
                    <div class="row bottom-section">
                        <button class="black-background-btn full-width">
                            Learn more about keeper enterprise solutions
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="image-of-business">
        <img src="{{asset('frontend/assets/images/hero_2_backgound.jpg')}}" alt="" class="business-img" />
    </div>
@endsection

@section('businessJS')

@endsection
