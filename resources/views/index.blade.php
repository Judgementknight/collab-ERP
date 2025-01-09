<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard')</title>
   <!-- Bootstrap CSS -->

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Bootstrap JS Bundle (Includes Popper.js for dropdowns and collapse functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="wrapper">
        <x-sidebar />
        <div class="main">
           <x-navbar/>
            <main class="content px-3 py-2">
              @yield('content')
        
            </main>

           <x-footer/>
        </div>
    </div>
    <script src="{{asset("js/script.js")}}"></script>
    <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>
