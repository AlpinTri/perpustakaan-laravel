<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <title>@yield('page') - Perpustakaan</title>
</head>
<body>

  @include('subviews.navbar')

  <div class="container-fluid">
    <div class="row my-3">
      <div class="col text-start">
        <h4 class="my-auto">@yield('page')</h4>
      </div>
      <div class="col d-flex align-items-center justify-content-end">
        <nav aria-label="breadcrumb" class="">
          <ol class="breadcrumb my-auto">
            {{-- <li class="breadcrumb-item active" aria-current="page"></li> --}}
            @yield('breadcrumb-item')
          </ol>
        </nav>
      </div>
    </div>

    @yield('main-content')
    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>