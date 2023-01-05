<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    <a href="" class="navbar-brand">Logo</a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add.blog')}}" class="nav-link">Add Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('manage.blog')}}" class="nav-link">View Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">Add Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">View Category</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sliders.create')}}" class="nav-link">Add Slider</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('sliders.index')}}" class="nav-link">View Slider</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tags.create')}}" class="nav-link">Add Tag</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tags.index')}}" class="nav-link">View Tag</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">logout</a>
                            <form action="{{route('logout')}}" method="post" id="logoutForm">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>

        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif


@yield('body')
<script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('message'))
    <script>
        toastr.success('{{Session::get('message')}}');
    </script>
@endif

@if(Session::has('error'))
    <script>
        toastr.error('{{Session::get('error')}}');
    </script>
@endif
</body>
</html>
