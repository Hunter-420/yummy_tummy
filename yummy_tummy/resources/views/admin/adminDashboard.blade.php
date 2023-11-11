<x-app-layout>

    <x-slot name="header">
    
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Welcome h, {{ auth()->user()->name }}
</h2>
    </x-slot>


    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    


  <div class="text-center bg-white">

  <div class="row">
    <div class="col-2">
    <div class="container text-left ">
  <div class="col align-items-start">
    <div class="col mt-5">
      One of three columns
    </div>
    <div class="col mt-5">
      One of three columns
    </div>
    <div class="col mt-5 d-flex ">
    
    <img class="h-8  w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
    <h1 class="pl-2">{{ auth()->user()->name }}</h1>
    </div>
  </div>
</div>
    </div>
    <div class="col-9">col-10</div>
  </div>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</body>
</html>

</x-app-layout>

