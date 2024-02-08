@extends('layouts.frontend.app.app')
@section('title', 'Events')

@section('content')
    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user linear-background-of-form">
                <div class="header-of-form-profile margin-top">
                    <h1 class="form-top-main-heading-of-profile">Better Mementos with Keeper Plus</h1>

                    @if(auth()->check())
                        @if(auth()->user()->account_type_id == 1)
                            <p>When you upgrade to Keeper Plus, your friends and family will be able to view all uploaded Mementos and
                                download their own copy of these pictures in a single file. With Keeper Plus you change the order in which
                                Memento images and videos appear. Keeper Plus also enables you to upload full HD videos directly from your
                                phone, tablet or computer.</p>
                            <a href="https://buy.stripe.com/test_14k2a63F13IqfcYfYZ" class="black-background-btn" target="_blank">Upgrade Keeper Plus</a>
                        @elseif(auth()->user()->account_type_id == 2)
                            <p>When you upgrade to Keeper Plus, your friends and family will be able to view all uploaded Mementos and
                                download their own copy of these pictures in a single file. With Keeper Plus you change the order in which
                                Memento images and videos appear. Keeper Plus also enables you to upload full HD videos directly from your
                                phone, tablet or computer.</p>
                            <button class="black-background-btn">You Already have the Package Keeper Plus</button>
                        @endif
                    @endif

                </div>
            </div>

        </div>
    </div>
@endsection
