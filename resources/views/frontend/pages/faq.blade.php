@extends('layouts.app.app')
@section('title', 'Faqs')

@section('content')
    <div class="faqs-browse-by-topic-wrapper">
        <div class="faqs-browse-by-topic-wrapper-insider">
            <h1 class="faqs-main-heading">Browse By Topic</h1>
            <div class="grid-of-browse-by-topic">
                <a class="topic-wrapper" href="#general-faqs">
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
                    <h1>General FAQS</h1>
                </a>
                <a class="topic-wrapper" href="#creating-and-editing-faqs">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                         fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <title></title>
                            <g id="Complete">
                                <g id="edit">
                                    <g>
                                        <path d="M20,16v4a2,2,0,0,1-2,2H4a2,2,0,0,1-2-2V6A2,2,0,0,1,4,4H8" fill="none"
                                              stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"></path>
                                        <polygon fill="none" points="12.5 15.8 22 6.2 17.8 2 8.3 11.5 8 16 12.5 15.8"
                                                 stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
                                                 stroke-width="2"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h1>Creating & Editing a memorial</h1>
                </a>
                <a class="topic-wrapper" href="#online-memorial">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M4 21C4 17.4735 6.60771 14.5561 10 14.0709M19.8726 15.2038C19.8044 15.2079 19.7357 15.21 19.6667 15.21C18.6422 15.21 17.7077 14.7524 17 14C16.2923 14.7524 15.3578 15.2099 14.3333 15.2099C14.2643 15.2099 14.1956 15.2078 14.1274 15.2037C14.0442 15.5853 14 15.9855 14 16.3979C14 18.6121 15.2748 20.4725 17 21C18.7252 20.4725 20 18.6121 20 16.3979C20 15.9855 19.9558 15.5853 19.8726 15.2038ZM15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <h1>Online Memorial Management</h1>
                </a>
                <a class="topic-wrapper" href="#virtual-and-hybrid-funeral">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    <h1>Virtual & Hybrid Funeral Services</h1>
                </a>
                <a class="topic-wrapper" href="#bussiness-and-org">
                    <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#0d0c0c"
                           stroke-width="4.8">
                            <path
                                d="M3.74157 18.5545C4.94119 20 7.17389 20 11.6393 20H12.3605C16.8259 20 19.0586 20 20.2582 18.5545M3.74157 18.5545C2.54194 17.1091 2.9534 14.9146 3.77633 10.5257C4.36155 7.40452 4.65416 5.84393 5.76506 4.92196M3.74157 18.5545C3.74156 18.5545 3.74157 18.5545 3.74157 18.5545ZM20.2582 18.5545C21.4578 17.1091 21.0464 14.9146 20.2235 10.5257C19.6382 7.40452 19.3456 5.84393 18.2347 4.92196M20.2582 18.5545C20.2582 18.5545 20.2582 18.5545 20.2582 18.5545ZM18.2347 4.92196C17.1238 4 15.5361 4 12.3605 4H11.6393C8.46374 4 6.87596 4 5.76506 4.92196M18.2347 4.92196C18.2347 4.92196 18.2347 4.92196 18.2347 4.92196ZM5.76506 4.92196C5.76506 4.92196 5.76506 4.92196 5.76506 4.92196Z"
                                stroke="#000000" stroke-width="1.5"></path>
                            <path opacity="0.5"
                                  d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8"
                                  stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M3.74157 18.5545C4.94119 20 7.17389 20 11.6393 20H12.3605C16.8259 20 19.0586 20 20.2582 18.5545M3.74157 18.5545C2.54194 17.1091 2.9534 14.9146 3.77633 10.5257C4.36155 7.40452 4.65416 5.84393 5.76506 4.92196M3.74157 18.5545C3.74156 18.5545 3.74157 18.5545 3.74157 18.5545ZM20.2582 18.5545C21.4578 17.1091 21.0464 14.9146 20.2235 10.5257C19.6382 7.40452 19.3456 5.84393 18.2347 4.92196M20.2582 18.5545C20.2582 18.5545 20.2582 18.5545 20.2582 18.5545ZM18.2347 4.92196C17.1238 4 15.5361 4 12.3605 4H11.6393C8.46374 4 6.87596 4 5.76506 4.92196M18.2347 4.92196C18.2347 4.92196 18.2347 4.92196 18.2347 4.92196ZM5.76506 4.92196C5.76506 4.92196 5.76506 4.92196 5.76506 4.92196Z"
                                stroke="#000000" stroke-width="1.5"></path>
                            <path opacity="0.5"
                                  d="M9.1709 8C9.58273 9.16519 10.694 10 12.0002 10C13.3064 10 14.4177 9.16519 14.8295 8"
                                  stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    <h1>Business & Organizations </h1>
                </a>
            </div>
        </div>
    </div>
    <div class="faqs-designing-wrapper" id="general-faqs">
        <div class="faqs-designing-wrapper-insider">
            <h1 class="faqs-main-heading">GENERAL FAQ</h1>
            <div class="faqs-section">
                <div>
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
                <div class="">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqs-designing-wrapper background-color-none" id="creating-and-editing-faqs">
        <div class="faqs-designing-wrapper-insider">
            <h1 class="faqs-main-heading">CREATING & EDITING A MEMORIAL</h1>
            <div class="faqs-section">
                <div>
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
                <div class="">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqs-designing-wrapper" id="online-memorial">
        <div class="faqs-designing-wrapper-insider">
            <h1 class="faqs-main-heading">ONLINE MEMORIAL MANAGEMENT</h1>
            <div class="faqs-section">
                <div>
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
                <div class="">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqs-designing-wrapper background-color-none" id="virtual-and-hybrid-funeral">
        <div class="faqs-designing-wrapper-insider">
            <h1 class="faqs-main-heading">VIRTUAL & HYBRID FUNERAL SERVICES</h1>
            <div class="faqs-section">
                <div>
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
                <div class="">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faqs-designing-wrapper" id="bussiness-and-org">
        <div class="faqs-designing-wrapper-insider">
            <h1 class="faqs-main-heading">BUSINESS & ORGANIZATIONS</h1>
            <div class="faqs-section">
                <div>
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
                <div class="">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p class="panel-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut
                            labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip
                            ex ea commodo
                            consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('faqJS')
    <script>
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
    </script>

@endsection
