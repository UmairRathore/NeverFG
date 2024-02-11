@extends('layouts.frontend.app.app')
@section('title', 'NeverFg Plus')
@section('content')

    <!-- Family content -->
    <div class="center-and-margin">

        <div class="profile-icon-content tab-content" id="Info">
            <div class="form-of-logged-in-user">
                <div class="header-of-form-profile margin-top linear-background-of-form">
                    <h1 class="form-top-main-heading-of-profile">NeverFg Plus - $74.99 USD</h1>
                    <div class="grid-of-header-with-features">
                        <div class="single-item-of-grid-feature">
                            <h2>Mementos Images</h2>
                            <p>Visitors enjoy unrestricted access to all uploaded images.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Memorial Pages</h2>
                            <p>Create unlimited memorial pages for your loved ones.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Editable URL</h2>
                            <p>Create a custom and meaningful URL for each memorial page, unique to your loved ones.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Video Uploading</h2>
                            <p>You will be able to upload full HD videos instead of embedded links.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Family Tree</h2>
                            <p>Add images and create profile pages to illustrate the history and genealogy of your loved
                                one.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>NeverFg Administrators</h2>
                            <p>Invite unlimited administrators to help you manage every memorial page you have.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Download Images</h2>
                            <p>Allow visitors to download a local copy of all tribute and memento images, with full
                                privacy settings.</p>
                        </div>
                        <div class="single-item-of-grid-feature">
                            <h2>Events Pages</h2>
                            <p>Plan public or private events and invite your loved ones.</p>
                        </div>
                        <div class="form-of-logged-in-user linear-background-of-form">
                            <div class="header-of-form-profile margin-top">
                                <h1 class="form-top-main-heading-of-profile">Better Mementos with NeverFg Plus</h1>

                                @if(auth()->check())
                                    @if(auth()->user()->account_type_id == 1)
                                        <p>When you upgrade to NeverFg Plus, your friends and family will be able to view all uploaded Mementos and
                                            download their own copy of these pictures in a single file. With NeverFg Plus you change the order in which
                                            Memento images and videos appear. NeverFg Plus also enables you to upload full HD videos directly from your
                                            phone, tablet or computer.</p>
                                        <a href="https://buy.stripe.com/test_14k2a63F13IqfcYfYZ" class="black-background-btn" target="_blank">Upgrade NeverFg Plus</a>
                                    @elseif(auth()->user()->account_type_id == 2)
                                        <p>When you upgrade to NeverFg Plus, your friends and family will be able to view all uploaded Mementos and
                                            download their own copy of these pictures in a single file. With NeverFg Plus you change the order in which
                                            Memento images and videos appear. NeverFg Plus also enables you to upload full HD videos directly from your
                                            phone, tablet or computer.</p>
                                        <button class="black-background-btn">You Already have the Package NeverFg Plus</button>
                                    @endif
                                @endif
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('NeverFgJS')
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
@endsection
