@extends('layouts.frontend.app.app')
@section('title', 'Faqs')

@section('content')

    @foreach($faq->groupBy('topic_id') as $topicId => $faqs)
        <div class="faqs-browse-by-topic-wrapper">
            <div class="faqs-browse-by-topic-wrapper-insider">
                <h1 class="faqs-main-heading">Browse By Topic</h1>
                <div class="grid-of-browse-by-topic">
                    @foreach($faq as $item)

                        @if(isset($item->topic))
                            <a class="topic-wrapper" href="#{{ $item->topic }}">
                                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M12 17V11" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                        <circle cx="1" cy="1" r="1" transform="matrix(1 0 0 -1 11 9)" fill="#1C274C"></circle>
                                        <path
                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                            stroke="#1C274C" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                                <h1>{{$item->topic}}</h1>
                            </a>
                        @endif
                    @endforeach
                </div>

                <!-- On-page search -->
                <div class="on-page-search">
                    <input type="text" id="searchInput" placeholder="Search on this page" onkeyup="searchOnPage()">
                    <div id="searchResult"></div>
                </div>
            </div>
        </div>

        @if($topicId)
            @php
                $topic = \App\Models\Faq::where('id', $topicId)->value('topic');
            @endphp
            <div class="faqs-designing-wrapper" id="{{ $topic }}">
                <div class="faqs-designing-wrapper-insider">
                    <h1 class="faqs-main-heading">{{ $topic }}</h1>
                    <div class="faqs-section">
                        @foreach($faqs as $faq)
                            @if($faq->question && $faq->answer)
                                <div>
                                    <button class="accordion">{{ $faq->question }}</button>
                                    <div class="panel">
                                        <p class="panel-text">{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    @endforeach





@endsection


@section('faqJS')
    <script>
        function search() {
            // Get the value from the search input
            var searchInput = document.querySelector('.searchInput').value;

            // Perform your search operation here using the searchInput value

            // For now, let's just log the searchInput value
            console.log('Search query:', searchInput);
        }
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
        function searchOnPage() {
            var input, filter, grid, a, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            grid = document.getElementsByClassName("grid-of-browse-by-topic")[0];
            a = grid.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>

@endsection
