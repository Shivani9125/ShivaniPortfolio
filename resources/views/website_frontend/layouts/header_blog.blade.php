<style>

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        top: 0;
        right: 0;
        /* Sidebar opens from RIGHT */
        background: #fff;
        overflow-x: hidden;
        transition: 0.3s;
        padding-top: 70px;
        z-index: 999999;
        box-shadow: -3px 0 10px rgba(0, 0, 0, 0.2);
    }

    .sidebar a {
        padding: 15px 25px;
        text-decoration: none;
        font-size: 18px;
        color: #333;
        display: block;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 26px;
    }

    .main-header .nav-link {
        color: var(--color-grey-13, #1F2124) !important;

    }

    /* Navbar should be relative */
    .navbar {
        position: relative;
    }

    /* Submenu parent must not restrict width */
    .nav-item.submenu {
        position: static !important;
    }

    /* FULL width dropdown */
    .nav-item.submenu>ul {
        position: absolute;
        top: 100%;
        left: 0;

        width: 100vw;
        /* FULL SCREEN WIDTH */
        margin-left: calc(-50vw + 50%);
        /* Ignore container width */

        background: rgba(255, 255, 255, 0.75);
        /* Transparent white */
        backdrop-filter: blur(10px);
        /* BLUR EFFECT */
        -webkit-backdrop-filter: blur(10px);

        padding: 20px 0;

        visibility: hidden;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
        z-index: 999999;
    }

    .nav-item.submenu:hover>ul {
        visibility: visible;
        opacity: 1;
        transform: translateY(0);
        background: var(--color-grey-96, #F1F5F9);
        text-align: center;
        border: 1px solid #F1F5F9;
        padding: 26px;
    }

    /* Dropdown links */
    .nav-item.submenu>ul li a {
        display: block;
        padding: 12px 30px;
        width: 100%;
    }

    /* Hidden blur layer (no extra HTML needed) */
    body::before {
        content: "";
        position: fixed;
        inset: 0;
        background: rgba(255, 255, 255, 0.35);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        z-index: 9999998;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    /* When dropdown opens — show blur */
    body.menu-open::before {
        opacity: 1;
        pointer-events: auto;
    }

   


</style>
@php
    $meditationCategoryId = \App\Models\BlogCategory::where('title', 'Meditation')->value('id');
    $yogaCategoryId = \App\Models\BlogCategory::where('title', 'Yoga')->value('id');
    $stressManagementId = \App\Models\BlogCategory::where('title', 'Stress Management')->value('id');
    $weightLossId = \App\Models\BlogCategory::where('title', 'Weight Loss')->value('id');
    $intermittentFastId = \App\Models\BlogCategory::where('title', 'Intermittent Fasting')->value('id');
    $healthId = \App\Models\BlogCategory::where('title', 'Gut Health')->value('id');



    $currentCategoryId = request()->segment(4);
@endphp

<div class="w-100 py-2" style="background: linear-gradient(90deg, #21AEC0 0%, #06B883 100%);">
    <div class="container d-flex justify-content-center align-items-center text-white gap-2">

        <span class="fw-semibold " style="font-size:12px">Start your Holistic Wellness journey with 14 days of free online Yoga!</span>

        <a href="#" class="btn btn-light btn-sm px-3 fw-bold d-flex align-items-center gap-2"
            style="border-radius: 42px;font-size:15px;
                 background: var(--color-azure-1142, #0F172A6B);color: var(--color-white-solid, #FFFFFF); border:none;">
            Signup for Free

            <span class="d-inline-flex justify-content-center align-items-center" style="width: 22px; height: 22px; 
                 ">
                <i class="fa-solid fa-arrow-right"></i>

            </span>
        </a>

    </div>
</div>
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/frontend/images/elevana_logo1.png')}}" alt="Logo" style="width:131px;">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">

                        <ul class="navbar-nav d-flex justify-content-end" id="menu">

                            <li class="nav-item">
                                <a class="nav-link {{ $currentCategoryId == $meditationCategoryId ? 'active-category' : '' }}"
                                    href="{{ route('blog.category', ['category' => $meditationCategoryId]) }}"
                                    style="font-weight: 500;">
                                    Meditation
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $currentCategoryId == $yogaCategoryId ? 'active-category' : '' }}"
                                    href="{{ route('blog.category', ['category' => $yogaCategoryId]) }}"
                                    style="font-weight: 500;">
                                    Yoga
                                </a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="#" style="font-weight: 500;">Topics</a>
                                <ul>
                                    @if($stressManagementId)
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('blog.category', ['category' => $stressManagementId]) }}">
                                                Stress Management
                                            </a>
                                        </li>
                                    @endif

                                    @if($weightLossId)
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('blog.category', ['category' => $weightLossId]) }}">
                                                Weight Loss
                                            </a>
                                        </li>
                                    @endif

                                    @if($intermittentFastId)
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('blog.category', ['category' => $intermittentFastId]) }}">
                                                Intermittent Fasting
                                            </a>
                                        </li>
                                    @endif

                                    @if($healthId)
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('blog.category', ['category' => $healthId]) }}">
                                                Health
                                            </a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog.topic') }}">
                                            <i class="fa-solid fa-play me-2" style="font-size: 10px;"></i>All Topics
                                        </a>
                                    </li>
                                </ul>

                            </li>


                            <!-- Search Icon -->
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="#" id="open-search">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                            <!-- Hamburger Icon -->
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="#" id="open-sidebar">
                                    <i class="fa fa-bars" style="font-size: 22px;"></i>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <!-- Main Menu End -->

                <div class="navbar-toggle"></div>

            </div>
        </nav>

        <div class="responsive-menu"></div>
    </div>
</header>

<div class="menu-blur-overlay"></div>

<!-- SIDEBAR -->
<div id="sidebar" class="sidebar">

    <!-- Close Button -->
    <a href="javascript:void(0)" id="close-sidebar"
        class="position-absolute top-0 start-0 mt-3 ms-3 d-flex align-items-center gap-2 text-decoration-none text-dark">
        <span class="fs-3 fw-bold lh-1 border border-dark  px-2">
            ×
        </span>
        <span class="fw-medium">Close</span>
    </a>

    <!-- Main Menu -->
    <div class="sidebar-section text-end">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('pricing') }}">Pricing</a>
        <a href="{{ route('contact_us') }}">Contact</a>
    </div>

    <!-- Blog Category Title -->
    <div class="sidebar-section text-end mt-2">
        <a class="sidebar-title
        d-block">
            <strong>BLOG CATEGORIES</strong>
        </a>

        <!-- Blog Links -->
        <a href="{{ route('blog.index') }}">Blog Home</a>
        <a href="#">Fitness</a>
        <a href="#">Lifestyle</a>
        <a href="#">Mental Health</a>
        <a href="#">Nutrition</a>
        <a href="#">Community Spotlight</a>

        <!-- Social Icons -->
        <div class="d-flex align-items-center  mt-3 justify-content-end ">

            <a href="#" class="text-dark p-2">
                <i class="fa-brands fa-square-instagram fs-4 "></i>
            </a>

            <a href="#" class="text-dark p-2">
                <i class="fa-brands fa-youtube fs-4"></i>
            </a>

            <a href="#" class="text-dark p-2">
                <i class="fa-brands fa-linkedin fs-4"></i>
            </a>

        </div>
    </div>

</div>


@push('scripts')

    <script>
        document.getElementById("open-sidebar").onclick = function (e) {
            e.preventDefault();
            document.getElementById("sidebar").style.width = "320px";
        };

        document.getElementById("close-sidebar").onclick = function () {
            document.getElementById("sidebar").style.width = "0";
        };

    </script>



@endpush